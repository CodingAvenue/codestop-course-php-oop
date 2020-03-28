<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateClassThatImplementsAnInterfaceAnimalTest extends TestCase
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

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testGetType()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a getType() method.");
    }

    public function testIsValidCallArgs()
    {
        $isValid = self::$code->find('method-call[name="isValid", variable="this"]');
        $args = $isValid->getSubNode()->getSubnode();
        $value = $args->find('variable[name="age"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `age` in the 'isValid()' method call of the `Animal` class itself.");
    } 

    public function testGetAge()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a getAge() method.");
    }

    public function testIsValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');

        $this->assertEquals(1, $isValid->count(), "Expecting a isValid() method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }

    public function testTypeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $typeParam = $construct->find('param[name="type"]');

        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named 'type' in the `__construct()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testValueParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="isValid", type="private"]');
        $valueParam = $construct->find('param[name="value"]');

        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named 'age' in the `isValid()` method.");
    }

    public function testTypeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="private"]');

        $this->assertEquals(1, $type->count(), "Expecting a private class property named 'type'.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="private"]');

        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }

    public function testClassAnimal()
    {
        $nodes = self::$code->find('class[name="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(4, $nodes->count(), "Expecting four return statements.");
    }

    public function testAgePropertyCallThis()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $age = $getAge->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting an 'age' property call of the `Person` class itself in the `getAge()` method.");
    }

    public function testAgePropertyCallThisCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $age = $construct->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting an 'age' property call of the `Person` class itself in the `__construct()` method.");
    }

    public function testTypePropertyCallThisCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $type = $construct->find('property-call[name="type", variable="this"]');

        $this->assertEquals(1, $type->count(), "Expecting an 'type' property call of the `Person` class itself in the `__construct()` method.");
    }

    public function testTypePropertyCallThis()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');
        $type = $getType->find('property-call[name="type", variable="this"]');

        $this->assertEquals(1, $type->count(), "Expecting a 'type' property call of the `Person` class itself in the `getType()` method.");
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
} 