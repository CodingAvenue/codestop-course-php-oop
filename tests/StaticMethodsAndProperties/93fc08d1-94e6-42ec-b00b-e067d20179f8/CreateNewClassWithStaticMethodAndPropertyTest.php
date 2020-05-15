<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateNewClassWithStaticMethodAndPropertyTest extends TestCase
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

    public function testActualCode()
    {
        $evaluator = self::$code->evaluator();
        $evaled    = $evaluator->evaluate();
        $expected  = "The Cat is 3 years old.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="static"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement in the `display()` method.");
    }

    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements in the `__construct()` method.");
    }

    public function testPetVariable()
    {
        $pet = self::$code->find('variable[name="pet"]');

        $this->assertEquals(2, $pet->count(), "Expecting two occurrences of the variable named 'pet'.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Animal' class.");
    } 

    public function testIsValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');

        $this->assertEquals(1, $isValid->count(), "Expecting a private method named 'isValid()'.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="static"]');

        $this->assertEquals(1, $display->count(), "Expecting a static method named 'display()'.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a `__construct()` method.");
    }

    public function testTypeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="static"]');

        $this->assertEquals(1, $type->count(), "Expecting a static class property named 'type'.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="static"]');

        $this->assertEquals(1, $age->count(), "Expecting a static class property named 'age'.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="pet"]');

        $this->assertEquals(1, $display->count(), "Expecting one 'display()' method call of 'pet'.");
    } 

    public function testReturn()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $nodes = $isValid->find('construct[name="return"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two `return` statements in the `isValid()` method.");
    }

    public function testIf()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $nodes = $isValid->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `if` statement in the `isValid()` method.");
    }

    public function testIfCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `if` statement in the `__construct()` method.");
    }

    public function testTypeValue()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="static"]');
        $value = $type->getSubNode()->getSubNode();
        $dogValue = $value->find('string[value="Dog"]');

        $this->assertEquals(1, $dogValue->count(), "Expecting the value 'Dog' assigned to the 'type' property.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testTypeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $typeParam = $construct->find('param[name="type"]');

        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named 'type' in the `__construct()` method.");
    }

    public function testValueParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $valueParam = $isValid->find('param[name="value"]');

        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named 'value' in the `isValid()` method.");
    }

    public function testIsValidCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $isValid = $construct->find('method-call[name="isValid", variable="this"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting one 'isValid()' method call in the `__construct()` method of the `Animal` class itself.");
    }

    public function testIsValidCallArgs()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $isValid = $construct->find('method-call[name="isValid", variable="this"]');
        $args = $isValid->getSubNode()->getSubnode();
        $value = $args->find('variable[name="age"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `age` in the 'isValid()' method call inside the `__construct()` method of the `Animal` class itself.");
    }

    public function testStaticPropertySelfCallDis()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $selfCall = $display->find('static-prop-fetch[class="self"]');

        $this->assertEquals(2, $selfCall->count(), "Expecting two static property calls in the `display()` method of the `Animal` class itself.");
    }

    public function testStaticPropertySelfCallCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $selfCall = $construct->find('static-prop-fetch[class="self"]');

        $this->assertEquals(2, $selfCall->count(), "Expecting two static property calls in the `__construct()` method of the `Animal` class itself.");
    }
} 