<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateChildClassMammalTest extends TestCase
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
        $expected  = "The Cat named Catsie is a 3-year old mammal.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement in the `display()` method.");
    }
    
    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method.");
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
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');

        $this->assertEquals(1, $getName->count(), "Expecting a public method named 'getName()'.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting a `display()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a `__construct()` method.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="private"]');

        $this->assertEquals(1, $name->count(), "Expecting a private class property named 'name'.");
    }

    public function testClassMammal()
    {
        $nodes = self::$code->find('class[name="Mammal", extends="Animal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Mammal` class that extends the `Animal` class.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="petMammal"]');

        $this->assertEquals(1, $display->count(), "Expecting one 'display()' method call of 'petMammal'.");
    }

    public function testReturn()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');
        $nodes = $getName->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getName()` method.");
    }

    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' in the `__construct()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named 'age' in the `__construct()` method.");
    }

    public function testTypeParam()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $typeParam = $construct->find('param[name="type"]');

        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named 'type' in the `__construct()` method.");
    }

    public function testParentCall()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $parent = $construct->find('static-call[class="parent", method="__construct"]');

        $this->assertEquals(1, $parent->count(), "Expecting one '__construct()' method call of the parent `Animal` class in the `__construct()` method of the `Mammal` class.");
    }

    public function testThisGetTypeCall()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $method = $display->find('method-call[name="getType", variable="this"]');

        $this->assertEquals(1, $method->count(), "Expecting one 'getType()' method call of the `Animal` class in the `display()` method of the `Mammal` class.");
    }

    public function testThisGetAgeCall()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $method = $display->find('method-call[name="getAge", variable="this"]');

        $this->assertEquals(1, $method->count(), "Expecting one 'getAge()' method call of the `Animal` class in the `display()` method of the `Mammal` class.");
    }

    public function testParentCallTypeArgs()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $parent = $construct->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $typeArgs = $parentArgs->getSubnode();
        $typeVar = $typeArgs->find('variable[name="type"]');

        $this->assertEquals(1, $typeVar->count(), "Expecting an argument 'type' in the '__construct()' method call of the parent class.");
    }

    public function testParentCallAgeArgs()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $parent = $construct->find('static-call[class="parent", method="__construct"]');
        $parentArgs = $parent->find('args');
        $ageArgs = $parentArgs->getSubnode();
        $ageVar = $ageArgs->find('variable[name="age"]');

        $this->assertEquals(1, $ageVar->count(), "Expecting an argument 'age' in the '__construct()' method call of the parent class.");
    }

    public function testGetNameCall()
    {
        $obj = self::$code->find('class[name="Mammal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getName = $display->find('method-call[name="getName", variable="this"]');

        $this->assertEquals(1, $getName->count(), "Expecting one 'getName()' method call in the `display()` method of the `Mammal` class itself.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement.");
    }

    public function testRequireOnceCallArgs()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $args = $nodes->find('string[value="/Animal.php"]');

        $this->assertEquals(1, $args->count(), "Expecting `/Animal.php` in the `require_once()` statement.");
    }
}