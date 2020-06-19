<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class RemoveVisibilityKeywordOnConstantDeclarationCircularShapeTest extends TestCase
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

    public function testAssignment()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a `__construct()` method.");
    }

    public function testArea()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting an `area()` method.");
    }

    public function testGetRadius()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting a `getRadius()` method.");
    }

    public function testDiameter()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');

        $this->assertEquals(1, $diameter->count(), "Expecting a `diameter()` method.");
    }

    public function testCircumference()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');

        $this->assertEquals(1, $circumference->count(), "Expecting a `circumference()` method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="CircularShape", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `CircularShape` class.");
    }

    public function testReturn()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');
        $nodes = $getRadius->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getRadius()` method.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radParam = $construct->find('param[name="radius"]');

        $this->assertEquals(1, $radParam->count(), "Expecting a parameter named 'radius' in the `__construct()` method.");
    }

    public function testRadiusProperty()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $radius = $subNodes->find('property[name="radius", type="private"]');

        $this->assertEquals(1, $radius->count(), "Expecting a private class property named 'radius'.");
    }

    public function testConstPi()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testConstPiValue()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');
        $value = $pi->getSubNode()->getSubNode();
        $piValue = $value->find('float'); // NOTE: need to verify and improve this validation

        $this->assertEquals(1, $piValue->count(), "Expecting a class `PI` constant value of type float.");
    }

    public function testRadiusPropertyCall()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');
        $radius = $getRadius->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `getRadius()` method of the `CircularShape` class itself.");
    }

    public function testRadiusPropertyCallCons()
    {
        $obj = self::$code->find('class[name="CircularShape"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radius = $construct->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `__construct()` method of the `CircularShape` class itself.");
    }
}