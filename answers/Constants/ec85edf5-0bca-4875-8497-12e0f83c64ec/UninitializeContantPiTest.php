<?php
class Circle
{
    const PI = 3.1416;

    public static function area($radius)
    {
        return self::PI * $radius * $radius;
    }
}

echo "The PI value is: " . Circle::PI;
?>