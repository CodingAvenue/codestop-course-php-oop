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
        $expected  = "Charles is an adolescent human being.\nRadius: 2.5\nDiameter: 6.25\nArea: 19.635\nCircumference: 15.708";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testCircVariable()
    {
        $circ = self::$code->find('variable[name="circ"]');

        $this->assertEquals(2, $circ->count(), "Expecting two occurrences of the variable named 'circ'.");
    }

    public function testCircleInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Circle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Circle' class.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="circ"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'circ'.");
    }

    public function testStudentVariable()
    {
        $student = self::$code->find('variable[name="student"]');

        $this->assertEquals(2, $student->count(), "Expecting two occurrences of the variable named 'student'.");
    }

    public function testInstantiationStudent()
    {
        $nodes=self::$code->find('instantiate[class="Student"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    }

    public function testStudentDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="student"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'student'.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
}