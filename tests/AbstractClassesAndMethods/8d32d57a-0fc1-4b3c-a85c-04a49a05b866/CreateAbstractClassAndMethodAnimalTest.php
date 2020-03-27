<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAbstractClassAndMethodAnimalTest extends TestCase
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

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testGetAge()
    {
		$obj = self::$code->find('class[name="Animal"]');
		$subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');

        $this->assertEquals(1, $getAge->count(), "Expecting a public method named 'getAge()'.");
    }

    public function testGetType()
    {
		$obj = self::$code->find('class[name="Animal"]');
		$subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');

        $this->assertEquals(1, $getType->count(), "Expecting a public method named 'getType()'.");
    }

    public function testDisplay()
    {
		$obj = self::$code->find('class[name="Animal"]');
		$subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting one display() method.");
    }

    public function testIsValid()
    {
		$obj = self::$code->find('class[name="Animal"]');
		$subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');

        $this->assertEquals(1, $isValid->count(), "Expecting an isValid() method.");
    }

    public function testConstruct()
    {
		$obj = self::$code->find('class[name="Animal"]');
		$subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="private"]');

        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }

    public function testTypeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="private"]');

        $this->assertEquals(1, $type->count(), "Expecting a private class property named 'type'.");
    }

    public function testTypeValue()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="private"]');
        $value = $type->getSubNode()->getSubNode();
        $dogValue = $value->find('string[value="Dog"]');

        $this->assertEquals(1, $dogValue->count(), "Expecting the value 'Dog' assigned to the 'type' property.");
    }

    public function testClassAnimal()
    {
        $nodes = self::$code->find('class[name="Animal", type="abstract"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `Animal` class.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(4, $nodes->count(), "Expecting four return statements.");
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

    public function testIsValidCallArgs()
    {
        $isValid = self::$code->find('method-call[name="isValid", variable="this"]');
        $args = $isValid->getSubNode()->getSubnode();
        $value = $args->find('variable[name="age"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `age` in the 'isValid()' method call of the `Animal` class itself.");
    } 

    public function testTypePropertyCall()
    {
        $type = self::$code->find('property-call[name="type", variable="this"]');

        $this->assertEquals(2, $type->count(), "Expecting two `type` property calls inside the `Animal` class itself.");
    }

    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');

        $this->assertEquals(2, $age->count(), "Expecting two `age` property calls inside the `Animal` class itself.");
    }

    public function testIsValidCall()
    {
        $isValid = self::$code->find('method-call[name="isValid", variable="this"]');

        $this->assertEquals(1, $isValid->count(), "Expecting one 'isValid()' method call inside the `Animal` class itself.");
    }
}