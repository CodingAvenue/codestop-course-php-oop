<?php
require_once(__DIR__ . '/CircularShape.php');
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
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circle = new Circle(3.5);
$circle->display();
?>