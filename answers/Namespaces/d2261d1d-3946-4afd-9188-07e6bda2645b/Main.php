<?php
require_once(__DIR__.'/Constants.php');
require_once(__DIR__.'/Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>