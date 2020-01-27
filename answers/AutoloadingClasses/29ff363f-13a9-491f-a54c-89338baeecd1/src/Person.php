<?php
abstract class Person
{
    protected $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>