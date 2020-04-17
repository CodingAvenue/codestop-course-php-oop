<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$anotherPersonRef->display();
$person = new Student();
$anotherPersonRef->display();
?>