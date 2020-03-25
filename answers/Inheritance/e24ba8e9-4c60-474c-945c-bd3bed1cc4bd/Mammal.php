<?php
require_once(__DIR__ . "/Animal.php");

class Mammal extends Animal
{
    private $name;
    
    public function __construct($type, $age, $name)
    {
        parent::__construct($type, $age);
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    	
    public function display()
    {
        echo "The " . parent::getType() . " named " . $this->getName() . " is a " . parent::getAge() . "-year old mammal.";
    }
}

$petMammal = new Mammal("Cat", 3, "Catsie");
$petMammal->display();
?>