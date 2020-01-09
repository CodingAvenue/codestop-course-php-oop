<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class IncorrectConstantDefinitionTest extends Proof
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
        $expected  = "The PI value is: 3.1416";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }
 
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Circle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting one return statement.");
    }
 
    public function testConstPi()
    {
        $pi = self::$code->find('const[name="PI"]');
    
        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testSelfPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="self"]');
        
        $this->assertEquals(1, $piCall->count(), "Expecting a 'PI' constant call inside the class itself.");
    } 

    public function testCirclePiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="Circle"]');
        
        $this->assertEquals(1, $piCall->count(), "Expecting a 'PI' constant call outside the `Circle` class.");
    } 

    public function testArea()
    {
        $area = self::$code->find('method[name="area", type="static"]');
        
        $this->assertEquals(1, $area->count(), "Expecting a static method named 'area()'.");
    }

    public function testRadiusParam()
    {
        $radiusParam=self::$code->find('param[name="radius"]');
    
        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius'.");
    }
    //still need to test the arguments of the methods.
}