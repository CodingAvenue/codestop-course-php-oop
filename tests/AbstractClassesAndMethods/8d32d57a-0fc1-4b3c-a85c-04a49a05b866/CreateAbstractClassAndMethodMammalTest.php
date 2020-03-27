<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAbstractClassAndMethodMammalTest extends TestCase
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
        $expected  = "The Cat named Catsie is a 3-year old mammal.";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }
    
    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }
	
    public function testPetMammalVariable()
    {
        $petMammal = self::$code->find('variable[name="petMammal"]');
        
        $this->assertEquals(2, $petMammal->count(), "Expecting two occurrences of the variable named 'petMammal'.");
    }
    
    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Mammal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Mammal' class.");
    } 
        
    public function testGetName()
    {
        $getName = self::$code->find('method[name="getName", type="public"]');
        
        $this->assertEquals(1, $getName->count(), "Expecting a public method named 'getName()'.");
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

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="private"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a private class property named 'name'.");
    }

    public function testClassMammal()
    {
        $nodes = self::$code->find('class[name="Mammal", extends="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Mammal` class that extends the `Animal` class.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="petMammal"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'petMammal'.");
    }

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
    
        $this->assertEquals(1, $nodes->count(), "Expecting one return statement.");
    }

    public function testNameParam()
    {
        $nameParam = self::$code->find('param[name="name"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name'.");
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

    public function testParentCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        
        $this->assertEquals(1, $parent->count(), "Expecting a '__construct()' method call of the parent class.");
    } 

    public function testParentGetTypeCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="getType"]');
        
        $this->assertEquals(1, $parent->count(), "Expecting a 'getType()' method call of the parent class.");
    } 

    public function testParentGetAgeCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="getAge"]');
        
        $this->assertEquals(1, $parent->count(), "Expecting a 'getAge()' method call of the parent class.");
    }  

    public function testParentCallTypeArgs()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $typeArgs = $parentArgs->getSubnode();
        $typeVar = $typeArgs->find('variable[name="type"]');

        $this->assertEquals(1, $typeVar->count(), "Expecting a 'type' argument in the '__construct()' method call of the parent class.");
    }

    public function testParentCallAgeArgs()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $ageArgs = $parentArgs->getSubnode();
        $ageVar = $ageArgs->find('variable[name="age"]');

        $this->assertEquals(1, $ageVar->count(), "Expecting an 'age' argument in the '__construct()' method call of the parent class.");
    }

    public function testGetNameCall()
    {
        $getName = self::$code->find('method-call[name="getName", variable="this"]');

        $this->assertEquals(1, $getName->count(), "Expecting a 'getName()' method call inside the class itself.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
}