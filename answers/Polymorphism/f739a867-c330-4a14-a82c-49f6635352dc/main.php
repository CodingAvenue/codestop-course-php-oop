<?php
require_once(__DIR__ . "/Circle.php");
require_once(__DIR__ . "/Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>

