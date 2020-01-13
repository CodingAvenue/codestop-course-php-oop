<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(12);
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>