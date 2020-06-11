<?php
require_once(__DIR__ . "/CircularShape.php");
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }

    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }

    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }

    public function display()
    {
        echo "Radius: " . $this->getRadius() . "\n";
        echo "Diameter: " . $this->diameter() . "\n";
        echo "Area: " . $this->area() . "\n";
        echo "Circumference: " . $this->circumference(); 
    }
}

$circle = new Circle(3.5);
$circle->display();
?>