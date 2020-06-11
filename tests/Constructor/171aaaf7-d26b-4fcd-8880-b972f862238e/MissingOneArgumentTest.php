<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingOneArgumentTest extends TestCase
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
        $expected  = "James is 15 years old.";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `display()` method.");
    }
    
    public function testAssignmentCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements in the `__construct()` method.");
    }
	    
    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $nodes = $setAge->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `setAge()` method.");
    }
	
    public function testPersonVariable()
    {
        $person = self::$code->find('variable[name="person"]');
        
        $this->assertEquals(2, $person->count(), "Expecting two occurrences of the variable named 'person'.");
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
        
    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
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
    
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="person"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'person'.");
    }   
      
    public function testReturn()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $checkAge = $subNodes->find('method[name="checkAge", type="private"]');
        $nodes = $checkAge->find('construct[name="return"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two return statements in the `checkAge()` method.");
    }

    public function testReturnGet()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $nodes = $getAge->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `getAge()` method.");
    }

    public function testIf()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $checkAge = $subNodes->find('method[name="checkAge", type="private"]');
        $nodes = $checkAge->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one if statement in the `checkAge()` method.");
    }

    public function testIfSet()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $nodes = $setAge->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one if statement in the `setAge()` method.");
    }

    public function testIfCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one if statement in the `__construct()` method.");
    }

    public function testAgeParamCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');
    
        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $checkAge = $subNodes->find('method[name="checkAge", type="private"]');
        $ageParam = $checkAge->find('param[name="age"]');
    
        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `checkAge()' method.");
    }

    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name"]');
    
        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' in the `__construct()` method.");
    }

    public function testNewAgeParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $newAgeParam = $setAge->find('param[name="newAge"]');
    
        $this->assertEquals(1, $newAgeParam->count(), "Expecting a parameter named 'newAge' in the `setAge()` method.");
    }

    public function testNamePropertyCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $name = $display->find('property-call[name="name", variable="this"]');
        
        $this->assertEquals(1, $name->count(), "Expecting one `name` property call inside the `display()` method of the `Person` class itself.");
    }

    public function testNamePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $name = $construct->find('property-call[name="name", variable="this"]');
        
        $this->assertEquals(1, $name->count(), "Expecting one `name` property call inside the `__construct()` method of the `Person` class itself.");
    }

    public function testAgePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $age = $construct->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(1, $age->count(), "Expecting one `age` property call inside the `__construct()` method of the `Person` class itself.");
    }

    public function testAgePropertyCallSet()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $age = $setAge->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(1, $age->count(), "Expecting one `age` property call inside the `setAge()` method of the `Person` class itself.");
    }

    public function testAgePropertyCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $age = $getAge->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(1, $age->count(), "Expecting one `age` property call inside the `getAge()` method of the `Person` class itself.");
    }

    public function testCheckAgeCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $checkAge = $setAge->find('method-call[name="checkAge", variable="this"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting one 'checkAge()' method call inside the `setAge()` method of the `Person` class itself.");
    }

    public function testCheckAgeCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $checkAge = $construct->find('method-call[name="checkAge", variable="this"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting one 'checkAge()' method call inside the `__construct()` method of the `Person` class itself.");
    }

    public function testGetAgeCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getAge = $display->find('method-call[name="getAge", variable="this"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a 'getAge()' method call inside the `display()` method of the `Person` class itself.");
    }
    
    public function testCheckAgeCallArgsCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $checkAge = $construct->find('method-call[name="checkAge", variable="this"]');
        $args = $checkAge->getSubNode()->getSubnode();
        $value = $args->find('variable[name="age"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `age` in the 'checkAge()' method call in the `__construct()` method of the `Person` class itself.");
    } 
    
    public function testCheckAgeCallArgs()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $checkAge = $setAge->find('method-call[name="checkAge", variable="this"]');
        $args = $checkAge->getSubNode()->getSubnode();
        $value = $args->find('variable[name="newAge"]');
    
        $this->assertEquals(1, $value->count(), "Expecting the argument `newAge` in the 'checkAge()' method call in the `setAge()` method of the `Person` class itself.");
    } 
}