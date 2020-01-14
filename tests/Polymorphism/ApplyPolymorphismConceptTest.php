<?php
use CodingAvenue\Proof\Code;
use Proofs\Proof;
class ApplyPolymorphismConceptTest extends Proof
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
        $expected  = "Rectangle area: 7.5\nRectangle perimeter: 11\nSquare area: 6.25\nSquare perimeter: 10";
        
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
	
        $this->assertEquals(5, $nodes->count(), "Expecting five assignment statements.");
    }
	
    public function testRectangleVariable()
    {
        $rectangle = self::$code->find('variable[name="rectangle"]');
        
        $this->assertEquals(3, $rectangle->count(), "Expecting three occurrences of the variable named 'rectangle'.");
    }
    
    public function testInstantiationRectangle()
    {
        $nodes=self::$code->find('instantiate[class="Rectangle"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Rectangle' class.");
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

    public function testGetPerimeter()
    {
        $getPerimeter = self::$code->find('method[name="getPerimeter", type="public"]');
        
        $this->assertEquals(3, $getPerimeter->count(), "Expecting three getPerimeter() methods.");
    }

    public function testClassRectangle()
    {
        $nodes = self::$code->find('class[name="Rectangle", interface="MyShape"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Rectangle` class that extends the `MyShape` interface.");
    }  
    
    public function testClassSquare()
    {
        $nodes = self::$code->find('class[name="Square", interface="MyShape"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Square` class that extends the `MyShape` interface.");
    }  

    public function testReturn()
    {
        $nodes = self::$code->find('construct[name="return"]');
        
        $this->assertEquals(4, $nodes->count(), "Expecting four return statements.");
    }

    public function testCalculateAreaCallRectangle()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="rectangle"]');
        
        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `rectangle`.");
    }

    public function testGetPerimeterCallRectangle()
    {
        $getPerimeter = self::$code->find('method-call[name="getPerimeter", variable="rectangle"]');
        
        $this->assertEquals(1, $getPerimeter->count(), "Expecting a 'getPerimeter()' method call of `rectangle`.");
    }

    public function testCalculateAreaCallSquare()
    {
        $calculateArea = self::$code->find('method-call[name="calculateArea", variable="square"]');
        
        $this->assertEquals(1, $calculateArea->count(), "Expecting a 'calculateArea()' method call of `square`.");
    }

    public function testGetPerimeterCallSquare()
    {
        $getPerimeter = self::$code->find('method-call[name="getPerimeter", variable="square"]');
        
        $this->assertEquals(1, $getPerimeter->count(), "Expecting a 'getPerimeter()' method call of `square`.");
    }

    public function testLengthPropertyCall()
    {
        $length = self::$code->find('property-call[name="length", variable="this"]');
        
        $this->assertEquals(3, $length->count(), "Expecting three `length` property calls inside the `Rectangle` class itself.");
    }

    public function testWidthPropertyCall()
    {
        $width = self::$code->find('property-call[name="width", variable="this"]');
        
        $this->assertEquals(3, $width->count(), "Expecting three `width` property calls inside the `Rectangle` class itself.");
    }

    public function testSidePropertyCall()
    {
        $side = self::$code->find('property-call[name="side", variable="this"]');
        
        $this->assertEquals(4, $side->count(), "Expecting four `side` property calls inside the `Square` class itself.");
    }

    public function testLengthProperty()
    {
        $length = self::$code->find('property[name="length", type="private"]');
        
        $this->assertEquals(1, $length->count(), "Expecting a private class property named 'length'.");
    }
    
    public function testWidthProperty()
    {
        $width = self::$code->find('property[name="width", type="private"]');
        
        $this->assertEquals(1, $width->count(), "Expecting a private class property named 'width'.");
    }

    public function testSideProperty()
    {
        $side = self::$code->find('property[name="side", type="private"]');
        
        $this->assertEquals(1, $side->count(), "Expecting a private class property named 'side'.");
    }

    public function testLengthParam()
    {
        $lengthParam=self::$code->find('param[name="length"]');
    
        $this->assertEquals(1, $lengthParam->count(), "Expecting a parameter named 'length'.");
    }

    public function testWidthParam()
    {
        $widthParam=self::$code->find('param[name="width"]');
    
        $this->assertEquals(1, $widthParam->count(), "Expecting a parameter named 'width'.");
    }

    public function testSideParam()
    {
        $sideParam=self::$code->find('param[name="side"]');
    
        $this->assertEquals(1, $sideParam->count(), "Expecting a parameter named 'side'.");
    }
    //still need to test the arguments of the methods.
}