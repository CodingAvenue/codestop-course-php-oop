<?php
require_once("./MyShape.php");
class Rectangle implements MyShape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        //The formula to calculate the area of a rectangle is: (l*w)
        return $this->length * $this->width;   
    }

    public function getPerimeter()
    {
        //The formula to calculate the perimeter of a rectangle is: 2(l+w)
        return 2 * ($this->length + $this->width);
    }
}
?>
