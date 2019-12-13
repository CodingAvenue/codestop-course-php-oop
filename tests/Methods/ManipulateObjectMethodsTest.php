<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class ManipulateObjectMethodsTest extends Proof
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
        $expected  = "The animal type is Cat.";

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

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testPetVariable()
    {
        $pet = self::$code->find('variable[name="pet"]');

        $this->assertEquals(3, $pet->count(), "Expecting three occurrences of the variable named 'pet'.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Animal' class.");
    } 

    public function testChangeType()
    {
        $changeType = self::$code->find('method[name="changeType"]');

        $this->assertEquals(1, $changeType->count(), "Expecting a changeType() method.");
    }

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display"]');

        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testTypeProperty()
    {
        $type = self::$code->find('property[name="type", type="public"]');

        $this->assertEquals(1, $type->count(), "Expecting a public class property named 'type'.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }  

    public function testChangeTypeCall()
    {
        $changeType = self::$code->find('method-call[name="changeType", variable="pet"]');

        $this->assertEquals(1, $changeType->count(), "Expecting a 'changeType()' method call of 'pet'.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="pet"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'pet'.");
    }
} 