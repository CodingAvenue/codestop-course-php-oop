<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class RemoveVisibilityKeywordOnConstantDeclarationTest extends Proof
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
        $expected  = "Radius: 3.5\nDiameter: 12.25\nArea: 38.4846\nCircumference: 21.9912";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }
    
    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
		
        $this->assertEquals(4, $nodes->count(), "Expecting four echo statements.");
    }
    
    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
	
        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
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

    public function testDiameter()
    {
        $diameter = self::$code->find('method[name="diameter", type="public"]');
        
        $this->assertEquals(1, $diameter->count(), "Expecting a diameter() method.");
    }

    public function testCircumference()
    {
        $circumference = self::$code->find('method[name="circumference", type="public"]');
        
        $this->assertEquals(1, $circumference->count(), "Expecting a circumference() method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Circle", extends="CircularShape"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class that extends the `CircularShape` class.");
    }  
    
    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="circleObject"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'circleObject'.");
    }   
      
    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(3, $nodes->count(), "Expecting three return statements.");
    }

    public function testAreaCall()
    {
        $area = self::$code->find('method-call[name="area", variable="this"]');
        
        $this->assertEquals(1, $area->count(), "Expecting an 'area()' method call inside the class itself.");
    }

    public function testGetRadiusCall()
    {
        $getRadius = self::$code->find('method-call[name="getRadius", variable="this"]');
        
        $this->assertEquals(6, $getRadius->count(), "Expecting six 'getRadius()' method calls inside the class itself.");
    } 

    public function testDiameterCall()
    {
        $diameter = self::$code->find('method-call[name="diameter", variable="this"]');
        
        $this->assertEquals(1, $diameter->count(), "Expecting a 'diameter()' method call inside the class itself.");
    } 

    public function testCircumferenceCall()
    {
        $circumference = self::$code->find('method-call[name="circumference", variable="this"]');
        
        $this->assertEquals(1, $circumference->count(), "Expecting a 'circumference()' method call inside the class itself.");
    } 

    public function testPiCall()
    {
        $piCall = self::$code->find('const-fetch[name="PI", class="self"]');
        
        $this->assertEquals(2, $piCall->count(), "Expecting two 'PI' constant calls inside the class itself.");
    } 
    //still need to test the arguments of the methods.
}