<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>