<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectMultipleErrorsPersonTest extends TestCase
{
    protected static $code;

    public static function setupBeforeClass()
    {
        self::$code = new Code(getcwd() . "/" . getenv("TEST_INDEX"));
    }

    public function testPhpStartTag()
    {
        $checkStart = self::$code->codeStartCheck();

        $this->assertEquals(true, $checkStart, "Expecting the `<?php` tag on the first line.");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting one display() method.");
    }

    public function testCheckAge()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $checkAge = $subNodes->find('method[name="checkAge", type="private"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting a private checkAge() method.");
    }

    public function testGreeting()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $greeting = $subNodes->find('method[name="greeting", type="static"]');

        $this->assertEquals(1, $greeting->count(), "Expecting a static greeting() method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="static"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a static class property named 'name'.");
    }

    public function testNameValue()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="static"]');
        $value = $name->getSubNode()->getSubNode();
        $annaValue = $value->find('string[value="Anna"]');

        $this->assertEquals(1, $annaValue->count(), "Expecting the value 'Anna' assigned to the 'name' property.");
    }

    public function testClassPerson()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }    

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(4, $nodes->count(), "Expecting four return statements.");
    }

    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' in the `__construct()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testGreetParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $greeting = $subNodes->find('method[name="greeting", type="public"]');
        $greetParam = $greeting->find('param[name="greet"]');

        $this->assertEquals(1, $greetParam->count(), "Expecting a parameter named 'greet' in the `greeting()` method.");
    }

    public function testAgeParamCheck()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $checkAge = $subNodes->find('method[name="checkAge", type="private"]');
        $ageParam = $checkAge->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `checkAge()` method.");
    }

    public function testNewAgeParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $newAgeParam = $setAge->find('param[name="newAge"]');

        $this->assertEquals(1, $newAgeParam->count(), "Expecting a parameter named 'newAge' in the `setAge()` method.");
    }

    public function testSelfGreetingCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $parent = $display->find('static-call[class="self", method="greeting"]');

        $this->assertEquals(1, $parent->count(), "Expecting a 'greeting()' method call inside the `display()` method of the `Person` class.");
    }

    public function testGreetingCallArgs()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $greeting = $display->find('static-call[class="self", method="greeting"]');
        $args = $greeting->getSubNode()->getSubnode();
        $value = $args->find('string[value="Hello"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `Hello` in the 'greeting()' method call of the `Person` class itself.");
    }

    public function testAgePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $age = $construct->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting an `age` property call inside the `__construct()` method of the `Person` class itself.");
    }

    public function testAgePropertyCallSet()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $age = $setAge->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting an `age` property call inside the `setAge()` method of the `Person` class itself.");
    }

    public function testAgePropertyCallGet()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $age = $getAge->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting an `age` property call inside the `getAge()` method of the `Person` class itself.");
    }

    public function testGetAgeCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getAge = $display->find('method-call[name="getAge", variable="this"]');

        $this->assertEquals(1, $getAge->count(), "Expecting a 'getAge()' method call inside the `display()` method of the `Person` class itself.");
    }

    public function testCheckAgeCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $checkAge = $construct->find('method-call[name="checkAge", variable="this"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting a 'checkAge()' method call inside the `__construct()` method of the `Person` class itself.");
    }

    public function testCheckAgeCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $checkAge = $setAge->find('method-call[name="checkAge", variable="this"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting a 'checkAge()' method call inside the `setAge()` method of the `Person` class itself.");
    }

    public function testStaticPropertySelfCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $selfCall = $construct->find('static-prop-fetch[class="self"]');

        $this->assertEquals(1, $selfCall->count(), "Expecting one static property call inside the `__contruct()` method of the `Person` class itself.");
    }

    public function testStaticPropertySelfCallGreeting()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $greeting = $subNodes->find('method[name="greeting", type="public"]');
        $selfCall = $greeting->find('static-prop-fetch[class="self"]');

        $this->assertEquals(1, $selfCall->count(), "Expecting one static property call inside the `greeting()` method of the `Person` class itself.");
    }
}