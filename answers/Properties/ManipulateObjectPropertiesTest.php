<?php
    class Animal 
    {
        public $type = "Dog";
        public $breed;
        
        public function move()
        {
            echo "Animals move from one place to another.";
        }
    }

    $pet = new Animal();
    $pet->breed = "Chihuahua";
    echo $pet->breed;
?>
