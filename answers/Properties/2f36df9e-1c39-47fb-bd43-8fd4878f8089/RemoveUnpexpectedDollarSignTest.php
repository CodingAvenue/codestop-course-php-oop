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
    
    $person = new Person();
    $person->address = "Canada";
    echo $person->address;
?>
