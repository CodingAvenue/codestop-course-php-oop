<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingStageMethodImplementationTest extends Proof
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
        $expected  = "John is an adolescent human being.";
        
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
	
        $this->assertEquals(1, $nodes->count(), "Expecting an assignment statement.");
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

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testStage()
    {
        $stage = self::$code->find('method[name="stage", type="public"]');
        
        $this->assertEquals(1, $stage->count(), "Expecting a stage() method.");
    }

    public function testSpecies()
    {
        $species = self::$code->find('method[name="species", type="public"]');
        
        $this->assertEquals(1, $species->count(), "Expecting a species() method.");
    }
 
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Student", extends="Person", interface="LifeCycle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class that extends the `Person` class and implements the `LifeCycle` interface.");
    }  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="studentObject"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'studentObject'.");
    }   
      
    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two return statements.");
    }
 
    public function testNamePropertyCall()
    {
        $name = self::$code->find('property-call[name="name", variable="this"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a `name` property call inside the `Student` class itself.");
    }  

    public function testStageCall()
    {
        $stage = self::$code->find('method-call[name="stage", variable="this"]');
        
        $this->assertEquals(1, $stage->count(), "Expecting a 'stage()' method call inside the class itself.");
    }   

    public function testSpeciesCall()
    {
        $species = self::$code->find('method-call[name="species", variable="this"]');
        
        $this->assertEquals(1, $species->count(), "Expecting a 'species()' method call inside the class itself.");
    } 
     
    //still need to test the arguments of the methods.
} 