<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CreatePlantObjectTest extends Proof
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
		$expected  = "Plants grow everywhere.";
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
	
        $this->assertEquals(1, $nodes->count(), "Expecting an assignment statement that assigns a value to the variable `plantObject`.");
	}
	
	public function testPlantObjectVariable()
    {
        $plantObject = self::$code->find('variable[name="plantObject"]');
        
        $this->assertEquals(2, $plantObject->count(), "Expecting two occurrences of the variable named 'plantObject'.");
    }
    
	public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Plant"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Plant' class.");
    } 
    
	public function testGrow()
    {
        $grow=self::$code->find('method[name="grow"]');
        
        $this->assertEquals(1, $grow->count(), "Expecting a grow() method.");
	}
	
	public function testTypeProperty()
    {
        $type = self::$code->find('property[name="type", type="public"]');
        
        $this->assertEquals(1, $type->count(), "Expecting a public class property named 'type'.");
    }
    
	public function testClass()
    {
        $nodes=self::$code->find('class[name="Plant"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Plant` class.");
	}  
	
	public function testGrowCall()
    {
        $grow = self::$code->find('method-call[name="grow", variable="plantObject"]');
        
        $this->assertEquals(1, $grow->count(), "Expecting a 'grow()' method call of 'plantObject'.");
	}
} 