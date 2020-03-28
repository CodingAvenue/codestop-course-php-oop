<?php
require_once(__DIR__ . '/LifeCycle.php');
class Person implements LifeCycle
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

    public function species()
    {
        return "human";
    }

    public function stage()
    {
        return "adolescent";
    }

    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$person = new Person("Anna", 12);
$person->display();
?>