<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingReturnThisOnMethodTest extends Proof
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
        $expected  = "My name is Charles.";

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

    public function testChangeName()
    {
        $changeName = self::$code->find('method[name="changeName"]');

        $this->assertEquals(1, $changeName->count(), "Expecting a changeName() method.");
    }

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display"]');

        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testNameProperty()
    {
        $name = self::$code->find('property[name="name", type="public"]');

        $this->assertEquals(1, $name->count(), "Expecting a public class property named 'name'.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testChangeNameCall()
    {
        $changeName = self::$code->find('method-call[name="changeName", variable="personObject"]');

        $this->assertEquals(1, $changeName->count(), "Expecting a 'changeName()' method call of 'personObject'.");
    }  

    // How to test chain methods?... Need to consult the devs...

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a return statement.");
    }
    
    public function testNewNameParam()
    {
        $newNameParam=self::$code->find('param[name="newName"]');
    
        $this->assertEquals(1, $newNameParam->count(), "Expecting a parameter named 'newName' in the `changeName()` method.");
    }
} 