<?php
class Animal
{
    private $type = "Dog";
    private $age;
    
    public function setAge($newAge)
    {
        if ($this->isValid($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getType()
    {
        return $this->type;
    }

    public function changeType($newType)
    {
        $this->type = $newType;
    }

    private function isValid($value)
    {
        if ($value > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo "The " . $this->getType() . " is " . $this->getAge() . " years old.";
    }
}

$pet = new Animal();
$pet->changeType("Cat");
$pet->setAge(1.5);
$pet->display();
?>