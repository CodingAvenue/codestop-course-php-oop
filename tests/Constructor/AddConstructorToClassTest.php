<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class AddConstructorToClassTest extends Proof
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
        $expected  = "The Cat is 3 years old.";
        
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
	
    public function testPetVariable()
    {
        $pet = self::$code->find('variable[name="pet"]');
        
        $this->assertEquals(2, $pet->count(), "Expecting two occurrences of the variable named 'pet'.");
    }
    
    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Animal' class.");
    } 
    
    public function testIsValid()
    {
        $isValid = self::$code->find('method[name="isValid", type="private"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting a private method named 'isValid()'.");
    }
           
    public function testSetAge()
    {
        $setAge = self::$code->find('method[name="setAge", type="public"]');
        
        $this->assertEquals(1, $setAge->count(), "Expecting a public method named 'setAge()'.");
    }
    
    public function testGetAge()
    {
        $getAge = self::$code->find('method[name="getAge", type="public"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a public method named 'getAge()'.");
    }

    public function testGetType()
    {
        $getType = self::$code->find('method[name="getType", type="public"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a public method named 'getType()'.");
    }

    public function testChangeType()
    {
        $changeType = self::$code->find('method[name="changeType", type="public"]');
        
        $this->assertEquals(1, $changeType->count(), "Expecting a public method named 'changeType()'.");
    }
    
    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }
    
    public function testTypeProperty()
    {
        $type = self::$code->find('property[name="type", type="private"]');
        
        $this->assertEquals(1, $type->count(), "Expecting a private class property named 'type'.");
    }

    public function testAgeProperty()
    {
        $age = self::$code->find('property[name="age", type="private"]');
        
        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }
    
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="pet"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'pet'.");
    }   

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(4, $nodes->count(), "Expecting four return statements.");
    }

    public function testIf()
    {
        $nodes = self::$code->find('construct[name="if"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three if constructs.");
    }

    public function testAgeParam()
    {
        $ageParam = self::$code->find('param[name="age"]');
    
        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testTypeParam()
    {
        $typeParam = self::$code->find('param[name="type"]');
    
        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named 'type' in the `__construct()` method.");
    }

    public function testNewAgeParam()
    {
        $newAgeParam = self::$code->find('param[name="newAge"]');
    
        $this->assertEquals(1, $newAgeParam->count(), "Expecting a parameter named 'newAge' in the `setAge()` method.");
    }

    public function testNewTypeParam()
    {
        $newTypeParam = self::$code->find('param[name="newType"]');
    
        $this->assertEquals(1, $newTypeParam->count(), "Expecting a parameter named 'newType' in the `changeType()` method.");
    }

    public function testValueParam()
    {
        $valueParam = self::$code->find('param[name="value"]');
    
        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named 'value' in the `isValid()` method.");
    }

    public function testTypePropertyCall()
    {
        $type = self::$code->find('property-call[name="type", variable="this"]');
        
        $this->assertEquals(3, $type->count(), "Expecting three `type` property calls inside the `Animal` class itself.");
    }
    
    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(3, $age->count(), "Expecting three `age` property calls inside the `Animal` class itself.");
    }
    
    public function testIsValidCall()
    {
        $isValid = self::$code->find('method-call[name="isValid", variable="this"]');
        
        $this->assertEquals(2, $isValid->count(), "Expecting two 'isValid()' method calls inside the class itself.");
    }
    
    public function testGetTypeCall()
    {
        $getType = self::$code->find('method-call[name="getType", variable="this"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a 'getType()' method call inside the class itself.");
    }
    
    public function testGetAgeCall()
    {
        $getAge = self::$code->find('method-call[name="getAge", variable="this"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a 'getAge()' method call inside the class itself.");
    }
    //still need to test the arguments in the method calls.
}