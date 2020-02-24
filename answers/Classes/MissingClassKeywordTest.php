<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass();
    echo $myObject->myProp;
?>
