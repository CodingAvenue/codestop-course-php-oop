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
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $changeName = $subNodes->find('method[name="changeName"]');

        $this->assertEquals(1, $changeName->count(), "Expecting a changeName() method.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display"]');

        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
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

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a return statement.");
    }
    
    public function testNewNameParam()
    {
        $newNameParam = self::$code->find('param[name="newName"]');
    
        $this->assertEquals(1, $newNameParam->count(), "Expecting a parameter named 'newName' in the `changeName()` method.");
    }

    public function testChainMethodCalls()
    {
        $display = self::$code->find('method-call[name="display"]');
        $subNode = $display->getSubNode();
        $changeName = $subNode->find('method-call[name="changeName", variable="personObject"]');

        $this->assertEquals(1, $changeName->count(), "Expecting chain method calls for `changeName()` and `display()` methods of 'personObject'.");
    }  
         
    public function testChangeNameCallArgs()
    {
        $changeName = self::$code->find('method-call[name="changeName", variable="personObject"]');
        $args = $changeName->getSubNode()->getSubnode();
        $value = $args->find('string[value="Charles"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `Charles` in the 'changeName()' method call of 'personObject'.");
    } 
  
    public function testNamePropertyCall()
    {
        $name = self::$code->find('property-call[name="name", variable="this"]');

        $this->assertEquals(2, $name->count(), "Expecting two `name` property calls inside the `Person` class itself.");
    }
}
