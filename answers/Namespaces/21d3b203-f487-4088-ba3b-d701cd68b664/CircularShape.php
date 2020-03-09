<?php
namespace Math\Geometry;

abstract class CircularShape
{
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>