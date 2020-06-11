<?php
    class Animal 
    {
        public $type = "Dog";
        
        public function move()
        {
            echo "Animals move from one place to another.";
        }
    }
    
    $pet = new Animal();
    $pet->move();
?>
