<?php
require_once(__DIR__.'/Constants.php');
require_once(__DIR__.'/Circle.php');

use Math\Geometry\Circle as MyCircle;

$circle = new MyCircle(5.5);
echo "The area of the circle is: " . $circle->area();
?>