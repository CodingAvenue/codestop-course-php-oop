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

    public function testReturnCirc()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');
        $nodes = $circumference->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `circumference()` method.");
    }

    public function testReturnArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $nodes = $area->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `area()` method.");
    }

    public function testReturnDiameter()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');
        $nodes = $diameter->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `diameter()` method.");
    }

    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="Math\Geometry"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `Math\Geometry` namespace definition.");
    }

    public function testCircumference()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');

        $this->assertEquals(1, $circumference->count(), "Expecting a public circumference() method.");
    }

    public function testArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting a public area() method.");
    }

    public function testDiameter()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');

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

    public function testPiCallArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $piCall = $area->find('const-fetch[name="PI", class="Constants"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call inside the `area()` method of the `Circle` class.");
    }

    public function testPiCallCirc()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');
        $piCall = $circumference->find('const-fetch[name="PI", class="Constants"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call inside the `circumference()` method of the `Circle` class.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }

    public function testGetRadiusCallCirc()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');
        $getRadius = $circumference->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting one 'getRadius()' method call inside the `circumference()` method of the `Circle` class itself.");
    }

    public function testGetRadiusCallArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $getRadius = $area->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting one 'getRadius()' method call inside the `area()` method of the `Circle` class itself.");
    }

    public function testGetRadiusCallDia()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');
        $getRadius = $diameter->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting one 'getRadius()' method call inside the `diameter()` method of the `Circle` class itself.");
    }
}