<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MisspelledImplementsKeywordCircleTest extends TestCase
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
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method of the `Circle` class.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one `__construct()` method in the `Circle` class.");
    }

    public function testCalculateArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');

        $this->assertEquals(1, $calculateArea->count(), "Expecting one `calculateArea()` method in the `Circle` class.");
    }

    public function testRadiusProperty()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $radius = $subNodes->find('property[name="radius", type="private"]');

        $this->assertEquals(1, $radius->count(), "Expecting a private class property named 'radius'.");
    }

    public function testConstPi()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI` in the `Cirle` class.");
    }

    public function testClassCircle()
    {
        $nodes = self::$code->find('class[name="Circle", interface="MyShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class that extends the `MyShape` interface.");
    }  

    public function testReturn()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `calculateArea()` method of the `Circle` class.");
    }

    public function testPiCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $piCall = $calculateArea->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `calculateArea()` method of the `Circle` class itself.");
    } 

    public function testRadiusPropertyCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $radius = $calculateArea->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(2, $radius->count(), "Expecting two `radius` property calls in the `calculateArea()` method of the `Circle` class itself.");
    }

    public function testRadiusPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radius = $construct->find('property-call[name="radius", variable="this"]');
        
        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call in the `__construct()` method of the `Circle` class itself.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radiusParam = $construct->find('param[name="radius"]');

        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius' in the `__construct()` method of the `Circle` class.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement.");
    }

    public function testRequireOnceCallArgs()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/MyShape.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/MyShape.php` as an argument in the `require_once()` statement.");
    }
}