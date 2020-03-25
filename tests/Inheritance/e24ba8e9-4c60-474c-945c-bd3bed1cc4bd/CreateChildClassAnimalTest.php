<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateChildClassAnimalTest extends TestCase
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
		
        $this->assertEquals(1, $nodes->count(), "Expecting an echo statement.");
    }
    
    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
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

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting one display() method.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
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

    public function testAgeParam()
    {
        $ageParam = self::$code->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age'.");
    }

    public function testTypeParam()
    {
        $typeParam = self::$code->find('param[name="type"]');

        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named 'type'.");
    }

    public function testValueParam()
    {
        $valueParam = self::$code->find('param[name="value"]');
    
        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named 'value' in the `isValid()` method.");
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
    
    public function testGetTypeCall()
    {
        $getType = self::$code->find('method-call[name="getType", variable="this"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a 'getType()' method call inside the class itself.");
    }
    
    public function testGetAgeCall()
    {
        $getAge = self::$code->find('method-call[name="getAge", variable="this"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a 'getAge()' method call inside the class itself.");
    }

}