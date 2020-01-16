<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class IncorrectAccessToPrivatePropertyTest extends Proof
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
        $expected  = "Hello, James!";

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
        
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
    }

    public function testGreeting()
    {
        $greeting = self::$code->find('method[name="greeting", type="static"]');
        
        $this->assertEquals(1, $greeting->count(), "Expecting a static method named 'greeting()'.");
    }

    public function testNameProperty()
    {
        $name = self::$code->find('property[name="name", type="static"]');
        
        $this->assertEquals(1, $name->count(), "Expecting a static class property named 'name'.");
    }
  
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }  

    public function testPersonGreetingCall()
    {
        $personCall = self::$code->find('static-call[class="Person", method="greeting"]');
        
        $this->assertEquals(1, $personCall->count(), "Expecting a static method call named 'greeting()' of the `Person` class.");
    }  
    //still need to test the arguments in the method calls and static property call.
} 