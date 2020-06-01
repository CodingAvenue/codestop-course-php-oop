<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingConcatOnRequireInMainMainTest extends TestCase
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
        $expected  = "John is taking up BSCS.";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testStudentVariable()
    {
        $student = self::$code->find('variable[name="student"]');
        
        $this->assertEquals(2, $student->count(), "Expecting two occurrences of the variable named 'student'.");
    }
    
    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Student"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    } 
 
    public function testDisplayCall()
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