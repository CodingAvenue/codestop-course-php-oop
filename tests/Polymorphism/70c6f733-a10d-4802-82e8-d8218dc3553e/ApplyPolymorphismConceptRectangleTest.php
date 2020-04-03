<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class ApplyPolymorphismConceptRectangleTest extends TestCase
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
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements in the `__construct()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testCalculateArea()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');

        $this->assertEquals(1, $calculateArea->count(), "Expecting one calculateArea() method in the `Rectangle` class.");
    }

    public function testGetPerimeter()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $getPerimeter = $subNodes->find('method[name="getPerimeter", type="public"]');

        $this->assertEquals(1, $getPerimeter->count(), "Expecting one getPerimeter() method in the `Rectangle` class.");
    }

    public function testClassRectangle()
    {
        $nodes = self::$code->find('class[name="Rectangle", interface="MyShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Rectangle` class that extends the `MyShape` interface.");
    }

    public function testReturnGet()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $getPerimeter = $subNodes->find('method[name="getPerimeter", type="public"]');
        $nodes = $getPerimeter->find('construct[name="return"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `getPerimeter()` method of the `Rectangle` class.");
    }

    public function testReturnCalc()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `calculateArea()` method of the `Rectangle` class.");
    }

    public function testLengthPropertyCallGet()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $getPerimeter = $subNodes->find('method[name="getPerimeter", type="public"]');
        $length = $getPerimeter->find('property-call[name="length", variable="this"]');
        
        $this->assertEquals(1, $length->count(), "Expecting one `length` property call inside the `getPerimeter()` method of the `Rectangle` class itself.");
    }

    public function testLengthPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $length = $construct->find('property-call[name="length", variable="this"]');
        
        $this->assertEquals(1, $length->count(), "Expecting one `length` property call inside the `__construct()` method of the `Rectangle` class itself.");
    }

    public function testLengthPropertyCallCalc()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $length = $calculateArea->find('property-call[name="length", variable="this"]');
        
        $this->assertEquals(1, $length->count(), "Expecting one `length` property call inside the `calculateArea()` method of the `Rectangle` class itself.");
    }

    public function testWidthPropertyCallCalc()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $width = $calculateArea->find('property-call[name="width", variable="this"]');
        
        $this->assertEquals(1, $width->count(), "Expecting one `width` property call inside the `calculateArea()` method of the `Rectangle` class itself.");
    }

    public function testWidthPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $width = $construct->find('property-call[name="width", variable="this"]');
        
        $this->assertEquals(1, $width->count(), "Expecting one `width` property call inside the `__construct()` method of the `Rectangle` class itself.");
    }

    public function testWidthPropertyCallGet()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $getPerimeter = $subNodes->find('method[name="getPerimeter", type="public"]');
        $width = $getPerimeter->find('property-call[name="width", variable="this"]');
        
        $this->assertEquals(1, $width->count(), "Expecting one `width` property call inside the `getPerimeter()` method of the `Rectangle` class itself.");
    }

    public function testLengthProperty()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $length = $subNodes->find('property[name="length", type="private"]');
        
        $this->assertEquals(1, $length->count(), "Expecting a private class property named 'length'.");
    }
    
    public function testWidthProperty()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $width = $subNodes->find('property[name="width", type="private"]');
        
        $this->assertEquals(1, $width->count(), "Expecting a private class property named 'width'.");
    }

    public function testLengthParam()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $lengthParam = $construct->find('param[name="length"]');
    
        $this->assertEquals(1, $lengthParam->count(), "Expecting a parameter named 'length' in the `__construct()` method of the `Rectangle` class.");
    }

    public function testWidthParam()
    {
        $obj = self::$code->find('class[name="Rectangle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $widthParam = $construct->find('param[name="width"]');
    
        $this->assertEquals(1, $widthParam->count(), "Expecting a parameter named 'width' in the `__construct()` method of the `Rectangle` class.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
}