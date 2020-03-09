<?php
namespace Math\Geometry;

use Math\Constants;
use Math\Geometry\CircularShape;

require_once(__DIR__.'/CircularShape.php');

class Circle extends CircularShape
{	
    public function diameter()
    {
        return $this -> getRadius() * 2;
    }
    
    public function area()
    {
        return Constants::PI * $this -> getRadius() ** 2; 
    }
    
    public function circumference()
    {
        return 2 * Constants::PI * $this -> getRadius();
    }
}
?>