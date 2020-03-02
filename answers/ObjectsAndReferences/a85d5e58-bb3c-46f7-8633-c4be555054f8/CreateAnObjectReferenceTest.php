<?php
class Animal
{
    public function display()
    {
        echo "This is an animal class.\n";
    }
}

class Mammal
{
    public function display()
    {
        echo "This is a mammal class.\n";
    }
}

$animalA = new Animal();
$animalB = $animalA;
$animalB->display();
$animalC = &$animalA;
$animalC->display();
$animalA = new Mammal();
$animalC->display();
?>