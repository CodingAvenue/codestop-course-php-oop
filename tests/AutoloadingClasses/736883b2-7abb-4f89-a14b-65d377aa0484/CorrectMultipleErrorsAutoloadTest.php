<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectMultipleErrorsAutoloadTest extends TestCase
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

    public function testAssignmentAutoLoader()
    {
        $nodes=self::$code->find('function[name="myShapesLoader"]');
        $subNodes = $nodes->getSubnode();
        $assign = $subNodes->find('operator[name="assignment"]');

        $this->assertEquals(2, $assign->count(), "Expecting two assignment statements in the `myShapesLoader()` function.");
    }

    public function testFunctionCall()
    {
        $nodes=self::$code->find('call[name="spl_autoload_register"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two function calls for spl_autoload_register() function.");
    }

    public function testFunctionCallArgs1()
    {
        $myAnimal = self::$code->find('call[name="spl_autoload_register"]');
        $args = $myAnimal->getSubNode()->getSubnode();
        $value = $args->find('string[value="myAutoloader"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `myAutoloader` in the first 'spl_autoload_register()' function call.");
    }

    public function testFunctionCallArgs2()
    {
        $myAnimal = self::$code->find('call[name="spl_autoload_register"]');
        $args = $myAnimal->getSubNode()->getSubnode();
        $value = $args->find('string[value="myShapesLoader"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `myShapesLoader` in the second 'spl_autoload_register()' function call.");
    }

    public function testRequireOnceCallShapes()
    {
        $nodes=self::$code->find('function[name="myShapesLoader"]');
        $subNodes = $nodes->getSubnode();
        $nodes = $subNodes->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement in the `myShapesLoader()` function.");
    }

    public function testRequireOnceCallShapesArgs()
    {
        $nodes=self::$code->find('function[name="myShapesLoader"]');
        $subNodes = $nodes->getSubnode();
        $nodes = $subNodes->find('include[type="require_once"]');
        $args = $nodes->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `file` in the `require_once()` statement of the `myShapesLoader()` function.");
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

        $this->assertEquals(1, $args->count(), "Expecting one variable named `file` in the `require_once()` statement of the `myAutoloader()` function.");
    }

    public function testMyAutoloaderFunction()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `myAutoloader()` function.");
    }

    public function testMyShapesLoaderFunction()
    {
        $nodes=self::$code->find('function[name="myShapesLoader"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a `myShapesLoader()` function.");
    }

    public function testClassParam()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        $subNodes = $nodes->getSubnode();
        $classParam = $subNodes->find('param[name="className"]');

        $this->assertEquals(1, $classParam->count(), "Expecting a parameter named 'className' in the `myAutoloader()` function.");
    }

    public function testShapeParam()
    {
        $nodes=self::$code->find('function[name="myShapesLoader"]');
        $subNodes = $nodes->getSubnode();
        $shapeParam = $subNodes->find('param[name="shapeClass"]');

        $this->assertEquals(1, $shapeParam->count(), "Expecting a parameter named 'shapeClass' in the `myShapesLoader()` function.");
    }
}