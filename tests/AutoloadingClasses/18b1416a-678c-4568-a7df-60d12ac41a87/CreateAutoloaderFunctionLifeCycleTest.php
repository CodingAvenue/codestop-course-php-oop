<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAutoloaderFunctionLifeCycleTest extends TestCase
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

    public function testLifeCycleInterface()
    {
        $nodes = self::$code->find('interface[name="LifeCycle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a declaration of the `LifeCycle` interface.");
    }

    public function testStage()
    {
        $obj = self::$code->find('interface[name="LifeCycle"]');
        $subNodes = $obj->getSubnode();
        $stage = $subNodes->find('method[name="stage", type="public"]');

        $this->assertEquals(1, $stage->count(), "Expecting a `stage()` method.");
    }

    public function testSpecies()
    {
        $obj = self::$code->find('interface[name="LifeCycle"]');
        $subNodes = $obj->getSubnode();
        $species = $subNodes->find('method[name="species", type="public"]');

        $this->assertEquals(1, $species->count(), "Expecting a `species()` method.");
    }
}