<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectMultipleErrorsMainTest extends TestCase
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
        $expected  = "The circumference of the circle is: 62.8318";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an assignment statement that assigns a value to the variable 'circle'.");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }

    public function testCircleVariable()
    {
        $circle = self::$code->find('variable[name="circle"]');

        $this->assertEquals(2, $circle->count(), "Expecting two occurrences of the variable named 'circle'.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two function calls for require_once() function.");
    }

    public function testUse()
    {
        $nodes = self::$code->find('use[class="Math\Geometry\Circle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a use statement for `Math\Geometry\Circle` namespace.");
    }

    public function testAlias()
    {
        $nodes = self::$code->find('use[alias="NewCircle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an alias named `NewCircle` in the use statement.");
    }
} 