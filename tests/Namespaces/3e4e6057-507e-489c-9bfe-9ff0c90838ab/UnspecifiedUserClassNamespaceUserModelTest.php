<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UnspecifiedUserClassNamespaceUserModelTest extends TestCase
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

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testClassUser()
    {
        $nodes = self::$code->find('class[name="User"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `User` class.");
    }
    
    public function testNamespace()
    {
        $nodes = self::$code->find('namespace[name="App\Model"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an `App\Model` namespace definition.");
    }
} 