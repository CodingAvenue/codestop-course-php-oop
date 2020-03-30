<?php
class Circle
{
    const PI = 3.1416;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function area()
    {
        return self::PI * $this->radius * $this->radius;
    }

    public function display()
    {
        echo "The area of the circle with " . $this->radius . " radius is: " . $this->area();
    }
}

$circle = new Circle(3.5);
$circle->display();
?>