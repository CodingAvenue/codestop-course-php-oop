<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class AddConstantDefinitionInClassTest extends TestCase
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

    public function testActualCode()
    {
        $evaluator = self::$code->evaluator();
        $evaled    = $evaluator->evaluate();
        $expected  = "Area: 42.4116\nVolume: 21.2058";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two `echo` statements in the `display()` method.");
    }

    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements in the `__construct()` method.");
    }

    public function testCylinderVariable()
    {
        $cylinder = self::$code->find('variable[name="cylinder"]');

        $this->assertEquals(2, $cylinder->count(), "Expecting two occurrences of the variable named 'cylinder'.");
    }

    public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Cylinder"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Cylinder' class.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting a `display()` method.");
    }

    public function testArea()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting an `area()` method.");
    }

    public function testVolume()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $volume = $subNodes->find('method[name="volume", type="public"]');

        $this->assertEquals(1, $volume->count(), "Expecting a `volume()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a `__construct()` method.");
    }

    public function testGetRadius()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting a `getRadius()` method.");
    }

    public function testGetHeight()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $getHeight = $subNodes->find('method[name="getHeight", type="public"]');

        $this->assertEquals(1, $getHeight->count(), "Expecting a `getHeight()` method.");
    }

    public function testRadiusProperty()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $radius = $subNodes->find('property[name="radius", type="private"]');

        $this->assertEquals(1, $radius->count(), "Expecting a private class property named 'radius'.");
    }

    public function testHeightProperty()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $height = $subNodes->find('property[name="height", type="private"]');

        $this->assertEquals(1, $height->count(), "Expecting a private class property named 'height'.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Cylinder"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Cylinder` class.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="cylinder"]');

        $this->assertEquals(1, $display->count(), "Expecting one 'display()' method call of 'cylinder'.");
    }

    public function testReturnArea()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $nodes = $area->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `area()` method.");
    }

    public function testReturnVolume()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $volume = $subNodes->find('method[name="volume", type="public"]');
        $nodes = $volume->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `volume()` method.");
    }

    public function testReturnGetRadius()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');
        $nodes = $getRadius->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getRadius()` method.");
    }

    public function testReturnGetHeight()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $getHeight = $subNodes->find('method[name="getHeight", type="public"]');
        $nodes = $getHeight->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getHeight()` method.");
    }

    public function testRadiusPropertyCall()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $getRadius = $subNodes->find('method[name="getRadius", type="public"]');
        $radius = $getRadius->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `getRadius()` method of the `Cylinder` class itself.");
    }

    public function testRadiusPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radius = $construct->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `__construct()` method of the `Cylinder` class itself.");
    }

    public function testHeightPropertyCall()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $getHeight = $subNodes->find('method[name="getHeight", type="public"]');
        $height = $getHeight->find('property-call[name="height", variable="this"]');

        $this->assertEquals(1, $height->count(), "Expecting one `height` property call in the `getHeight()` method of the `Cylinder` class itself.");
    }

    public function testHeightPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $height = $construct->find('property-call[name="height", variable="this"]');

        $this->assertEquals(1, $height->count(), "Expecting one `height` property call in the `__construct()` method of the `Cylinder` class itself.");
    }

    public function testAreaCall()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $area = $display->find('method-call[name="area", variable="this"]');

        $this->assertEquals(1, $area->count(), "Expecting one 'area()' method call in the `display()` method of the `Cylinder` class itself.");
    }

    public function testVolumeCall()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $volume = $display->find('method-call[name="volume", variable="this"]');

        $this->assertEquals(1, $volume->count(), "Expecting one 'volume()' method call in the `display()` method of the `Cylinder` class itself.");
    }

    public function testConstPi()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testConstPiValue()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');
        $value = $pi->getSubNode()->getSubNode();
        $piValue = $value->find('float'); // NOTE: need to verify and improve this validation

        $this->assertEquals(1, $piValue->count(), "Expecting a class `PI` constant value of type `float`.");
    }

    public function testPiCallVolume()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $volume = $subNodes->find('method[name="volume", type="public"]');
        $piCall = $volume->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `volume()` method of the `Cylinder` class itself.");
    }

    public function testGetRadiusCallVolume()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $volume = $subNodes->find('method[name="volume", type="public"]');
        $getRadiusCall = $volume->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(2, $getRadiusCall->count(), "Expecting two 'getRadius()' method calls in the `volume()` method of the `Cylinder` class itself.");
    }

    public function testGetHeightCallVolume()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $volume = $subNodes->find('method[name="volume", type="public"]');
        $getHeightCall = $volume->find('method-call[name="getHeight", variable="this"]');

        $this->assertEquals(1, $getHeightCall->count(), "Expecting one 'getHeight()' method call in the `volume()` method of the `Cylinder` class itself.");
    }

    public function testGetRadiusCallArea()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $getRadiusCall = $area->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(2, $getRadiusCall->count(), "Expecting two 'getRadius()' method calls in the `area()` method of the `Cylinder` class itself.");
    }

    public function testGetHeightCallArea()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $getHeightCall = $area->find('method-call[name="getHeight", variable="this"]');

        $this->assertEquals(1, $getHeightCall->count(), "Expecting one 'getHeight()' method call in the `area()` method of the `Cylinder` class itself.");
    }

    public function testPiCallArea()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $piCall = $area->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `area()` method of the `Cylinder` class itself.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radParam = $construct->find('param[name="radius"]');

        $this->assertEquals(1, $radParam->count(), "Expecting a parameter named 'radius' in the `__construct()` method.");
    }

    public function testHeightParam()
    {
        $obj = self::$code->find('class[name="Cylinder"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $heightParam = $construct->find('param[name="height"]');

        $this->assertEquals(1, $heightParam->count(), "Expecting a parameter named 'height' in the `__construct()` method.");
    }
}