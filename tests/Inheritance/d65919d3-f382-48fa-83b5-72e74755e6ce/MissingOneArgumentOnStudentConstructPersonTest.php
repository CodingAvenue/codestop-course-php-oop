<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingOneArgumentOnStudentConstructPersonTest extends TestCase
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

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="protected"]');

        $this->assertEquals(1, $name->count(), "Expecting a protected class property named 'name'.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="private"]');

        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
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
        $nameParam = self::$code->find('param[name="name"]');
    
        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name'.");
    }

    public function testAgeParam()
    {
        $ageParam = self::$code->find('param[name="age"]');
    
        $this->assertEquals(2, $ageParam->count(), "Expecting two parameters named 'age'.");
    }

    public function testNewAgeParam()
    {
        $newAgeParam = self::$code->find('param[name="newAge"]');
    
        $this->assertEquals(1, $newAgeParam->count(), "Expecting a parameter named 'newAge'.");
    }

    public function testNamePropertyCall()
    {
        $name = self::$code->find('property-call[name="name", variable="this"]');

        $this->assertEquals(3, $name->count(), "Expecting three `name` property calls inside the `Person` class itself.");
    }

    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');

        $this->assertEquals(3, $age->count(), "Expecting three `age` property calls inside the `Person` class itself.");
    }

    public function testCheckAgeCall()
    {
        $checkAge = self::$code->find('method-call[name="checkAge", variable="this"]');

        $this->assertEquals(2, $checkAge->count(), "Expecting two 'checkAge()' method calls inside the class itself.");
    }

    public function testGetAgeCall()
    {
        $getAge = self::$code->find('method-call[name="getAge", variable="this"]');

        $this->assertEquals(1, $getAge->count(), "Expecting a 'getAge()' method call inside the class itself.");
    }

}