<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class AddConstructorToClassTest extends Proof
{
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
	
        $this->assertEquals(5, $nodes->count(), "Expecting five assignment statements.");
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
           
	public function testSetAge()
    {
        $setAge = self::$code->find('method[name="setAge", type="public"]');
        
        $this->assertEquals(1, $setAge->count(), "Expecting a public method named 'setAge()'.");
    }
    
    public function testGetAge()
    {
        $getAge = self::$code->find('method[name="getAge", type="public"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a public method named 'getAge()'.");
    }

    public function testGetType()
    {
        $getType = self::$code->find('method[name="getType", type="public"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a public method named 'getType()'.");
    }

    public function testChangeType()
    {
        $changeType = self::$code->find('method[name="changeType", type="public"]');
        
        $this->assertEquals(1, $changeType->count(), "Expecting a public method named 'changeType()'.");
    }
    
	public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }
    
	public function testTypeProperty()
    {
        $type = self::$code->find('property[name="type", type="private"]');
        
        $this->assertEquals(1, $type->count(), "Expecting a private class property named 'type'.");
    }

    public function testAgeProperty()
    {
        $age = self::$code->find('property[name="age", type="private"]');
        
        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
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

        $this->assertEquals(4, $nodes->count(), "Expecting four return statements.");
    }

    public function testIf()
    {
        $nodes = self::$code->find('construct[name="if"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three if constructs.");
    }
    //still need to test the arguments and parameters of the methods.
}