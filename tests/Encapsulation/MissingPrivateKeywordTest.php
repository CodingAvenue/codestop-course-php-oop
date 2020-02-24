<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingPrivateKeywordTest extends Proof
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
        $expected  = "Anna is 12 years old.";

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

        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements.");
    }

    public function testPersonObjectVariable()
    {
        $personObject = self::$code->find('variable[name="personObject"]');

        $this->assertEquals(4, $personObject->count(), "Expecting four occurrences of the variable named 'personObject'.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
    } 

    public function testCheckAge()
    {
        $checkAge = self::$code->find('method[name="checkAge", type="private"]');

        $this->assertEquals(1, $checkAge->count(), "Expecting a private method named 'checkAge()'.");
    }

    public function testSetAge()
    {
        $setAge = self::$code->find('method[name="setAge", type="public"]');

        $this->assertEquals(1, $setAge->count(), "Expecting a public method named 'setAge()'.");
    }

    public function testSetName()
    {
        $setName = self::$code->find('method[name="setName", type="public"]');

        $this->assertEquals(1, $setName->count(), "Expecting a public method named 'setName()'.");
    }

    public function testGetAge()
    {
        $getAge = self::$code->find('method[name="getAge", type="public"]');

        $this->assertEquals(1, $getAge->count(), "Expecting a public method named 'getAge()'.");
    }

    public function testGetName()
    {
        $getName = self::$code->find('method[name="getName", type="public"]');

        $this->assertEquals(1, $getName->count(), "Expecting a public method named 'getName()'.");
    }

    public function testNameProperty()
    {
        $name = self::$code->find('property[name="name", type="private"]');

        $this->assertEquals(1, $name->count(), "Expecting a private class property named 'name'.");
    }

    public function testAgeProperty()
    {
        $age = self::$code->find('property[name="age", type="private"]');

        $this->assertEquals(1, $age->count(), "Expecting a private class property named 'age'.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testSetAgeCall()
    {
        $setAge = self::$code->find('method-call[name="setAge", variable="personObject"]');

        $this->assertEquals(1, $setAge->count(), "Expecting a 'setAge()' method call of 'personObject'.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');

        $this->assertEquals(4, $nodes->count(), "Expecting four return statements.");
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
    
    public function testNewNameParam()
    {
        $newNameParam = self::$code->find('param[name="newName"]');

        $this->assertEquals(1, $newNameParam->count(), "Expecting a parameter named 'newName' in the `setName()` method.");
    }

    public function testNamePropertyCall()
    {
        $name = self::$code->find('property-call[name="name", variable="this"]');

        $this->assertEquals(2, $name->count(), "Expecting two `name` property calls inside the `Person` class itself.");
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
    
    //still need to test the arguments in the method calls.
}