<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class IncorrectConstantAccessInsideMethodTest extends Proof
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
        $expected  = "The area of the circle with 3.5 radius is: 38.4846";
        
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
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }
	
    public function testCircleObjectVariable()
    {
        $circleObject = self::$code->find('variable[name="circleObject"]');
        
        $this->assertEquals(2, $circleObject->count(), "Expecting two occurrences of the variable named 'circleObject'.");
    }
    
    public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Circle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Circle' class.");
    }

    public function testDisplay()
    {
        $display = self::$code->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testArea()
    {
        $area = self::$code->find('method[name="area", type="public"]');
        
        $this->assertEquals(1, $area->count(), "Expecting an area() method.");
    }

    public function testGetRadius()
    {
        $getRadius = self::$code->find('method[name="getRadius", type="public"]');
        
        $this->assertEquals(1, $getRadius->count(), "Expecting a getRadius() method.");
    }
 
    public function testClass()
    {
        $nodes = self::$code->find('class[name="Circle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class.");
    }  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="circleObject"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'circleObject'.");
    }   
      
    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two return statements.");
    }
 
    public function testRadiusPropertyCall()
    {
        $radius = self::$code->find('property-call[name="radius", variable="this"]');
        
        $this->assertEquals(5, $radius->count(), "Expecting five `radius` property calls inside the `Circle` class itself.");
    }

    public function testAreaCall()
    {
        $area = self::$code->find('method-call[name="area", variable="this"]');
        
        $this->assertEquals(1, $area->count(), "Expecting an 'area()' method call inside the class itself.");
    }

    public function testConstPi()
    {
        $pi = self::$code->find('const[name="PI"]');
    
        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI"]');
        
        $this->assertEquals(1, $piCall->count(), "Expecting a 'PI' constant call inside the class itself.");
    } 
    //still need to test the arguments of the methods.
}