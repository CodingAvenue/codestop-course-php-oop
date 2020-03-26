<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreatePlantObjectTest extends TestCase
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
        $expected  = "Plants grow everywhere.";

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

        $this->assertEquals(1, $nodes->count(), "Expecting an assignment statement that assigns a value to the variable `plant`.");
    }

    public function testPlantVariable()
    {
        $plant = self::$code->find('variable[name="plant"]');

        $this->assertEquals(2, $plant->count(), "Expecting two occurrences of the variable named 'plant'.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Plant"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Plant' class.");
    } 

    public function testGrow()
    {
        $obj = self::$code->find('class[name="Plant"]');
        $subNodes = $obj->getSubnode();
        $grow = $subNodes->find('method[name="grow"]');

        $this->assertEquals(1, $grow->count(), "Expecting a grow() method.");
    }

    public function testTypeProperty()
    {
        $obj = self::$code->find('class[name="Plant"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="public"]');
      
        $this->assertEquals(1, $type->count(), "Expecting a public class property named 'type'.");
    }

    public function testTypeValue()
    {
        $obj = self::$code->find('class[name="Plant"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="public"]');
        $value = $type->getSubNode()->getSubNode();
        $treeValue = $value->find('string[value="Tree"]');
        
        $this->assertEquals(1, $treeValue->count(), "Expecting the value 'Tree' assigned to the 'type' property.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Plant"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Plant` class.");
    }  

    public function testGrowCall()
    {
        $grow = self::$code->find('method-call[name="grow", variable="plant"]');

        $this->assertEquals(1, $grow->count(), "Expecting a 'grow()' method call of 'plant'.");
    }
} 