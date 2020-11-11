<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MisspelledDirConstantAutoloadTest extends TestCase
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

    public function testAssignment()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $assign = $subNodes->find('operator[name="assignment"]');

        $this->assertEquals(2, $assign->count(), "Expecting two assignment statements in the `myAutoloader()` function.");
    }

    public function testFunctionCall()
    {
        $nodes=self::$code->find('call[name="spl_autoload_register"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting one function call for `spl_autoload_register()` function.");
    }

    public function testFunctionCallArgs1()
    {
        $myAnimal = self::$code->find('call[name="spl_autoload_register"]');
        $args = $myAnimal->getSubNode()->getSubnode();
        $value = $args->find('string[value="myAutoloader"]');
    
        $this->assertEquals(1, $value->count(), "Expecting an argument `myAutoloader` in the 'spl_autoload_register()' function call.");
    }

    public function testRequireOnceCall()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $nodes = $subNodes->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement in the `myAutoloader()` function.");
    }

    public function testRequireOnceCallArgs()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $nodes = $subNodes->find('include[type="require_once"]');
        $args = $nodes->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `require_once()` statement of the `myAutoloader()` function.");
    }

    public function testMyAutoloaderFunction()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a `myAutoloader()` function.");
    }

    public function testClassParam()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $classParam = $subNodes->find('param[name="className"]');

        $this->assertEquals(1, $classParam->count(), "Expecting a parameter named 'className' in the `myAutoloader()` function.");
    }
}