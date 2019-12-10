<?php
    class Person 
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }
    
    $personObject = new Person("John");
    echo $personObject->name;
?>