<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingArgumentOnSetAgeMethodTest extends TestCase
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
        $expected  = "Anna is 45 years old.";

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

    public function testCheckAge()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $checkAge = $subNodes->find('method[name="checkAge", type="private"]');
        
        $this->assertEquals(1, $checkAge->count(), "Expecting a private method named 'checkAge()'.");
    }
           
    public function testSetAge()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        
        $this->assertEquals(1, $setAge->count(), "Expecting a public method named 'setAge()'.");
    }

    public function testGetAge()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a public method named 'getAge()'.");
    }
    
    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }
    
    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="public"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a public class property named 'name'.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="private"]');
        
        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }
    
    public function testNameValue()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="public"]');
        $value = $name->getSubNode()->getSubNode();
        $annaValue = $value->find('string[value="Anna"]');

        $this->assertEquals(1, $annaValue->count(), "Expecting the value 'Anna' assigned to the 'name' property.");
    }

    public function testSetAgeCallArgs()
    {
        $setAge = self::$code->find('method-call[name="setAge", variable="person"]');
        $args = $setAge->getSubNode()->getSubnode();
        $value = $args->find('integer');
        
        $this->assertEquals(1, $value->count(), "Expecting an integer argument in the 'setAge()' method call of 'person'.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testSetAgeCall()
    {
        $setAge = self::$code->find('method-call[name="setAge", variable="person"]');

        $this->assertEquals(1, $setAge->count(), "Expecting a 'setAge()' method call of 'person'.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="person"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'person'.");
    }   

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three return statements.");
    }

    public function testIf()
    {
        $nodes = self::$code->find('construct[name="if"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two if constructs.");
    }
    
    public function testAgeParam()
    {
        $ageParam = self::$code->find('param[name="age"]');
    
        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the 'checkAge()' method.");
    }

    public function testNewAgeParam()
    {
        $newAgeParam = self::$code->find('param[name="newAge"]');
    
        $this->assertEquals(1, $newAgeParam->count(), "Expecting a parameter named 'newAge' in the `setAge()` method.");
    }
    
    public function testNamePropertyCall()
    {
        $name = self::$code->find('property-call[name="name", variable="this"]');
        
        $this->assertEquals(1, $name->count(), "Expecting one `name` property call inside the `Person` class itself.");
    }

    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(2, $age->count(), "Expecting two `age` property calls inside the `Person` class itself.");
    }

    public function testCheckAgeCall()
    {
        $checkAge = self::$code->find('method-call[name="checkAge", variable="this"]');
        
        $this->assertEquals(1, $checkAge->count(), "Expecting a 'checkAge()' method call inside the class itself.");
    }

    public function testGetAgeCall()
    {
        $getAge = self::$code->find('method-call[name="getAge", variable="this"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a 'getAge()' method call inside the class itself.");
    }
}