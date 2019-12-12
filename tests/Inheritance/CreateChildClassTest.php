<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CreateChildClassTest extends Proof
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
		$expected  = "The Cat named Catsie is a 3-year old mammal.";
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
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }

    public function testNameProperty()
    {
        $name = self::$code->find('property[name="name", type="private"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a private class property named 'name'.");
    }
    
	public function testClass()
    {
        $nodes = self::$code->find('class[name="Mammal", extends="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class that extends the `Animal` class.");
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
/*    
    public function testFunctionCall()
    {
        $nodes = self::$code->find('call[name="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
    */
    //still need to test the arguments and parameters of the methods.
}