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
        $pi = self::$code->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testClassGeometry()
    {
        $nodes = self::$code->find('class[name="Geometry"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Geometry` class.");
    }

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a return statement.");
    }

    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="Math"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `Math` namespace definition.");
    }

    public function testGetCircleArea()
    {
        $getCircleArea = self::$code->find('method[name="getCircleArea", type="static"]');

        $this->assertEquals(1, $getCircleArea->count(), "Expecting a static getCircleArea() method.");
    }

    public function testRadiusParam()
    {
        $radiusParam = self::$code->find('param[name="radius"]');

        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius'.");
    }

    public function testPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call inside the `Geometry` class.");
    }
} 