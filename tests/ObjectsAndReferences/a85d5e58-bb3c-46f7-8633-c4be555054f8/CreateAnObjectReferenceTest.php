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

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two echo statements.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements.");
    }

    public function testAnimalAVariable()
    {
        $animalA = self::$code->find('variable[name="animalA"]');

        $this->assertEquals(4, $animalA->count(), "Expecting four occurrences of the variable named 'animalA'.");
    }

    public function testAnimalBVariable()
    {
        $animalB = self::$code->find('variable[name="animalB"]');

        $this->assertEquals(2, $animalB->count(), "Expecting two occurrences of the variable named 'animalB'.");
    }

    public function testAnimalCVariable()
    {
        $animalC = self::$code->find('variable[name="animalC"]');

        $this->assertEquals(3, $animalC->count(), "Expecting three occurrences of the variable named 'animalC'.");
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

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(2, $display->count(), "Expecting two display() methods.");
    }
        
    public function testDisplayCallB()
    {
        $display = self::$code->find('method-call[name="display", variable="animalB"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'animalB'.");
    }

    public function testDisplayCallC()
    {
        $display = self::$code->find('method-call[name="display", variable="animalC"]');
        
        $this->assertEquals(2, $display->count(), "Expecting two 'display()' method calls of 'animalC'.");
    }

    public function testObjectReference()
    {
        $nodes = self::$code->find('assign-ref[variable="animalC", variable-ref="animalA"]');

        $this->assertEquals(1, $nodes->count(), "Expecting the `animalA` variable as a reference of the `animalC` variable.");
    }
}