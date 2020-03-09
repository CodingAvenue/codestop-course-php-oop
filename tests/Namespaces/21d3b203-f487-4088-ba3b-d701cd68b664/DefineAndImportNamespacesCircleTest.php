<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class DefineAndImportNamespacesCircleTest extends TestCase
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

    public function testClassCircle()
    {
        $nodes = self::$code->find('class[name="Circle", extends="CircularShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class that extends the `CircularShape` class.");
    }

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three return statements.");
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

    public function testArea()
    {
        $area = self::$code->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting a public area() method.");
    }

    public function testDiameter()
    {
        $diameter = self::$code->find('method[name="diameter", type="public"]');

        $this->assertEquals(1, $diameter->count(), "Expecting a public diameter() method.");
    }

    public function testUseConstants()
    {
        $nodes = self::$code->find('use[class="Math\Constants"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a use statement for `Math\Constants` namespace.");
    }

    public function testUseGeometry()
    {
        $nodes = self::$code->find('use[class="Math\Geometry\CircularShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a use statement for `Math\Geometry\CircularShape` namespace.");
    }

    public function testPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="Constants"]');

        $this->assertEquals(2, $piCall->count(), "Expecting two 'PI' constant calls inside the `Circle` class.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }

    public function testGetRadiusCall()
    {
        $getRadius = self::$code->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(3, $getRadius->count(), "Expecting three 'getRadius()' method calls inside the class itself.");
    }
} 