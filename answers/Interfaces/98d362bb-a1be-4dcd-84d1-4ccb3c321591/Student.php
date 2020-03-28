<?php
require_once(__DIR__ . '/Person.php');
require_once(__DIR__ . '/LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }

    public function stage()
    {
        return "adolescent";
    }

    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$student = new Student("John", 15);
$student->display();
?>