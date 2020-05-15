<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class IncorrectCalculateAreaVisibilitySquareTest extends TestCase
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
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one `__construct()` method in the `Square` class.");
    }

    public function testCalculateArea()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');

        $this->assertEquals(1, $calculateArea->count(), "Expecting one `calculateArea()` method in the `Square` class.");
    }

    public function testClassSquare()
    {
        $nodes = self::$code->find('class[name="Square", interface="MyShape"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Square` class that extends the `MyShape` interface.");
    }  

    public function testReturnCalc()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `calculateArea()` method of the `Square` class.");
    }

    public function testSidePropertyCall()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $side = $calculateArea->find('property-call[name="side", variable="this"]');
        
        $this->assertEquals(2, $side->count(), "Expecting two `side` property calls in the `calculateArea()` method of the `Square` class itself.");
    }

    public function testSideProperty()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $side = $subNodes->find('property[name="side", type="private"]');
        
        $this->assertEquals(1, $side->count(), "Expecting a private class property named 'side'.");
    }

    public function testSideParam()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $sideParam = $construct->find('param[name="side"]');
    
        $this->assertEquals(1, $sideParam->count(), "Expecting a parameter named 'side' in the `__construct()` method of the `Square` class.");
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