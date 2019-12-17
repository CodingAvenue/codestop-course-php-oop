<?php
require_once('./Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>