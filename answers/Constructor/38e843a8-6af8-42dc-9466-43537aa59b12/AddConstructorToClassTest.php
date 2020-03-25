<?php
class Animal
{
    private $type = "Dog";
    private $age;

    public function __construct($type, $age)
    {
        $this->type = $type;
        if ($this->isValid($age)) {
            $this->age = $age;
        }
    }
    
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
$pet = new Animal("Cat", 3);
$pet->display();
?>