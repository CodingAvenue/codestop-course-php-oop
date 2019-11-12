<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat() 
        {
            echo "This is an eat method.";
        }
    }

    $pObject = new Person();
    echo $pObject->eat();
?>
