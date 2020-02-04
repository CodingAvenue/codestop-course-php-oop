<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingPublicKeywordTest extends Proof
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
        $expected  = "Diana";

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

        $this->assertEquals(1, $nodes->count(), "Expecting an assignment statement.");
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

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testNameCall()
    {
        $name = self::$code->find('property-call[name="name", variable="personObject"]');

        $this->assertEquals(1, $name->count(), "Expecting a 'name' property call of 'personObject'.");
    }
}  