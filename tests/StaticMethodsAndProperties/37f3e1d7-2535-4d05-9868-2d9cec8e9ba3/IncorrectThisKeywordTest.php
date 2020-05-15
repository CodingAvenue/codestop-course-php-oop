<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class IncorrectThisKeywordTest extends TestCase
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
        $expected  = "Hello, Anna!";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement.");
    }

    public function testGreeting()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $greeting = $subNodes->find('method[name="greeting", type="static"]');

        $this->assertEquals(1, $greeting->count(), "Expecting a static method named 'greeting()'.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="static"]');

        $this->assertEquals(1, $name->count(), "Expecting a static class property named 'name'.");
    }
  
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }

    public function testNameValue()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="static"]');
        $value = $name->getSubNode()->getSubNode();
        $annaValue = $value->find('string[value="Anna"]');

        $this->assertEquals(1, $annaValue->count(), "Expecting the value 'Anna' assigned to the 'name' property.");
    }

    public function testGreetParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $greeting = $subNodes->find('method[name="greeting", type="public"]');
        $greetParam = $greeting->find('param[name="greet"]');

        $this->assertEquals(1, $greetParam->count(), "Expecting a parameter named 'greet' in the `greeting()` method.");
    }

    public function testPersonGreetingCall()
    {
        $personCall = self::$code->find('static-call[class="Person", method="greeting"]');

        $this->assertEquals(1, $personCall->count(), "Expecting a static method call named 'greeting()' of the `Person` class.");
    }

    public function testPersonGreetingCallArgs()
    {
        $personCall = self::$code->find('static-call[class="Person", method="greeting"]');
        $args = $personCall->getSubNode()->getSubnode();
        $value = $args->find('string[value="Hello"]');

        $this->assertEquals(1, $value->count(), "Expecting the argument `Hello` in the 'greeting()' method call of the `Person` class itself.");
    }

    public function testStaticPropertySelfCallGreeting()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $greeting = $subNodes->find('method[name="greeting", type="public"]');
        $selfCall = $greeting->find('static-prop-fetch[class="self"]');

        $this->assertEquals(1, $selfCall->count(), "Expecting one static property call in the `greeting()` method of the `Person` class itself.");
    }
} 