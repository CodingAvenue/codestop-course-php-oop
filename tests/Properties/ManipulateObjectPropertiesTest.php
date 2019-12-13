<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class ManipulateObjectPropertiesTest extends Proof
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
        $expected  = "Chihuahua";

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

    public function testMove()
    {
        $move = self::$code->find('method[name="move"]');

        $this->assertEquals(1, $move->count(), "Expecting a move() method.");
    }

    public function testTypeProperty()
    {
        $type = self::$code->find('property[name="type", type="public"]');

        $this->assertEquals(1, $type->count(), "Expecting a public class property named 'type'.");
    }

    public function testBreedProperty()
    {
        $breed = self::$code->find('property[name="breed", type="public"]');

        $this->assertEquals(1, $breed->count(), "Expecting a public class property named 'breed'.");
    }    

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }  

    public function testBreedCall()
    {
        $breed = self::$code->find('property-call[name="breed", variable="pet"]');

        $this->assertEquals(2, $breed->count(), "Expecting two 'breed' property calls of 'pet'.");
    }
}  