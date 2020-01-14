<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class MissingArgumentOnObjectInstantiationTest extends Proof
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
        $expected  = "Circle area: 19.6349375\nSquare area: 6.25";
        
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
	
        $this->assertEquals(4, $nodes->count(), "Expecting four assignment statements.");
    }
	
    public function testCircleVariable()
    {
        $circle = self::$code->find('variable[name="circle"]');
        
        $this->assertEquals(2, $circle->count(), "Expecting two occurrences of the variable named 'circle'.");
    }
    
    public function testInstantiationCircle()
    {
        $nodes=self::$code->find('instantiate[class="Circle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Circle' class.");
    }

    public function testInstantiationSquare()
    {
        $nodes=self::$code->find('instantiate[class="Square"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Square' class.");
    }

    public function testConstruct()
    {
        $construct = self::$code->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(2, $construct->count(), "Expecting two __construct() methods.");
    }

    public function testCalculateArea()
    {
        $calculateArea = self::$code->find('method[name="calculateArea", type="public"]');
        
        $this->assertEquals(3, $calculateArea->count(), "Expecting three calculateArea() methods.");
    }

    public function testClassCircle()
    {
        $nodes = self::$code->find('class[name="Circle", interface="MyShape"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class that extends the `MyShape` interface.");
    }  
    
    public function testClassSquare()
    {
        $nodes = self::$code->find('class[name="Square", interface="MyShape"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Square` class that extends the `MyShape` interface.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two return statements.");
    }

    public function testCalculateAreaCallCircle()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="circle"]');
        
        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `circle`.");
    }

    public function testCalculateAreaCallSquare()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="square"]');
        
        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `square`.");
    }

    public function testPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="self"]');
        
        $this->assertEquals(1, $piCall->count(), "Expecting one 'PI' constant call inside the class itself.");
    } 

    public function testConstPi()
    {
        $pi = self::$code->find('const[name="PI"]');
    
        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testRadiusPropertyCall()
    {
        $radius = self::$code->find('property-call[name="radius", variable="this"]');
        
        $this->assertEquals(3, $radius->count(), "Expecting three `radius` property calls inside the `Circle` class itself.");
    }

    public function testSidePropertyCall()
    {
        $side = self::$code->find('property-call[name="side", variable="this"]');
        
        $this->assertEquals(3, $side->count(), "Expecting three `side` property calls inside the `Square` class itself.");
    }

    public function testRadiusProperty()
    {
        $radius = self::$code->find('property[name="radius", type="private"]');
        
        $this->assertEquals(1, $radius->count(), "Expecting a private class property named 'radius'.");
    }

    public function testSideProperty()
    {
        $side = self::$code->find('property[name="side", type="private"]');
        
        $this->assertEquals(1, $side->count(), "Expecting a private class property named 'side'.");
    }

    public function testRadiusParam()
    {
        $radiusParam=self::$code->find('param[name="radius"]');
    
        $this->assertEquals(1, $radiusParam->count(), "Expecting a parameter named 'radius'.");
    }

    public function testSideParam()
    {
        $sideParam=self::$code->find('param[name="side"]');
    
        $this->assertEquals(1, $sideParam->count(), "Expecting a parameter named 'side'.");
    }
    //still need to test the arguments of the methods.
}