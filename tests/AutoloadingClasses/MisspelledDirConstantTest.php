<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MisspelledDirConstantTest extends Proof
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
        $expected  = "Charles is an adolescent human being.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(6, $nodes->count(), "Expecting six assignment statements.");
    }

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');

        $this->assertEquals(2, $display->count(), "Expecting two display() methods.");
    }

    public function testPersonClass()
    {
        $nodes = self::$code->find('class[name="Person", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `Person` class.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(6, $nodes->count(), "Expecting six return statements.");
    }

    public function testStudentObjectVariable()
    {
        $studentObject = self::$code->find('variable[name="studentObject"]');

        $this->assertEquals(2, $studentObject->count(), "Expecting two occurrences of the variable named 'studentObject'.");
    }

    public function testInstantiationStudent()
    {
        $nodes=self::$code->find('instantiate[class="Student"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    } 

    public function testStage()
    {
        $stage = self::$code->find('method[name="stage", type="public"]');

        $this->assertEquals(2, $stage->count(), "Expecting two stage() methods.");
    }

    public function testSpecies()
    {
        $species = self::$code->find('method[name="species", type="public"]');

        $this->assertEquals(2, $species->count(), "Expecting two species() methods.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting one __construct() method.");
    }

    public function testStudentClass()
    {
        $nodes = self::$code->find('class[name="Student", extends="Person", interface="LifeCycle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class that extends the `Person` class and implements the `LifeCycle` interface.");
    }  

    public function testStudentDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="studentObject"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'studentObject'.");
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

    public function testFunctionCall()
    {
        $nodes=self::$code->find('call[name="spl_autoload_register"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a function call for spl_autoload_register() function.");
    }

    public function testMyAutoloaderFunction()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a myAutoloader() function.");
    }

    //still need to test the arguments of the methods.
}