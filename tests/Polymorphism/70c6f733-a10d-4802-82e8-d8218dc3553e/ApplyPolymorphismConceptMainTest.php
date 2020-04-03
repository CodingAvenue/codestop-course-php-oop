<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class ApplyPolymorphismConceptMainTest extends TestCase
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
        $expected  = "Rectangle area: 7.5\nRectangle perimeter: 11\nSquare area: 6.25\nSquare perimeter: 10";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
		
        $this->assertEquals(4, $nodes->count(), "Expecting four echo statements.");
    }
    
    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }
	
    public function testRectangleVariable()
    {
        $rectangle = self::$code->find('variable[name="rectangle"]');
        
        $this->assertEquals(3, $rectangle->count(), "Expecting three occurrences of the variable named 'rectangle'.");
    }
    
    public function testInstantiationRectangle()
    {
        $nodes=self::$code->find('instantiate[class="Rectangle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Rectangle' class.");
    }

    public function testInstantiationSquare()
    {
        $nodes=self::$code->find('instantiate[class="Square"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Square' class.");
    }

    public function testCalculateAreaCallRectangle()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="rectangle"]');
        
        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `rectangle`.");
    }

    public function testGetPerimeterCallRectangle()
    {
        $getPerimeter = self::$code->find('method-call[name="getPerimeter", variable="rectangle"]');
        
        $this->assertEquals(1, $getPerimeter->count(), "Expecting a 'getPerimeter()' method call of `rectangle`.");
    }

    public function testCalculateAreaCallSquare()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="square"]');
        
        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `square`.");
    }

    public function testGetPerimeterCallSquare()
    {
        $getPerimeter = self::$code->find('method-call[name="getPerimeter", variable="square"]');
        
        $this->assertEquals(1, $getPerimeter->count(), "Expecting a 'getPerimeter()' method call of `square`.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two function calls for the `require_once()` function.");
    }
}