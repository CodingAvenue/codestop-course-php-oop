<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingDollarSignTest extends TestCase
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
        $expected  = "This is a person class.\nThis is a student class.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEchoPerson()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `display()` method of the `Person` class.");
    }

    public function testEchoStudent()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `display()` method of the `Student` class.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements.");
    }

    public function testPersonVariable()
    {
        $person = self::$code->find('variable[name="person"]');

        $this->assertEquals(4, $person->count(), "Expecting four occurrences of the variable named 'person'.");
    }

    public function testPersonRefVariable()
    {
        $personRef = self::$code->find('variable[name="personRef"]');

        $this->assertEquals(1, $personRef->count(), "Expecting one occurrence of the variable named 'personRef'.");
    }

    public function testAnotherPersonRefVariable()
    {
        $anotherPersonRef = self::$code->find('variable[name="anotherPersonRef"]');

        $this->assertEquals(3, $anotherPersonRef->count(), "Expecting three occurrences of the variable named 'anotherPersonRef'.");
    }

    public function testInstantiationPerson()
    {
        $nodes = self::$code->find('instantiate[class="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
    } 

    public function testInstantiationStudent()
    {
        $nodes = self::$code->find('instantiate[class="Student"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    } 

    public function testClassPerson()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }

    public function testClassStudent()
    {
        $nodes = self::$code->find('class[name="Student"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class.");
    } 

    public function testDisplayPerson()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting one display() method in the `Person` class.");
    }

    public function testDisplayStudent()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting one display() method in the `Student` class.");
    }

    public function testDisplayCallC()
    {
        $display = self::$code->find('method-call[name="display", variable="anotherPersonRef"]');
        
        $this->assertEquals(2, $display->count(), "Expecting two 'display()' method calls of 'anotherPersonRef'.");
    }   

    public function testObjectReference()
    {
        $nodes = self::$code->find('assign-ref[variable="anotherPersonRef", variable-ref="person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting the `person` variable as a reference of the `anotherPersonRef` variable.");
    }
}  