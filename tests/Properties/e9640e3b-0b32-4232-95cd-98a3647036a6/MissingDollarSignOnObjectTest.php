<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingDollarSignOnObjectTest extends TestCase
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
        $expected  = "Canada";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two echo statements.");
    }

    public function testEchoEat()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $eat = $subNodes->find('method[name="eat"]');
        $nodes = $eat->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `eat()` method.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testPersonVariable()
    {
        $person = self::$code->find('variable[name="person"]');

        $this->assertEquals(3, $person->count(), "Expecting three occurrences of the variable named 'person'.");
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

        $this->assertEquals(1, $eat->count(), "Expecting an eat() method.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="public"]');

        $this->assertEquals(1, $name->count(), "Expecting a public class property named 'name'.");
    }

    public function testAddressProperty()
    {        
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $address = $subNodes->find('property[name="address", type="public"]');

        $this->assertEquals(1, $address->count(), "Expecting a public class property named 'address'.");
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

    public function testAddressCall()
    {
        $address = self::$code->find('property-call[name="address", variable="person"]');

        $this->assertEquals(2, $address->count(), "Expecting two 'address' property calls of 'person'.");
    }
}  