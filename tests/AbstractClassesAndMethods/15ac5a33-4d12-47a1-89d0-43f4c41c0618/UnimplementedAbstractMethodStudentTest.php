<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UnimplementedAbstractMethodPersonTest extends TestCase
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

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a single echo statement.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
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

    public function testGetCourse()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $getCourse = $subNodes->find('method[name="getCourse", type="public"]');

        $this->assertEquals(1, $getCourse->count(), "Expecting a public method named 'getCourse()'.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting one display() method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testCourseProperty()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $course = $subNodes->find('property[name="course", type="private"]');

        $this->assertEquals(1, $course->count(), "Expecting a private class property named 'course'.");
    }

    public function testClassStudent()
    {
        $nodes = self::$code->find('class[name="Student", extends="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class that extends the `Person` class.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="student"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'student'.");
    }

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement.");
    }

    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' in the `__contruct()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__contruct()` method.");
    }

    public function testCourseParam()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $courseParam = $construct->find('param[name="course"]');

        $this->assertEquals(1, $courseParam->count(), "Expecting a parameter named 'course' in the `__contruct()` method.");
    }

    public function testParentCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');

        $this->assertEquals(1, $parent->count(), "Expecting a '__construct()' method call of the parent class.");
    }

    public function testParentGetNameCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="getName"]');

        $this->assertEquals(1, $parent->count(), "Expecting a 'getName()' method call of the parent class.");
    }

    public function testParentCallNameArgs()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $nameArgs = $parentArgs->getSubnode();
        $nameVar = $nameArgs->find('variable[name="name"]');
 
        $this->assertEquals(1, $nameVar->count(), "Expecting a 'name' argument in the '__construct()' method call of the parent class.");
    }

    public function testParentCallAgeArgs()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $ageArgs = $parentArgs->getSubnode();
        $ageVar = $ageArgs->find('variable[name="age"]');
 
        $this->assertEquals(1, $ageVar->count(), "Expecting an 'age' argument in the '__construct()' method call of the parent class.");
    }

    public function testCoursePropertyCall()
    {
        $course = self::$code->find('property-call[name="course", variable="this"]');

        $this->assertEquals(3, $course->count(), "Expecting three `course` property calls inside the `Student` class itself.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
}