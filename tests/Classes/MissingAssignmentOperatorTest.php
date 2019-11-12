<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingAssignmentOperatorTest extends Proof
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
		$expected  = "This is a class property.";
		$this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
	{
		$nodes=self::$code->find('construct[name="echo"]');
		
		$this->assertEquals(1, $nodes->count(), "Expecting a single echo statement.");
	}
}