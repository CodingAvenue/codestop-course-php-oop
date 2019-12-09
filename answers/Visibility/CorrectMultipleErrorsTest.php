<?php
class Person
{
    public $name = "Anna";
    private $age;
    
    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$personObject = new Person();
$personObject->setAge(45);
$personObject->display();
?>