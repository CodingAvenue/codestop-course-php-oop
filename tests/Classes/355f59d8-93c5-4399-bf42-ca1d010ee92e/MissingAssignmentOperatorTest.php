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

		$this->assertEquals(2, $nodes->count(), "Expecting two `echo` statements.");
	}

	public function testEchoInMyMethod()
	{
		$obj = self::$code->find('class[name="MyClass"]');
		$subNodes = $obj->getSubnode();
		$myMethod = $subNodes->find('method[name="myMethod"]');
		$nodes = $myMethod->find('construct[name="echo"]');

		$this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement in the `myMethod()` method.");
	}

	public function testStringInEcho()
	{
		$obj = self::$code->find('class[name="MyClass"]');
		$subNodes = $obj->getSubnode();
		$myMethod = $subNodes->find('method[name="myMethod"]');
		$nodes = $myMethod->find('construct[name="echo"]');
		$string = $nodes->find('string[value="This is a class method."]');

		$this->assertEquals(1, $string->count(), "Expecting a string `This is a class method.` in the `echo` statement of the `myMethod()` method.");
	}

	public function testAssignment()
	{
		$nodes = self::$code->find('operator[name="assignment"]');

		$this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
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
		
		$this->assertEquals(1, $myMethod->count(), "Expecting a `myMethod()` method.");
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

		$this->assertEquals(1, $myProp->count(), "Expecting one 'myProp' property call of 'myObject'.");
	}
		
	public function testNameValue()
	{
		$obj = self::$code->find('class[name="MyClass"]');
		$subNodes = $obj->getSubnode();
		$myProp = $subNodes->find('property[name="myProp", type="public"]');
		$value = $myProp->getSubNode()->getSubNode();
		$string = $value->find('string[value="This is a class property."]');

		$this->assertEquals(1, $string->count(), "Expecting the value 'This is a class property.' assigned to the 'myProp' property.");
	}
}