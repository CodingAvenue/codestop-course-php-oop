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

$animal = new Animal();
$animalRef = $animal;
$animalRef->display();
$anotherAnimalRef = &$animal;
$anotherAnimalRef->display();
$animal = new Mammal();
$anotherAnimalRef->display();
?>