<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingObjectOperatorTest extends TestCase
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
        $expected  = "Diana";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two `echo` statements.");
    }

    public function testEchoInEat()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $eat = $subNodes->find('method[name="eat"]');
        $nodes = $eat->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement in the `eat()` method.");
    }

    public function testStringInEchoOfEat()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $eat = $subNodes->find('method[name="eat"]');
        $nodes = $eat->find('construct[name="echo"]');
        $string = $nodes->find('string[value="This is an eat() method."]');

        $this->assertEquals(1, $string->count(), "Expecting a string `This is an eat() method.` in the `echo` statement of the `eat()` method.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
    }

    public function testPersonVariable()
    {
        $person = self::$code->find('variable[name="person"]');

        $this->assertEquals(2, $person->count(), "Expecting two occurrences of the variable named 'person'.");
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

        $this->assertEquals(1, $eat->count(), "Expecting an `eat()` method.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="public"]');

        $this->assertEquals(1, $name->count(), "Expecting a public class property named 'name'.");
    }
    
    public function testNameValue()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="public"]');
        $value = $name->getSubNode()->getSubNode();
        $dianaValue = $value->find('string[value="Diana"]');

        $this->assertEquals(1, $dianaValue->count(), "Expecting the value 'Diana' assigned to the 'name' property.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testNameCall()
    {
        $name = self::$code->find('property-call[name="name", variable="person"]');

        $this->assertEquals(1, $name->count(), "Expecting one 'name' property call of 'person'.");
    }
} 