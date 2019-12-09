<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    
    $personObject = new Person();
    $personObject->changeName("Charles");
    $personObject->display();
?>
