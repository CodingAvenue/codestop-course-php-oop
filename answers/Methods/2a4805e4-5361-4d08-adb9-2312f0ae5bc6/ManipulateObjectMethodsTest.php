<?php
    class Animal 
    {
        public $type = "Dog";

        public function changeType($newType)
        {
            $this->type = $newType;
        }
        
        public function display()
        {
            echo "The animal type is " . $this->type . ".";
        }
    }
    
    $pet = new Animal();
    $pet->changeType("Cat");
    $pet->display();
?>
