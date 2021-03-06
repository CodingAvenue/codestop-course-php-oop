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
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$student = new Student("John", 20, "BSCS");
$student->display();
?>