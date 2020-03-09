<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class IncorrectUseStatementMainTest extends TestCase
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
        $expected  = "This is a user in the App namespace.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an assignment statement that assigns a value to the variable 'user'.");
    }

    public function testUserVariable()
    {
        $user = self::$code->find('variable[name="user"]');

        $this->assertEquals(1, $user->count(), "Expecting one occurrence of the variable named 'user'.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }

    public function testUse()
    {
        $nodes = self::$code->find('use[class="App\User"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a use statement for `App\User` namespace.");
    }   
} 