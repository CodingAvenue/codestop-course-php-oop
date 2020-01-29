<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CreateAutoloaderFunctionTest extends Proof
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

        $this->assertEquals(5, $nodes->count(), "Expecting five assignment statements.");
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

        $this->assertEquals(2, $display->count(), "Expecting two display() methods.");
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

    public function testMammalClass()
    {
        $nodes = self::$code->find('class[name="Mammal", extends="Animal", interface="LifeCycle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Mammal` class that extends the `Animal` class and implements the `LifeCycle` interface.");
    }  

    public function testAnimalClass()
    {
        $nodes = self::$code->find('class[name="Animal", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `Animal` class.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="petMammal"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'petMammal'.");
    }   

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(6, $nodes->count(), "Expecting six return statements.");
    }

    public function testTypePropertyCall()
    {
        $type = self::$code->find('property-call[name="type", variable="this"]');

        $this->assertEquals(2, $type->count(), "Expecting two `type` property calls inside the `Animal` class itself.");
    }

    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');

        $this->assertEquals(2, $age->count(), "Expecting two `age` property calls inside the `Animal` class itself.");
    }

    public function testIsValidCall()
    {
        $isValid = self::$code->find('method-call[name="isValid", variable="this"]');

        $this->assertEquals(1, $isValid->count(), "Expecting one 'isValid()' method call inside the class itself.");
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

    public function testFunctionCall()
    {
        $nodes=self::$code->find('call[name="spl_autoload_register"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a function call for spl_autoload_register() function.");
    }

    public function testMyAnimalAutoloaderFunction()
    {
        $nodes=self::$code->find('function[name="myAnimalAutoloader"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a myAnimalAutoloader() function.");
    }
    //still need to test the arguments of the methods.
}