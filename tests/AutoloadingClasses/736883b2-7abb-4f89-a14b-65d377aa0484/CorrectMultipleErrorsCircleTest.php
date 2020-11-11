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

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(4, $nodes->count(), "Expecting four `echo` statements in the `display()` method.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting a `display()` method.");
    }

    public function testArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting an `area()` method.");
    }

    public function testDiameter()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');

        $this->assertEquals(1, $diameter->count(), "Expecting a `diameter()` method.");
    }

    public function testCircumference()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');

        $this->assertEquals(1, $circumference->count(), "Expecting a `circumference()` method.");
    }

    public function testCircleClass()
    {
        $nodes = self::$code->find('class[name="Circle", extends="CircularShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class that extends the `CircularShape` class.");
    }  

    public function testReturnArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $nodes = $area->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `area()` method.");
    }

    public function testReturnDiameter()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');
        $nodes = $diameter->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `diameter()` method.");
    }

    public function testReturnCirc()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');
        $nodes = $circumference->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `circumference()` method.");
    }

    public function testAreaCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $area = $display->find('method-call[name="area", variable="this"]');

        $this->assertEquals(1, $area->count(), "Expecting one 'area()' method call in the `display()` method of the `Circle` class itself.");
    }

    public function testGetRadiusCallDis()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getRadius = $display->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting one 'getRadius()' method call in the `display()` method of the `Circle` class itself.");
    } 

    public function testGetRadiusCallArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $getRadius = $area->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(2, $getRadius->count(), "Expecting two 'getRadius()' method calls in the `area()` method of the `Circle` class itself.");
    } 

    public function testGetRadiusCallDiameter()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $diameter = $subNodes->find('method[name="diameter", type="public"]');
        $getRadius = $diameter->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(2, $getRadius->count(), "Expecting two 'getRadius()' method calls in the `diameter()` method of the `Circle` class itself.");
    } 

    public function testGetRadiusCallCirc()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');
        $getRadius = $circumference->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(1, $getRadius->count(), "Expecting one 'getRadius()' method call in the `circumference()` method of the `Circle` class itself.");
    } 

    public function testDiameterCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $diameter = $display->find('method-call[name="diameter", variable="this"]');

        $this->assertEquals(1, $diameter->count(), "Expecting one 'diameter()' method call in the `display()` method of the `Circle` class itself.");
    } 

    public function testCircumferenceCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $circumference = $display->find('method-call[name="circumference", variable="this"]');

        $this->assertEquals(1, $circumference->count(), "Expecting one 'circumference()' method call in the `display()` method of the `Circle` class itself.");
    } 

    public function testPiCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $piCall = $area->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `area()` method of the `Circle` class itself.");
    }

    public function testPiCallCirc()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $circumference = $subNodes->find('method[name="circumference", type="public"]');
        $piCall = $circumference->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `circumference()` method of the `Circle` class itself.");
    }
}