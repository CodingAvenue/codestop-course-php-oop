<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UnimplementedCalculateAreaMethodMainTest extends TestCase
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
        $expected  = "\n\n\nCircle area: 19.6349375\nSquare area: 6.25";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two echo statements.");
    }
    
    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }
	
    public function testCircleVariable()
    {
        $circle = self::$code->find('variable[name="circle"]');

        $this->assertEquals(2, $circle->count(), "Expecting two occurrences of the variable named 'circle'.");
    }

    public function testSquareVariable()
    {
        $square = self::$code->find('variable[name="square"]');

        $this->assertEquals(2, $square->count(), "Expecting two occurrences of the variable named 'square'.");
    }

    public function testInstantiationCircle()
    {
        $nodes=self::$code->find('instantiate[class="Circle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Circle' class.");
    }

    public function testInstantiationSquare()
    {
        $nodes=self::$code->find('instantiate[class="Square"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Square' class.");
    }

    public function testCalculateAreaCallCircle()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="circle"]');

        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `circle`.");
    }

    public function testCalculateAreaCallSquare()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="square"]');

        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `square`.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two function calls for the `require_once()` function.");
    }
}