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
        $expected  = "Charles is an adolescent human being.\nRadius: 2.5\nDiameter: 6.25\nArea: 19.635\nCircumference: 15.708";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(6, $nodes->count(), "Expecting six echo statements.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(10, $nodes->count(), "Expecting ten assignment statements.");
    }

    public function testCircVariable()
    {
        $circ = self::$code->find('variable[name="circ"]');

        $this->assertEquals(2, $circ->count(), "Expecting two occurrences of the variable named 'circ'.");
    }

    public function testCircleInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Circle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Circle' class.");
    }

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');

        $this->assertEquals(3, $display->count(), "Expecting three display() methods.");
    }

    public function testArea()
    {
        $area = self::$code->find('method[name="area", type="public"]');

        $this->assertEquals(2, $area->count(), "Expecting two area() methods.");
    }

    public function testDiameter()
    {
        $diameter = self::$code->find('method[name="diameter", type="public"]');

        $this->assertEquals(2, $diameter->count(), "Expecting two diameter() methods.");
    }

    public function testCircumference()
    {
        $circumference = self::$code->find('method[name="circumference", type="public"]');

        $this->assertEquals(2, $circumference->count(), "Expecting two circumference() methods.");
    }

    public function testCircleClass()
    {
        $nodes = self::$code->find('class[name="Circle", extends="CircularShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class that extends the `CircularShape` class.");
    }  

    public function testCircularShapeClass()
    {
        $nodes = self::$code->find('class[name="CircularShape", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `CircularShape` class.");
    }  

    public function testPersonClass()
    {
        $nodes = self::$code->find('class[name="Person", type="abstract"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `Person` class.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="circ"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'circ'.");
    }   

    public function testRadiusPropertyCall()
    {
        $radius = self::$code->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(2, $radius->count(), "Expecting two `radius` property calls inside the `CircularShape` class itself.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(10, $nodes->count(), "Expecting ten return statements.");
    }

    public function testAreaCall()
    {
        $area = self::$code->find('method-call[name="area", variable="this"]');

        $this->assertEquals(1, $area->count(), "Expecting an 'area()' method call inside the class itself.");
    }

    public function testGetRadiusCall()
    {
        $getRadius = self::$code->find('method-call[name="getRadius", variable="this"]');

        $this->assertEquals(6, $getRadius->count(), "Expecting six 'getRadius()' method calls inside the class itself.");
    } 

    public function testDiameterCall()
    {
        $diameter = self::$code->find('method-call[name="diameter", variable="this"]');

        $this->assertEquals(1, $diameter->count(), "Expecting a 'diameter()' method call inside the class itself.");
    } 

    public function testCircumferenceCall()
    {
        $circumference = self::$code->find('method-call[name="circumference", variable="this"]');

        $this->assertEquals(1, $circumference->count(), "Expecting a 'circumference()' method call inside the class itself.");
    } 

    public function testPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(2, $piCall->count(), "Expecting two 'PI' constant calls inside the class itself.");
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

        $this->assertEquals(2, $construct->count(), "Expecting two __construct() methods.");
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
        
        $this->assertEquals(2, $nodes->count(), "Expecting two function calls for spl_autoload_register() function.");
    }

    public function testMyAutoloaderFunction()
    {
        $nodes=self::$code->find('function[name="myAutoloader"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a myAutoloader() function.");
    }

    public function testMyShapesLoaderFunction()
    {
        $nodes=self::$code->find('function[name="myShapesLoader"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a myShapesLoader() function.");
    }
    //still need to test the arguments of the methods.
}