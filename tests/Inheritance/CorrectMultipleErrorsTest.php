<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CorrectMultipleErrorsTest extends Proof
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
		$nodes=self::$code->find('construct[name="echo"]');
		
		$this->assertEquals(1, $nodes->count(), "Expecting a single echo statement.");
    }
    
	public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
	}
	
	public function testStudentObjectVariable()
    {
        $studentObject = self::$code->find('variable[name="studentObject"]');
        
        $this->assertEquals(2, $studentObject->count(), "Expecting two occurrences of the variable named 'studentObject'.");
    }
    
	public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Student"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    } 
    
    public function testGetCourse()
    {
        $getCourse=self::$code->find('method[name="getCourse", type="public"]');
        
        $this->assertEquals(1, $getCourse->count(), "Expecting a public method named 'getCourse()'.");
    }
    
	public function testDisplay()
    {
        $display=self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }
        
	public function testConstruct()
    {
        $construct=self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }
    
    public function testCourseProperty()
    {
        $course = self::$code->find('property[name="course", type="private"]');
        
        $this->assertEquals(1, $course->count(), "Expecting a private class property named 'course'.");
    }
    
	public function testClass()
    {
        $nodes=self::$code->find('class[name="Student", extends="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class that extends the `Person` class.");
	}  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="studentObject"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'studentObject'.");
    }   
      
    public function testReturn()
    {
        $nodes=self::$code->find('construct[name="return"]');
        $this->assertEquals(1, $nodes->count(), "Expecting one return statement.");
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