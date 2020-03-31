<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAutoloaderFunctionMammalTest extends TestCase
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

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an echo statement inside the `display()` method.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testStage()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $stage = $subNodes->find('method[name="stage", type="public"]');

        $this->assertEquals(1, $stage->count(), "Expecting a stage() method.");
    }

    public function testSpecies()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $species = $subNodes->find('method[name="species", type="public"]');

        $this->assertEquals(1, $species->count(), "Expecting a species() method.");
    }

    public function testMammalClass()
    {
        $nodes = self::$code->find('class[name="Mammal", extends="Animal", interface="LifeCycle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Mammal` class that extends the `Animal` class and implements the `LifeCycle` interface.");
    }

    public function testReturnSpecies()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $species = $subNodes->find('method[name="species", type="public"]');
        $nodes = $species->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a return statement in the `species()` method.");
    }

    public function testReturnStage()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $stage = $subNodes->find('method[name="stage", type="public"]');
        $nodes = $stage->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a return statement in the `stage()` method.");
    }

    public function testStageCall()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $stage = $display->find('method-call[name="stage", variable="this"]');

        $this->assertEquals(1, $stage->count(), "Expecting a 'stage()' method call inside the `display()` method of the `Mammal` class itself.");
    }

    public function testSpeciesCall()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $species = $display->find('method-call[name="species", variable="this"]');

        $this->assertEquals(1, $species->count(), "Expecting a 'species()' method call inside the `display()` method of the `Mammal` class itself.");
    } 

    public function testParentGetTypeCall()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $parent = $display->find('static-call[class="parent", method="getType"]');

        $this->assertEquals(1, $parent->count(), "Expecting a 'getType()' method call of the `Animal` parent class inside the `display()` method.");
    }
}