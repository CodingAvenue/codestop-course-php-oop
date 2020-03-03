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
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a single echo statement.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements.");
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
        $isValid = self::$code->find('method[name="isValid", type="private"]');

        $this->assertEquals(1, $isValid->count(), "Expecting a private method named 'isValid()'.");
    }

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="static"]');

        $this->assertEquals(1, $display->count(), "Expecting a static method named 'display()'.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }

    public function testTypeProperty()
    {
        $type = self::$code->find('property[name="type", type="static"]');

        $this->assertEquals(1, $type->count(), "Expecting a static class property named 'type'.");
    }

    public function testAgeProperty()
    {
        $age = self::$code->find('property[name="age", type="static"]');

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

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'pet'.");
    } 

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two return statements.");
    }

    public function testIf()
    {
        $nodes = self::$code->find('construct[name="if"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two if constructs.");
    }

    public function testAgeParam()
    {
        $ageParam = self::$code->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testTypeParam()
    {
        $typeParam = self::$code->find('param[name="type"]');

        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named 'type' in the `__construct()` method.");
    }

    public function testValueParam()
    {
        $valueParam = self::$code->find('param[name="value"]');

        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named 'value' in the `isValid()` method.");
    }

    public function testIsValidCall()
    {
        $isValid = self::$code->find('method-call[name="isValid", variable="this"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting one 'isValid()' method call inside the `Animal` class itself.");
    }

    public function testStaticPropertySelfCall()
    {
        $selfCall = self::$code->find('static-prop-fetch[class="self"]');

        $this->assertEquals(4, $selfCall->count(), "Expecting four static property calls inside the `Animal` class itself.");
    }
} 