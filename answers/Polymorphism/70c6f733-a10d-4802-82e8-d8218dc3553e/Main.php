<?php
require_once("./Rectangle.php");
require_once("./Square.php");

$rectangle = new Rectangle(2.5, 3);
$square = new Square(2.5);

echo "Rectangle area: " . $rectangle->calculateArea();
echo "\nRectangle perimeter: " . $rectangle->getPerimeter();
echo "\nSquare area: " . $square->calculateArea();
echo "\nSquare perimeter: " . $square->getPerimeter();
?>
