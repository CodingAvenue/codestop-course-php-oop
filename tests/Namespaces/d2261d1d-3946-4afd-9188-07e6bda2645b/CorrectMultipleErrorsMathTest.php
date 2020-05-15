<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectMultipleErrorsMathTest extends TestCase
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

    public function testConstPi()
    {
        $obj = self::$code->find('class[name="Geometry"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testClassGeometry()
    {
        $nodes = self::$code->find('class[name="Geometry"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Geometry` class.");
    }

    public function testReturn()
    {
        $obj = self::$code->find('class[name="Geometry"]');
        $subNodes = $obj->getSubnode();
        $getCircleArea = $subNodes->find('method[name="getCircleArea", type="static"]');
        $nodes = $getCircleArea->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getCircleArea()` method.");
    }

    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="Math"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `Math` namespace definition.");
    }

    public function testGetCircleArea()
    {
        $obj = self::$code->find('class[name="Geometry"]');
        $subNodes = $obj->getSubnode();
        $getCircleArea = $subNodes->find('method[name="getCircleArea", type="static"]');

        $this->assertEquals(1, $getCircleArea->count(), "Expecting one static `getCircleArea()` method.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="Geometry"]');
        $subNodes = $obj->getSubnode();
        $getCircleArea = $subNodes->find('method[name="getCircleArea", type="static"]');
        $radiusParam = $getCircleArea->find('param[name="radius"]');

        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius' in the `getCircleArea()` method.");
    }

    public function testPiCall()
    {
        $obj = self::$code->find('class[name="Geometry"]');
        $subNodes = $obj->getSubnode();
        $getCircleArea = $subNodes->find('method[name="getCircleArea", type="static"]');
        $piCall = $getCircleArea->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `getCircleArea()` method of the `Geometry` class.");
    }
} 