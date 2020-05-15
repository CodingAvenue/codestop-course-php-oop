<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class DefineAndImportNamespacesCircularShapeTest extends TestCase
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
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $radius = $subNodes->find('property[name="radius", type="private"]');

        $this->assertEquals(1, $radius->count(), "Expecting a private class property named 'radius'.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one `__construct()` method.");
    }

    public function testClassCircularShape()
    {
        $nodes = self::$code->find('class[name="CircularShape", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an abstract class declaration of the `CircularShape` class.");
    }

    public function testReturn()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');
        $nodes = $getRadius->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getRadius()` method.");
    }

    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="Math\Geometry"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `Math\Geometry` namespace definition.");
    }

    public function testCircumference()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');

        $this->assertEquals(1, $circumference->count(), "Expecting a public `circumference()` method.");
    }

    public function testDiameter()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');

        $this->assertEquals(1, $diameter->count(), "Expecting a public `diameter()` method.");
    }

    public function testArea()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting a public `area()` method.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radiusParam = $construct->find('param[name="radius"]');

        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius' in the `__construct()` method.");
    }

    public function testRadiusPropertyCallCons()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radius = $construct->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `__construct()` method of the `CircularShape` class itself.");
    }

    public function testRadiusPropertyCallGet()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');
        $radius = $getRadius->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `getRadius()` method of the `CircularShape` class itself.");
    }

    public function testGetRadius()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting one `getRadius()` method.");
    }
}