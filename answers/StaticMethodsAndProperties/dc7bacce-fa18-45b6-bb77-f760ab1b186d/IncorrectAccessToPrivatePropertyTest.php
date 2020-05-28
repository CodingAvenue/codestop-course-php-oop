<?php
class Person
{
    public static $name = "Anna";
    
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person::greeting("Hello");
?>