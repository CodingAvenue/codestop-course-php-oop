<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CreateSimpleClassTest extends Proof
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
		$expected  = "This is an eat method.";
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
	
        $this->assertEquals(1, $nodes->count(), "Expecting an assignment statement that assigns a value to the variable 'pObject'.");
	}
	
	public function testpObjectVariable()
    {
        $pObject = self::$code->find('variable[name="pObject"]');
        
        $this->assertEquals(2, $pObject->count(), "Expecting two occurrences of the variable named 'pObject'.");
	}

	public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
	} 

	public function testEat()
    {
        $eat=self::$code->find('method[name="eat"]');
        
        $this->assertEquals(1, $eat->count(), "Expecting an 'eat()' method.");
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
	
	public function testEatCall()
    {
        $eat = self::$code->find('method-call[name="eat", variable="pObject"]');
        
        $this->assertEquals(1, $eat->count(), "Expecting an 'eat()' method call of 'pObject'.");
	}
}