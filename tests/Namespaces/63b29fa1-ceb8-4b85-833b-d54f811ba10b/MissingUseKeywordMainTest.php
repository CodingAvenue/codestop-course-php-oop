<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingUseKeywordMainTest extends TestCase
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

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
    }

    public function testUserVariable()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $user = $nodes->find('variable[name="user"]');

        $this->assertEquals(1, $user->count(), "Expecting one occurrence of the variable named 'user'.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement.");
    }

    public function testRequireOnceCallArgsFile()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/UserApp.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/UserApp.php` as an argument in the `require_once()` statement.");
    }

    public function testUse()
    {
        $nodes = self::$code->find('use[class="App\User"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `use` statement for `App\User` namespace.");
    }
}