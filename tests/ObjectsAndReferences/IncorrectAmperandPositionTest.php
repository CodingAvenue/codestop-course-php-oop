<?php
use CodingAvenue\Proof\Code;
class IncorrectAmperandPositionTest extends PHPUnit
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
        $expected  = "This is a person class.";

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

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testObjectVarAVariable()
    {
        $objectVarA = self::$code->find('variable[name="objectVarA"]');

        $this->assertEquals(4, $objectVarA->count(), "Expecting four occurrences of the variable named 'objectVarA'.");
    }

    public function testObjectVarBVariable()
    {
        $objectVarB = self::$code->find('variable[name="objectVarB"]');

        $this->assertEquals(1, $objectVarB->count(), "Expecting one occurrence of the variable named 'objectVarB'.");
    }

    public function testObjectVarCVariable()
    {
        $objectVarC = self::$code->find('variable[name="objectVarC"]');

        $this->assertEquals(1, $objectVarC->count(), "Expecting one occurrence of the variable named 'objectVarC'.");
    }

    public function testInstantiationPerson()
    {
        $nodes = self::$code->find('instantiate[class="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
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

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');

        $this->assertEquals(2, $display->count(), "Expecting two display() methods.");
    }
    
    public function testDisplayCallA()
    {
        $display = self::$code->find('method-call[name="display", variable="objectVarA"]');

        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'objectVarA'.");
    }   

    public function testObjectReference()
    {
        $nodes = self::$code->find('assign-ref[variable="objectVarC", variable-ref="objectVarA"]');

        $this->assertEquals(1, $nodes->count(), "Expecting the `objectVarA` variable as a reference of the `objectVarC` variable.");
    }
}  