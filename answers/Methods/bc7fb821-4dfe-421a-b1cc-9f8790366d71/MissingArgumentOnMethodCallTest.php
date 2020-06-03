<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    
    $person = new Person();
    $person->changeName("Charles");
    echo $person->name;
?>
