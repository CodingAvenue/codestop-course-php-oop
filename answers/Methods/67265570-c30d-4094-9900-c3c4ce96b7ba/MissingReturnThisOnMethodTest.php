<?php
    class Person 
    {
        public $name = "Diana";
        public function changeName($newName)
        {
            $this->name = $newName;
            return $this;
        }
        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $person = new Person();
    $person->changeName("Charles")->display();
?>