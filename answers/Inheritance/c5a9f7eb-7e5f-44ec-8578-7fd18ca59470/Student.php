<?php
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
$student->display();
?>