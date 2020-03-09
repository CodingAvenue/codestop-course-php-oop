<?php
/*namespace Math\Geometry;

abstract class CircularShape
{
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>*/
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
        $radius = self::$code->find('property[name="radius", type="private"]');

        $this->assertEquals(1, $radius->count(), "Expecting a private class property named 'radius'.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testClassCircularShape()
    {
        $nodes = self::$code->find('class[name="CircularShape", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an abstract class declaration of the `CircularShape` class.");
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

    public function testCircumference()
    {
        $circumference = self::$code->find('method[name="circumference", type="public"]');

        $this->assertEquals(1, $circumference->count(), "Expecting a public circumference() method.");
    }

    public function testDiameter()
    {
        $diameter = self::$code->find('method[name="diameter", type="public"]');

        $this->assertEquals(1, $diameter->count(), "Expecting a public diameter() method.");
    }

    public function testArea()
    {
        $area = self::$code->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting a public area() method.");
    }

    public function testRadiusParam()
    {
        $radiusParam = self::$code->find('param[name="radius"]');

        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius'.");
    }

    public function testRadiusPropertyCall()
    {
        $radius = self::$code->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(2, $radius->count(), "Expecting two `radius` property calls inside the `CircularShape` class itself.");
    }
} 