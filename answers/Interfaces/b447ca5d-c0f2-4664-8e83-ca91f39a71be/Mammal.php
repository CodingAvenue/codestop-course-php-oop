<?php
require_once(__DIR__ . '/Animal.php');
require_once(__DIR__ . '/LifeCycle.php');

class Mammal extends Animal implements LifeCycle
{
    public function species()
    {
        return "animal";
    }

    public function stage()
    {
        return "adult";
    }

    public function display()
    {
        echo "The " . parent::getType() . " is an " . $this->stage() . " " . $this->species() . ".";  
    }
}

$petMammal = new Mammal("Cat", 3);
$petMammal->display();
?>