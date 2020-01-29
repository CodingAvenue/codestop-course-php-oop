<?php
require_once("./autoloader/Autoload.php");

$studentObject = new Student("Charles", 15);
$studentObject->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>