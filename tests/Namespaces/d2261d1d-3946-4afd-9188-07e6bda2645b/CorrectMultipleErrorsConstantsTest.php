<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectMultipleErrorsConstantsTest extends TestCase
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

    public function testConstPi()
    {
        $pi = self::$code->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testClassConstants()
    {
        $nodes = self::$code->find('class[name="Constants"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Constants` class.");
    }

    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="Math"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `Math` namespace definition.");
    }
} 