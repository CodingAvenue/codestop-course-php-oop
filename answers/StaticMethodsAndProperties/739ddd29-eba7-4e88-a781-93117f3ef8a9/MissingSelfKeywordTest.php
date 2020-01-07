<?php
class Person
{
    public static $name = "Anna";
    private $age;

    public function __construct($name, $age)
    {
        self::$name = $name;
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

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }

    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject->display();
?>