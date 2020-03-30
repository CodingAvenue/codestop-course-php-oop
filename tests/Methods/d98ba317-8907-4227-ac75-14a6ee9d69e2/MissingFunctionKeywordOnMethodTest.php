<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingFunctionKeywordOnMethodTest extends TestCase
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
        $expected  = "Charles";

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

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testPersonVariable()
    {
        $person = self::$code->find('variable[name="person"]');

        $this->assertEquals(3, $person->count(), "Expecting three occurrences of the variable named 'person'.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
    } 

    public function testChangeName()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $changeName = $subNodes->find('method[name="changeName"]');

        $this->assertEquals(1, $changeName->count(), "Expecting a changeName() method.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="public"]');

        $this->assertEquals(1, $name->count(), "Expecting a public class property named 'name'.");
    }

    public function testNameValue()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="public"]');
        $value = $name->getSubNode()->getSubNode();
        $dianaValue = $value->find('string[value="Diana"]');

        $this->assertEquals(1, $dianaValue->count(), "Expecting the value 'Diana' assigned to the 'name' property.");
    }
    
    public function testChangeNameCallArgs()
    {
        $changeName = self::$code->find('method-call[name="changeName", variable="person"]');
        $args = $changeName->getSubNode()->getSubnode();
        $value = $args->find('string[value="Charles"]');
   
        $this->assertEquals(1, $value->count(), "Expecting the argument `Charles` in the 'changeName()' method call of 'person'.");
    } 

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testChangeNameCall()
    {
        $changeName = self::$code->find('method-call[name="changeName", variable="person"]');

        $this->assertEquals(1, $changeName->count(), "Expecting a 'changeName()' method call of 'person'.");
    }
    
    public function testNewNameParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $changeName = $subNodes->find('method[name="changeName"]');
        $newNameParam = $changeName->find('param[name="newName"]');
    
        $this->assertEquals(1, $newNameParam->count(), "Expecting a parameter named 'newName' in the `changeName()` method.");
    }
    
    public function testNamePropertyCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $changeName = $subNodes->find('method[name="changeName"]');
        $name = $changeName->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call inside the `changeName()` method of the `Person` class itself.");
    }

    public function testNamePropertyCallPerson()
    {
        $name = self::$code->find('property-call[name="name", variable="person"]');

        $this->assertEquals(1, $name->count(), "Expecting a 'name' property call of 'person'.");
    }  
} 
