<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;

    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
        return self::PI * $radius ** 2;
    }
}
?>