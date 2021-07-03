<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class ManipulateObjectMethodsTest extends TestCase
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
        $expected  = "The animal type is Cat.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement in the `display()` method.");
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
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $changeType = $subNodes->find('method[name="changeType"]');

        $this->assertEquals(1, $changeType->count(), "Expecting a `changeType()` method.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display"]');

        $this->assertEquals(1, $display->count(), "Expecting a `display()` method.");
    }

    public function testTypeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="public"]');

        $this->assertEquals(1, $type->count(), "Expecting a public class property named 'type'.");
    }

    public function testTypeValue()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="public"]');
        $value = $type->getSubNode()->getSubNode();
        $dogValue = $value->find('string[value="Dog"]');

        $this->assertEquals(1, $dogValue->count(), "Expecting the value 'Dog' assigned to the 'type' property.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }  

    public function testChangeTypeCall()
    {
        $changeType = self::$code->find('method-call[name="changeType", variable="pet"]');

        $this->assertEquals(1, $changeType->count(), "Expecting one 'changeType()' method call of 'pet'.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="pet"]');

        $this->assertEquals(1, $display->count(), "Expecting one 'display()' method call of 'pet'.");
    }

    public function testNewTypeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $changeType = $subNodes->find('method[name="changeType"]');
        $newTypeParam = $changeType->find('param[name="newType"]');
    
        $this->assertEquals(1, $newTypeParam->count(), "Expecting a parameter named 'newType' in the `changeType()` method.");
    }
             
    public function testChangeTypeCallArgs()
    {
        $changeType = self::$code->find('method-call[name="changeType", variable="pet"]');
        $args = $changeType->getSubNode()->getSubnode();
        $value = $args->find('string[value="Cat"]');
    
        $this->assertEquals(1, $value->count(), "Expecting an argument `Cat` in the 'changeType()' method call of 'pet'.");
    } 

    public function testTypePropertyCallDis()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $type = $display->find('property-call[name="type", variable="this"]');

        $this->assertEquals(1, $type->count(), "Expecting one `type` property call in the `display()` method of the `Animal` class itself.");
    }

    public function testTypePropertyCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $changeType = $subNodes->find('method[name="changeType", type="public"]');
        $type = $changeType->find('property-call[name="type", variable="this"]');

        $this->assertEquals(1, $type->count(), "Expecting one `type` property call in the `changeType()` method of the `Animal` class itself.");
    }
} 