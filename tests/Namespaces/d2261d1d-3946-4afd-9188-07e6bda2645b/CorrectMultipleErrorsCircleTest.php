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
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $radius = $subNodes->find('property[name="radius", type="public"]');

        $this->assertEquals(1, $radius->count(), "Expecting a public class property named 'radius'.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one `__construct()` method.");
    }

    public function testClassCircle()
    {
        $nodes = self::$code->find('class[name="Circle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class.");
    }

    public function testReturn()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $getCircumference = $subNodes->find('method[name="getCircumference", type="public"]');
        $nodes = $getCircumference->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getCircumference()` method.");
    }

    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="Math\Geometry"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `Math\Geometry` namespace definition.");
    }

    public function testGetCircumference()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $getCircumference = $subNodes->find('method[name="getCircumference", type="public"]');

        $this->assertEquals(1, $getCircumference->count(), "Expecting a public `getCircumference()` method.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radiusParam = $construct->find('param[name="radius"]');

        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius' in the `__construct()` method.");
    }

    public function testUse()
    {
        $nodes = self::$code->find('use[class="Math\Constants"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `use` statement for `Math\Constants` namespace.");
    }

    public function testRadiusPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radius = $construct->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `__construct()` method of the `Circle` class itself.");
    }

    public function testRadiusPropertyCallCirc()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $getCircumference = $subNodes->find('method[name="getCircumference", type="public"]');
        $radius =$getCircumference->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `getCircumference()` method of the `Circle` class itself.");
    }

    public function testPiCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $getCircumference = $subNodes->find('method[name="getCircumference", type="public"]');
        $piCall = $getCircumference->find('const-fetch[name="PI", class="Constants"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `getCircumference()` method of the `Circle` class.");
    }
} 