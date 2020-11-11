<?php
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }

    public function stage()
    {
        return "adolescent";
    }

    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}
?>