<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    
    $person = new Person();
    $person->name = "Charles";
    echo $person->name;
?>
