<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class IncorrectInterfaceMethodDefinitionTest extends Proof
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
        $expected  = "Anna is an adolescent human being.";
        
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
	
        $this->assertEquals(4, $nodes->count(), "Expecting four assignment statements.");
    }
	
    public function testPersonObjectVariable()
    {
        $personObject = self::$code->find('variable[name="personObject"]');
        
        $this->assertEquals(2, $personObject->count(), "Expecting two occurrences of the variable named 'personObject'.");
    }
    
    public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
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
        
    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }
 
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person", interface="LifeCycle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class that implements the `LifeCycle` interface.");
    }  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="personObject"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'personObject'.");
    }   
      
    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(6, $nodes->count(), "Expecting six return statements.");
    }
    
    public function testNameParam()
    {
        $nameParam = self::$code->find('param[name="name"]');
    
        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name'.");
    }

    public function testAgeParam()
    {
        $ageParam = self::$code->find('param[name="age"]');
    
        $this->assertEquals(2, $ageParam->count(), "Expecting two parameters named 'age'.");
    }

    public function testNewAgeParam()
    {
        $newAgeParam = self::$code->find('param[name="newAge"]');
    
        $this->assertEquals(1, $newAgeParam->count(), "Expecting a parameter named 'newAge'.");
    }

    public function testNamePropertyCall()
    {
        $name = self::$code->find('property-call[name="name", variable="this"]');
        
        $this->assertEquals(3, $name->count(), "Expecting three `name` property calls inside the `Person` class itself.");
    }  

    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(3, $age->count(), "Expecting three `age` property calls inside the `Person` class itself.");
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
    
    public function testCheckAgeCall()
    {
        $checkAge = self::$code->find('method-call[name="checkAge", variable="this"]');
        
        $this->assertEquals(2, $checkAge->count(), "Expecting two 'checkAge()' method calls inside the class itself.");
    }  
    
    //still need to test the arguments of the methods.
} 