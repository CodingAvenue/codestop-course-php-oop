<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingAbstractKeywordInDisplayMethodTest extends Proof
{
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

        $this->assertEquals(5, $nodes->count(), "Expecting five assignment statements.");
    }

    public function testStudentObjectVariable()
    {
        $studentObject = self::$code->find('variable[name="studentObject"]');

        $this->assertEquals(2, $studentObject->count(), "Expecting two occurrences of the variable named 'studentObject'.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Student"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    } 

    public function testGetCourse()
    {
        $getCourse = self::$code->find('method[name="getCourse", type="public"]');

        $this->assertEquals(1, $getCourse->count(), "Expecting a public method named 'getCourse()'.");
    }

    public function testGetAge()
    {
        $getAge = self::$code->find('method[name="getAge", type="public"]');

        $this->assertEquals(1, $getAge->count(), "Expecting a public method named 'getAge()'.");
    }

    public function testGetName()
    {
        $getName = self::$code->find('method[name="getName", type="public"]');

        $this->assertEquals(1, $getName->count(), "Expecting a public method named 'getName()'.");
    }

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');

        $this->assertEquals(2, $display->count(), "Expecting two display() methods.");
    }

    public function testCheckAge()
    {
        $checkAge = self::$code->find('method[name="checkAge", type="private"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting one private checkAge() method.");
    }
    
    public function testSetAge()
    {
        $setAge = self::$code->find('method[name="setAge", type="public"]');

        $this->assertEquals(1, $setAge->count(), "Expecting a setAge() method.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');

        $this->assertEquals(2, $construct->count(), "Expecting two __construct() methods.");
    }

    public function testCourseProperty()
    {
        $course = self::$code->find('property[name="course", type="private"]');

        $this->assertEquals(1, $course->count(), "Expecting a private class property named 'course'.");
    }

    public function testAgeProperty()
    {
        $age = self::$code->find('property[name="age", type="private"]');

        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }

    public function testNameProperty()
    {
        $name = self::$code->find('property[name="name", type="protected"]');

        $this->assertEquals(1, $name->count(), "Expecting a protected class property named 'name'.");
    }

    public function testClassStudent()
    {
        $nodes = self::$code->find('class[name="Student", extends="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class that extends the `Person` class.");
    }  

    public function testClassPerson()
    {
        $nodes = self::$code->find('class[name="Person", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `Person` class.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="studentObject"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'studentObject'.");
    }   

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(5, $nodes->count(), "Expecting five return statements.");
    }

    public function testNameParam()
    {
        $nameParam = self::$code->find('param[name="name"]');
    
        $this->assertEquals(2, $nameParam->count(), "Expecting two parameters named 'name'.");
    }

    public function testAgeParam()
    {
        $ageParam = self::$code->find('param[name="age"]');
    
        $this->assertEquals(3, $ageParam->count(), "Expecting three parameters named 'age'.");
    }

    public function testCourseParam()
    {
        $courseParam = self::$code->find('param[name="course"]');
    
        $this->assertEquals(1, $courseParam->count(), "Expecting a parameter named 'course'.");
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
        $nameArgs = $parentArgs->getSubnodeByIndex(0);
        $node0 = $nameArgs->getSubnode();
        $nameVar = $node0->find('variable[name="name"]');
 
        $this->assertEquals(1, $nameVar->count(), "Expecting a 'name' argument in the '__construct()' method call of the parent class.");
    }  

    public function testParentCallAgeArgs()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $ageArgs = $parentArgs->getSubnodeByIndex(1);
        $node1 = $ageArgs->getSubnode();
        $ageVar = $node1->find('variable[name="age"]');
 
        $this->assertEquals(1, $ageVar->count(), "Expecting an 'age' argument in the '__construct()' method call of the parent class.");
    }  

    public function testNamePropertyCall()
    {
        $name = self::$code->find('property-call[name="name", variable="this"]');
        
        $this->assertEquals(2, $name->count(), "Expecting two `name` property calls inside the `Person` class itself.");
    }

    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(3, $age->count(), "Expecting three `age` property calls inside the `Person` class itself.");
    }

    public function testCoursePropertyCall()
    {
        $course = self::$code->find('property-call[name="course", variable="this"]');
        
        $this->assertEquals(3, $course->count(), "Expecting three `course` property calls inside the `Student` class itself.");
    }

    public function testCheckAgeCall()
    {
        $checkAge = self::$code->find('method-call[name="checkAge", variable="this"]');
        
        $this->assertEquals(2, $checkAge->count(), "Expecting two 'checkAge()' method calls inside the class itself.");
    }

    /*    
    public function testFunctionCall()
    {
        $nodes = self::$code->find('call[name="require_once"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
    */
    //still need to test the arguments and parameters of the methods.
}