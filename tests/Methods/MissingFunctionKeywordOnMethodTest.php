<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingFunctionKeywordOnMethodTest extends Proof
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
		$expected  = "Charles";
		$this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
	{
		$nodes=self::$code->find('construct[name="echo"]');
		
		$this->assertEquals(1, $nodes->count(), "Expecting a single echo statement.");
    }
    
	public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
	}
	
	public function testPersonObjectVariable()
    {
        $personObject = self::$code->find('variable[name="personObject"]');
        
        $this->assertEquals(3, $personObject->count(), "Expecting three occurrences of the variable named 'personObject'.");
    }
    
	public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
    } 
    
	public function testChangeName()
    {
        $changeName=self::$code->find('method[name="changeName"]');
        
        $this->assertEquals(1, $changeName->count(), "Expecting a changeName() method.");
	}
	
	public function testNameProperty()
    {
        $name = self::$code->find('property[name="name", type="public"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a public class property named 'name'.");
    }
    
	public function testClass()
    {
        $nodes=self::$code->find('class[name="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
	}  
	
	public function testChangeNameCall()
    {
        $changeName = self::$code->find('method-call[name="changeName", variable="personObject"]');
        
        $this->assertEquals(1, $changeName->count(), "Expecting a 'changeName()' method call of 'personObject'.");
	}
} 
