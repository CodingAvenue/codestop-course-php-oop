<?php
    class Person 
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }
    
    $person = new Person("John");
    echo $person->name;
?>