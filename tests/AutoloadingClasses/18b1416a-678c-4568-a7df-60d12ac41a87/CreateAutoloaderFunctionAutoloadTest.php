<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAutoloaderFunctionAutoloadTest extends TestCase
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
        $nodes=self::$code->find('function[name="myAnimalAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $assign = $subNodes->find('operator[name="assignment"]');

        $this->assertEquals(2, $assign->count(), "Expecting two assignment statements in the `myAnimalAutoloader()` function.");
    }

    public function testAnimalParam()
    {
        $nodes=self::$code->find('function[name="myAnimalAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $animalParam = $subNodes->find('param[name="animal"]');

        $this->assertEquals(1, $animalParam->count(), "Expecting a parameter named 'animal' in the `myAnimalAutoloader()` function.");
    }

    public function testFunctionCall()
    {
        $nodes=self::$code->find('call[name="spl_autoload_register"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for `spl_autoload_register()` function.");
    }

    public function testFunctionCallArgs()
    {
        $myAnimal = self::$code->find('call[name="spl_autoload_register"]');
        $args = $myAnimal->getSubNode()->getSubnode();
        $value = $args->find('string[value="myAnimalAutoloader"]');
    
        $this->assertEquals(1, $value->count(), "Expecting an argument `myAnimalAutoloader` in the 'spl_autoload_register()' function call.");
    } 

    public function testMyAnimalAutoloaderFunction()
    {
        $nodes=self::$code->find('function[name="myAnimalAutoloader"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a `myAnimalAutoloader()` function.");
    }

    public function testRequireOnceCall()
    {
        $nodes=self::$code->find('function[name="myAnimalAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $nodes = $subNodes->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one require_once() statement in the `myAnimalAutoloader()` function.");
    }

    public function testRequireOnceCallArgs()
    {
        $nodes=self::$code->find('function[name="myAnimalAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $nodes = $subNodes->find('include[type="require_once"]');
        $args = $nodes->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `file` as an argument in the `require_once()` statement of the `myAnimalAutoloader()` function.");
    }
}