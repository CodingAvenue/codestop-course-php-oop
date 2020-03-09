<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectMultipleErrorsCircleTest extends TestCase
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

    public function testRadiusProperty()
    {
        $radius = self::$code->find('property[name="radius", type="public"]');

        $this->assertEquals(1, $radius->count(), "Expecting a public class property named 'radius'.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testClassCircle()
    {
        $nodes = self::$code->find('class[name="Circle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class.");
    }

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a return statement.");
    }

    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="Math\Geometry"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `Math\Geometry` namespace definition.");
    }

    public function testGetCircumference()
    {
        $getCircumference = self::$code->find('method[name="getCircumference", type="public"]');

        $this->assertEquals(1, $getCircumference->count(), "Expecting a public getCircumference() method.");
    }

    public function testRadiusParam()
    {
        $radiusParam = self::$code->find('param[name="radius"]');

        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius'.");
    }

    public function testUse()
    {
        $nodes = self::$code->find('use[class="Math\Constants"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a use statement for `Math\Constants` namespace.");
    }

    public function testRadiusPropertyCall()
    {
        $radius = self::$code->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(2, $radius->count(), "Expecting two `radius` property calls inside the `Circle` class itself.");
    }

    public function testPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="Constants"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call inside the `Circle` class.");
    }
} 