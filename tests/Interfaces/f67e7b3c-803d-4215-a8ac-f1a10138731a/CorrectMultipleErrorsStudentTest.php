<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectMultipleErrorsStudentTest extends TestCase
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
        $expected  = "John is an adolescent human being.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement in the `display()` method.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
    }
	
    public function testStudentVariable()
    {
        $student = self::$code->find('variable[name="student"]');

        $this->assertEquals(2, $student->count(), "Expecting two occurrences of the variable named 'student'.");
    }

    public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Student"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    } 

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting a `display()` method.");
    }

    public function testStage()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $stage = $subNodes->find('method[name="stage", type="public"]');

        $this->assertEquals(1, $stage->count(), "Expecting a `stage()` method.");
    }

    public function testSpecies()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $species = $subNodes->find('method[name="species", type="public"]');

        $this->assertEquals(1, $species->count(), "Expecting a `species()` method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Student", extends="Person", interface="LifeCycle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class that extends the `Person` class and implements the `LifeCycle` interface.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="student"]');

        $this->assertEquals(1, $display->count(), "Expecting one 'display()' method call of 'student'.");
    }

    public function testReturnStage()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $stage = $subNodes->find('method[name="stage", type="public"]');
        $nodes = $stage->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `stage()` method.");
    }

    public function testReturnSpecies()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $species = $subNodes->find('method[name="species", type="public"]');
        $nodes = $species->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `species()` method.");
    }

    public function testNamePropertyCall()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $name = $display->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call in the `display()` method of the `Student` class itself.");
    }

    public function testStageCall()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $stage = $display->find('method-call[name="stage", variable="this"]');

        $this->assertEquals(1, $stage->count(), "Expecting one 'stage()' method call in the `display()` method of the `Student` class itself.");
    }

    public function testSpeciesCall()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $species = $display ->find('method-call[name="species", variable="this"]');

        $this->assertEquals(1, $species->count(), "Expecting one 'species()' method call in the `display()` method of the `Student` class itself.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two `require_once()` statements.");
    }

    public function testRequireOnceCallArgs()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/LifeCycle.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/LifeCycle.php` as an argument in the `require_once()` statement.");
    }

    public function testRequireOnceCallArgs2()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/Person.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/Person.php` as an argument in the `require_once()` statement.");
    }
}