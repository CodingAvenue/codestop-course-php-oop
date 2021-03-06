<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateSimpleClassTest extends TestCase
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
		$expected  = "This is an eat method.";

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

		$this->assertEquals(1, $nodes->count(), "Expecting an assignment statement that assigns a value to the variable 'personObject'.");
	}

	public function testPersonObjectVariable()
	{
		$personObject = self::$code->find('variable[name="personObject"]');

		$this->assertEquals(2, $personObject->count(), "Expecting two occurrences of the variable named 'personObject'.");
	}

	public function testInstantiation()
	{
		$nodes = self::$code->find('instantiate[class="Person"]');

		$this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
	} 

	public function testEat()
	{
		$obj = self::$code->find('class[name="Person"]');
		$subNodes = $obj->getSubnode();
		$eat = $subNodes->find('method[name="eat"]');

		$this->assertEquals(1, $eat->count(), "Expecting an 'eat()' method.");
	}

	public function testNameProperty()
	{
		$obj = self::$code->find('class[name="Person"]');
		$subNodes = $obj->getSubnode();
		$name = $subNodes->find('property[name="name", type="public"]');

		$this->assertEquals(1, $name->count(), "Expecting a public class property named 'name'.");
	}

	public function testClass()
	{
		$nodes = self::$code->find('class[name="Person"]');

		$this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
	}  

	public function testEatCall()
	{
		$eat = self::$code->find('method-call[name="eat", variable="personObject"]');

		$this->assertEquals(1, $eat->count(), "Expecting an 'eat()' method call of 'personObject'.");
	}
}
