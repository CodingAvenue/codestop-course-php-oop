<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateClassWithPrivatePropertyAndMethodTest extends TestCase
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
        $expected  = "The Cat is 1.5 years old.";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement in the `display()` method.");
    }
    
    public function testAssignmentSet()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $nodes = $setAge->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `setAge()` method.");
    }

    public function testAssignmentChange()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $changeType = $subNodes->find('method[name="changeType", type="public"]');
        $nodes = $changeType->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `changeType()` method.");
    }
	
    public function testPetVariable()
    {
        $pet = self::$code->find('variable[name="pet"]');
        
        $this->assertEquals(4, $pet->count(), "Expecting four occurrences of the variable named 'pet'.");
    }
    
    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Animal' class.");
    } 
    
    public function testIsValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting a private method named 'isValid()'.");
    }
           
    public function testSetAge()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        
        $this->assertEquals(1, $setAge->count(), "Expecting a public method named 'setAge()'.");
    }

    public function testGetAge()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a public method named 'getAge()'.");
    }

    public function testGetType()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a public method named 'getType()'.");
    }

    public function testChangeType()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $changeType = $subNodes->find('method[name="changeType", type="public"]');
        
        $this->assertEquals(1, $changeType->count(), "Expecting a public method named 'changeType()'.");
    }
    
    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }
    
    public function testTypeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="private"]');
        
        $this->assertEquals(1, $type->count(), "Expecting a private class property named 'type'.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="private"]');
        
        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }
  
    public function testTypeValue()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="private"]');
        $value = $type->getSubNode()->getSubNode();
        $dogValue = $value->find('string[value="Dog"]');

        $this->assertEquals(1, $dogValue->count(), "Expecting the value 'Dog' assigned to the 'type' property.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }  
	
    public function testSetAgeCall()
    {
        $setAge = self::$code->find('method-call[name="setAge", variable="pet"]');
        
        $this->assertEquals(1, $setAge->count(), "Expecting a 'setAge()' method call of 'pet'.");
    }  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="pet"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'pet'.");
    }   

    public function testChangeTypeCall()
    {
        $changeType = self::$code->find('method-call[name="changeType", variable="pet"]');
        
        $this->assertEquals(1, $changeType->count(), "Expecting a 'changeType()' method call of 'pet'.");
    }   

    public function testChangeTypeCallArgs()
    {
        $changeType = self::$code->find('method-call[name="changeType", variable="pet"]');
        $args = $changeType->getSubNode()->getSubnode();
        $value = $args->find('string[value="Cat"]');

        $this->assertEquals(1, $value->count(), "Expecting the argument `Cat` in the 'changeType()' method call of 'pet'.");
    } 

    public function testSetAgeCallArgs()
    {
        $setAge = self::$code->find('method-call[name="setAge", variable="pet"]');
        $args = $setAge->getSubNode()->getSubnode();
        $value = $args->find('float'); //Note: This is still needs testing
        
        $this->assertEquals(1, $value->count(), "Expecting a float argument in the 'setAge()' method call of 'pet'.");
    }

    public function testReturnIsValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $nodes = $isValid->find('construct[name="return"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two return statements in the `isValid()` method.");
    }

    public function testReturnGet()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $nodes = $getAge->find('construct[name="return"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `getAge()` method.");
    }

    public function testReturnType()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType= $subNodes->find('method[name="getType", type="public"]');
        $nodes = $getType->find('construct[name="return"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `getType()` method.");
    }

    public function testIfIsValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $nodes = $isValid->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one if statement in the `isValid()` method.");
    }

    public function testIfSet()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $nodes = $setAge->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one if statement in the `setAge()` method.");
    }

    public function testValueParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $valueParam = $isValid->find('param[name="value"]');
    
        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named 'value' in the `isValid()` method.");
    }

    public function testNewAgeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $ageParam = $setAge->find('param[name="newAge"]');
    
        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'newAge' in the `setAge()` method.");
    }

    public function testNewTypeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $changeType = $subNodes->find('method[name="changeType", type="public"]');
        $typeParam = $changeType->find('param[name="newType"]');
    
        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named 'newType' in the `changeType()` method.");
    }

    public function testTypePropertyCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $changeType = $subNodes->find('method[name="changeType", type="public"]');
        $type = $changeType->find('property-call[name="type", variable="this"]');
        
        $this->assertEquals(1, $type->count(), "Expecting one `type` property call inside the `changeType()` method of the `Animal` class itself.");
    }
    
    public function testTypePropertyCallGet()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');
        $type = $getType->find('property-call[name="type", variable="this"]');
        
        $this->assertEquals(1, $type->count(), "Expecting one `type` property call inside the `getType()` method of the `Animal` class itself.");
    }
    
    public function testAgePropertyCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $age = $setAge->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(1, $age->count(), "Expecting one `age` property call inside the `setAge()` method of the `Animal` class itself.");
    }
    
    public function testAgePropertyCallGet()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $age = $getAge->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(1, $age->count(), "Expecting one `age` property call inside the `getAge()` method of the `Animal` class itself.");
    }

    public function testIsValidCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $setAge = $subNodes->find('method[name="setAge", type="public"]');
        $isValid = $setAge->find('method-call[name="isValid", variable="this"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting an 'isValid()' method call inside the `setAge()` method of the `Animal` class itself.");
    }
    
    public function testGetTypeCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getType = $display->find('method-call[name="getType", variable="this"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a 'getType()' method call inside the `display()` method of the `Animal` class itself.");
    }

    public function testGetAgeCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getAge = $display->find('method-call[name="getAge", variable="this"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a 'getAge()' method call inside `display()` method of the `Animal` class itself.");
    }
}