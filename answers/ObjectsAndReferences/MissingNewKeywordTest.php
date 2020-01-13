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

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarC->display();
$objectVarA = new Student();
$objectVarC->display();
?>