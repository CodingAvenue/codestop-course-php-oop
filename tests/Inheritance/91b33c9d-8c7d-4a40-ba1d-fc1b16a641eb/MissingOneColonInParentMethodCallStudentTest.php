<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingOneColonInParentMethodCallStudentTest extends TestCase
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
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `display()` method.");
    }

    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method.");
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
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $getCourse = $subNodes->find('method[name="getCourse", type="public"]');
        $nodes = $getCourse->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `getCourse()` method.");
    }
    
    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name"]');
    
        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' in the `__construct()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');
    
        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testCourseParam()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $courseParam = $construct->find('param[name="course"]');

        $this->assertEquals(1, $courseParam->count(), "Expecting a parameter named 'course' in the `__construct()` method.");
    }

    public function testParentCall()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $parent = $construct->find('static-call[class="parent", method="__construct"]');

        $this->assertEquals(1, $parent->count(), "Expecting a '__construct()' method call of the parent `Person` class in the `__construct()` method of the `Student` class.");
    }

    public function testParentGetNameCall()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $parent = $display->find('static-call[class="parent", method="getName"]');

        $this->assertEquals(1, $parent->count(), "Expecting a 'getName()' method call of the parent `Person` class in the `display()` method of the `Student` class.");
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

    public function testCoursePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $course = $construct->find('property-call[name="course", variable="this"]');

        $this->assertEquals(1, $course->count(), "Expecting one `course` property call inside the `__construct()` method of the `Student` class itself.");
    }

    public function testCoursePropertyCallDis()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $course = $display->find('property-call[name="course", variable="this"]');

        $this->assertEquals(1, $course->count(), "Expecting one `course` property call inside the `display()` method of the `Student` class itself.");
    }

    public function testCoursePropertyCall()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $getCourse = $subNodes->find('method[name="getCourse", type="public"]');
        $course = $getCourse->find('property-call[name="course", variable="this"]');

        $this->assertEquals(1, $course->count(), "Expecting one `course` property call inside the `getCourse()` method of the `Student` class itself.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
}