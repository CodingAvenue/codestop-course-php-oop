<?php
namespace Math\Geometry;

use Math\Constants;

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getCircumference()
    {
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this->radius;
    }
}
?>