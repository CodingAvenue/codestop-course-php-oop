<?php
abstract class Animal
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

    private function isValid($value)
    {
        if ($value > 0) {
            return true;
        }
        return false;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getAge()
    {
        return $this->age;
    }

    abstract public function display();
}
?>