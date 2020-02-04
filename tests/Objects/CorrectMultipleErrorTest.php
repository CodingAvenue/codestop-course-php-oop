<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CorrectMultipleErrorTest extends Proof
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
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two echo statements.");
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

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testNameCall()
    {
        $name = self::$code->find('property-call[name="name", variable="person"]');

        $this->assertEquals(2, $name->count(), "Expecting a 'name' property call of 'person'.");
    }
} 