<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    
    $personObject = new Person();
    $personObject->address = "Canada";
    echo $personObject->address;
?>
