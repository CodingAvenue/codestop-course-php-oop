<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class ApplyPolymorphismConceptMyShapeTest extends TestCase
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

    public function testMyShapeInterface()
    {
        $nodes = self::$code->find('interface[name="MyShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a declaration of the `MyShape` interface.");
    }

    public function testCalculateArea()
    {
        $obj = self::$code->find('interface[name="MyShape"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        
        $this->assertEquals(1, $calculateArea->count(), "Expecting one calculateArea() method in the `MyShape` interface.");
    }

    public function testGetPerimeter()
    {
        $obj = self::$code->find('interface[name="MyShape"]');
        $subNodes = $obj->getSubnode();
        $getPerimeter = $subNodes->find('method[name="getPerimeter", type="public"]');
        
        $this->assertEquals(1, $getPerimeter->count(), "Expecting one getPerimeter() method in the `MyShape` interface.");
    }
}