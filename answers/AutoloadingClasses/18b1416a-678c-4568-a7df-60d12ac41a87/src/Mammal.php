<?php
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
        echo "The " . $this->getType() . " is an " . $this->stage() . " " . $this->species() . ".";
    }
}
?>