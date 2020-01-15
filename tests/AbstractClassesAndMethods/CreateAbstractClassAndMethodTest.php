<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class CreateAbstractClassAndMethodTest extends Proof
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
        $expected  = "The Cat named Catsie is a 3-year old mammal.";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }
    
    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(4, $nodes->count(), "Expecting four assignment statements.");
    }
	
    public function testPetMammalVariable()
    {
        $petMammal = self::$code->find('variable[name="petMammal"]');
        
        $this->assertEquals(2, $petMammal->count(), "Expecting two occurrences of the variable named 'petMammal'.");
    }
    
    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Mammal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Mammal' class.");
    } 
        
    public function testGetName()
    {
        $getName = self::$code->find('method[name="getName", type="public"]');
        
        $this->assertEquals(1, $getName->count(), "Expecting a public method named 'getName()'.");
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

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(2, $display->count(), "Expecting two display() methods.");
    }

    public function testIsValid()
    {
        $isValid = self::$code->find('method[name="isValid", type="private"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting an isValid() method.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(2, $construct->count(), "Expecting two __construct() methods.");
    }

    public function testNameProperty()
    {
        $name = self::$code->find('property[name="name", type="private"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a private class property named 'name'.");
    }
    
    public function testClassMammal()
    {
        $nodes = self::$code->find('class[name="Mammal", extends="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Mammal` class that extends the `Animal` class.");
    }  
    
    public function testClassAnimal()
    {
        $nodes = self::$code->find('class[name="Animal", type="abstract"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the abstract `Animal` class.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="petMammal"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'petMammal'.");
    } 

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
    
        $this->assertEquals(5, $nodes->count(), "Expecting five return statements.");
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

    public function testTypeParam()
    {
        $typeParam = self::$code->find('param[name="type"]');
        
        $this->assertEquals(2, $typeParam->count(), "Expecting two parameters named 'type'.");
    }

    public function testParentCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        
        $this->assertEquals(1, $parent->count(), "Expecting a '__construct()' method call of the parent class.");
    } 

    public function testParentGetTypeCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="getType"]');
        
        $this->assertEquals(1, $parent->count(), "Expecting a 'getType()' method call of the parent class.");
    } 

    public function testParentGetAgeCall()
    {
        $parent = self::$code->find('static-call[class="parent", method="getAge"]');
        
        $this->assertEquals(1, $parent->count(), "Expecting a 'getAge()' method call of the parent class.");
    }  

    public function testParentCallTypeArgs()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $typeArgs = $parentArgs->getSubnodeByIndex(0);
        $node0 = $typeArgs->getSubnode();
        $typeVar = $node0->find('variable[name="type"]');
        
        $this->assertEquals(1, $typeVar->count(), "Expecting a 'type' argument in the '__construct()' method call of the parent class.");
    }

    public function testParentCallAgeArgs()
    {
        $parent = self::$code->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $ageArgs = $parentArgs->getSubnodeByIndex(1);
        $node1 = $ageArgs->getSubnode();
        $ageVar = $node1->find('variable[name="age"]');
        
        $this->assertEquals(1, $ageVar->count(), "Expecting an 'age' argument in the '__construct()' method call of the parent class.");
    }

    public function testValueParam()
    {
        $valueParam = self::$code->find('param[name="value"]');
    
        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named 'value' in the `isValid()` method.");
    }

    public function testTypePropertyCall()
    {
        $type = self::$code->find('property-call[name="type", variable="this"]');
        
        $this->assertEquals(2, $type->count(), "Expecting two `type` property calls inside the `Animal` class itself.");
    }
    
    public function testAgePropertyCall()
    {
        $age = self::$code->find('property-call[name="age", variable="this"]');
        
        $this->assertEquals(2, $age->count(), "Expecting two `age` property calls inside the `Animal` class itself.");
    }
    
    public function testIsValidCall()
    {
        $isValid = self::$code->find('method-call[name="isValid", variable="this"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting one 'isValid()' method call inside the `Animal` class itself.");
    }
 
    public function testGetNameCall()
    {
        $getName = self::$code->find('method-call[name="getName", variable="this"]');
        
        $this->assertEquals(1, $getName->count(), "Expecting a 'getName()' method call inside the class itself.");
    }
    
    /*    
    public function testFunctionCall()
    {
        $nodes = self::$code->find('call[name="require_once"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting a function call for require_once() function.");
    }
    */
    //still need to test the arguments and parameters of the methods.
}