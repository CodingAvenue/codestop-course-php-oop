<?php
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>