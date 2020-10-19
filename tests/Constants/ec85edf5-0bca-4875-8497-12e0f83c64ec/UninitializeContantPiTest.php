<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UninitializeContantPiTest extends TestCase
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
        $expected  = "The PI value is: 3.1416";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement.");
    }
 
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Circle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class.");
    }  

    public function testReturnArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $nodes = $area->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `area()` method.");
    }

    public function testConstPi()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testConstPiValue()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');
        $value = $pi->getSubNode()->getSubNode();
        $piValue = $value->find('float'); // NOTE: need to verify and improve this validation

        $this->assertEquals(1, $piValue->count(), "Expecting a class `PI` constant value of type float.");
    }

    public function testPiCallArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $piCall = $area->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call in the `area()` method of the `Circle` class itself.");
    }

    public function testCirclePiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="Circle"]');
        
        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call outside the `Circle` class.");
    } 

    public function testArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting an `area()` method.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="area", type="public"]');
        $radParam = $area->find('param[name="radius"]');

        $this->assertEquals(1, $radParam->count(), "Expecting a parameter named 'radius' in the `area()` method.");
    }
}