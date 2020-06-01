<?php
class Animal
{
    public static $type = "Dog";
    public static $age;

    public function __construct($type, $age)
    {
        self::$type = $type;
        if ($this->isValid($age)) {
            self::$age = $age;
        }
    }

    private function isValid($value)
    {
        if ($value > 0) {
            return true;
        }
        return false;
    }

    public static function display()
    {
        echo "The " . self::$type . " is " . self::$age . " years old.";
    }
}

$pet = new Animal("Cat", 3);
$pet->display();
?>