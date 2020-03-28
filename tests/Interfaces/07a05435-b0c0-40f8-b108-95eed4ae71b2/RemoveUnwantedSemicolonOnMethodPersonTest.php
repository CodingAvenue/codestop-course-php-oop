<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class RemoveUnwantedSemicolonOnMethodPersonTest extends TestCase
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
	
    public function testPersonVariable()
    {
        $person = self::$code->find('variable[name="person"]');
        
        $this->assertEquals(2, $person->count(), "Expecting two occurrences of the variable named 'person'.");
    }
    
    public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
    } 

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }

    public function testGetName()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');

        $this->assertEquals(1, $getName->count(), "Expecting a getName() method.");
    }

    public function testGetAge()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');

        $this->assertEquals(1, $getAge->count(), "Expecting a getAge() method.");
    }

    public function testSetAge()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');

        $this->assertEquals(1, $setAge->count(), "Expecting a setAge() method.");
    }

    public function testCheckAge()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $checkAge = $subNodes->find('method[name="checkAge", type="private"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting a checkAge() method.");
    }

    public function testStage()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $stage = $subNodes->find('method[name="stage", type="public"]');

        $this->assertEquals(1, $stage->count(), "Expecting a stage() method.");
    }

    public function testSpecies()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $species = $subNodes->find('method[name="species", type="public"]');

        $this->assertEquals(1, $species->count(), "Expecting a species() method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person", interface="LifeCycle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `Person` class.");
    }

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(6, $nodes->count(), "Expecting six return statements.");
    }

    public function testAgePropertyCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $age = $getAge->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting an `age` property call inside the `Person` class itself in the `getAge()` method.");
    }

    public function testNamePropertyCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');
        $name = $getName->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting a `name` property call inside the `Person` class itself in the `getName()` method.");
    }

    public function testNamePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $name = $construct->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting a `name` property call inside the `Person` class itself in the `__construct()` method.");
    }

    public function testAgePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $age = $construct->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting an `age` property call inside the `Person` class itself in the `__construct()` method.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="protected"]');

        $this->assertEquals(1, $name->count(), "Expecting a protected class property named 'name'.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="private"]');

        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }

    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' in the `__construct()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testNewAgeParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $ageParam = $setAge->find('param[name="newAge"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'newAge' in the `setAge()` method.");
    }

    public function testCheckAgeCallArgs()
    {
        $checkAge = self::$code->find('method-call[name="checkAge", variable="this"]');
        $args = $checkAge->getSubNode()->getSubnode();
        $value = $args->find('variable[name="age"]');

        $this->assertEquals(1, $value->count(), "Expecting the argument `age` in the 'checkAge()' method call of the `Person` class itself.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="person"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'person'.");
    }

    public function testStageCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $stage = $display->find('method-call[name="stage", variable="this"]');

        $this->assertEquals(1, $stage->count(), "Expecting a 'stage()' method call inside the `Person` class itself in the `display()` method.");
    }

    public function testSpeciesCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $species = $display ->find('method-call[name="species", variable="this"]');

        $this->assertEquals(1, $species->count(), "Expecting a 'species()' method call inside the `Person` class itself in the `display()` method.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a function call for the require_once() function.");
    }
} 