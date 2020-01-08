<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CreateClassThatImplementsAnInterfaceTest extends Proof
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
        $expected  = "The Cat is an adult animal.";
        
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
	
    public function testPetMammalVariable()
    {
        $petMammal = self::$code->find('variable[name="petMammal"]');
        
        $this->assertEquals(2, $petMammal->count(), "Expecting two occurrences of the variable named 'petMammal'.");
    }
    
    public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Mammal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Mammal' class.");
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
        $nodes = self::$code->find('class[name="Mammal", extends="Animal", interface="LifeCycle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Mammal` class that extends the `Animal` class and implements the `LifeCycle` interface.");
    }  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="petMammal"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'petMammal'.");
    }   
      
    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two return statements.");
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

    public function testParentGetTypeCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="getType"]');

        $this->assertEquals(1, $parent->count(), "Expecting a 'getType()' method call of the parent class.");
    }  
    //still need to test the arguments of the methods.
} 