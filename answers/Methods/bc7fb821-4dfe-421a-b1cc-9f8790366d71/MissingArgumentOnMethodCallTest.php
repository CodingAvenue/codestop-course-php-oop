<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    
    $personObject = new Person();
    $personObject->changeName("Charles");
    echo $personObject->name;
?>
