<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingAssignmentOperatorTest extends TestCase
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
		$expected  = "This is a class property.";

		$this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
	}

	public function testEcho()
	{
		$nodes = self::$code->find('construct[name="echo"]');

		$this->assertEquals(2, $nodes->count(), "Expecting two echo statements.");
	}

	public function testAssignment()
	{
		$nodes = self::$code->find('operator[name="assignment"]');

		$this->assertEquals(1, $nodes->count(), "Expecting an assignment statement that assigns a value to the variable 'myObject'.");
	}

	public function testMyObjectVariable()
	{
		$myObject = self::$code->find('variable[name="myObject"]');

		$this->assertEquals(2, $myObject->count(), "Expecting two occurrences of the variable named 'myObject'.");
	}

	public function testInstantiation()
	{
		$nodes = self::$code->find('instantiate[class="MyClass"]');

		$this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'MyClass' class.");
	} 

	public function testMyMethod()
	{
		$obj = self::$code->find('class[name="MyClass"]');
		$subNodes = $obj->getSubnode();
		$myMethod = $subNodes->find('method[name="myMethod"]');
		
		$this->assertEquals(1, $myMethod->count(), "Expecting a myMethod() method.");
	}

	public function testMyPropVariable()
	{
		$obj = self::$code->find('class[name="MyClass"]');
		$subNodes = $obj->getSubnode();
		$myProp = $subNodes->find('property[name="myProp", type="public"]');
		
		$this->assertEquals(1, $myProp->count(), "Expecting a public class property named 'myProp'.");
	}

	public function testClass()
	{
		$nodes = self::$code->find('class[name="MyClass"]');

		$this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `MyClass` class.");
	}  

	public function testMyPropCall()
	{
		$myProp = self::$code->find('property-call[name="myProp", variable="myObject"]');

		$this->assertEquals(1, $myProp->count(), "Expecting a 'myProp' property call of 'myObject'.");
	}
}