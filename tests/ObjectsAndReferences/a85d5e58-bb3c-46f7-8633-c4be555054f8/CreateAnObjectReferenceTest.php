<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAnObjectReferenceTest extends TestCase
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
        $expected  = "This is an animal class.\nThis is an animal class.\nThis is a mammal class.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEchoAnimal()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `display()` method of the `Animal` class.");
    }

    public function testEchoMammal()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `display()` method of the `Mammal` class.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements.");
    }

    public function testAnimalVariable()
    {
        $animal = self::$code->find('variable[name="animal"]');

        $this->assertEquals(4, $animal->count(), "Expecting four occurrences of the variable named 'animal'.");
    }

    public function testAnimalRefVariable()
    {
        $animalRef = self::$code->find('variable[name="animalRef"]');

        $this->assertEquals(2, $animalRef->count(), "Expecting two occurrences of the variable named 'animalRef'.");
    }

    public function testAnotherAnimalRefVariable()
    {
        $anotherAnimalRef = self::$code->find('variable[name="anotherAnimalRef"]');

        $this->assertEquals(3, $anotherAnimalRef->count(), "Expecting three occurrences of the variable named 'anotherAnimalRef'.");
    }

    public function testInstantiationAnimal()
    {
        $nodes = self::$code->find('instantiate[class="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Animal' class.");
    } 

    public function testInstantiationMammal()
    {
        $nodes = self::$code->find('instantiate[class="Mammal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Mammal' class.");
    } 

    public function testClassAnimal()
    {
        $nodes = self::$code->find('class[name="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }

    public function testClassMammal()
    {
        $nodes = self::$code->find('class[name="Mammal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Mammal` class.");
    } 

    public function testDisplayAnimal()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting one display() method in the `Animal` class.");
    }

    public function testDisplayMammal()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting one display() method in the `Mammal` class.");
    }

    public function testDisplayCallB()
    {
        $display = self::$code->find('method-call[name="display", variable="animalRef"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'animalRef'.");
    }

    public function testDisplayCallC()
    {
        $display = self::$code->find('method-call[name="display", variable="anotherAnimalRef"]');
        
        $this->assertEquals(2, $display->count(), "Expecting two 'display()' method calls of 'anotherAnimalRef'.");
    }

    public function testObjectReference()
    {
        $nodes = self::$code->find('assign-ref[variable="anotherAnimalRef", variable-ref="animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting the `animal` variable as a reference of the `anotherAnimalRef` variable.");
    }
}