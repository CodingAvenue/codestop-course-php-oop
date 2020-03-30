<?php
class Cylinder
{
    const PI = 3.1416;
    private $radius;
    private $height;

    public function __construct($radius, $height)
    {
        $this->radius = $radius;
        $this->height = $height;
    }

    public function getRadius()
    {
        return $this->radius;
    } 

    public function getHeight()
    {
        return $this->height;
    } 

    public function area()
    {
        return 2 * self::PI * $this->getRadius() * ($this->getRadius() + $this->getHeight());
    }

    public function volume()
    {
        return self::PI * $this->getRadius() * $this->getRadius() * $this->getHeight();
    }

    public function display()
    {
        echo "Area: " . $this->area();
        echo "\nVolume: " . $this->volume();
    }
}

$cylinder = new Cylinder(1.5, 3);
$cylinder->display();
?>