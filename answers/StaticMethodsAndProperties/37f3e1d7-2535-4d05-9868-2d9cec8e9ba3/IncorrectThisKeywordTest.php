<?php
class Person
{
    public static $name = "Anna";
    
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

echo Person::greeting("Hello");
?>