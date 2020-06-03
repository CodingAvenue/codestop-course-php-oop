### Facts for Polymorphism lesson:

`Polymorphism` is one of the basic Object-Oriented Programming principles that allows classes with different functionalities to implement a common interface. 

In polymorphism, a method can have different implementations and behaviors for different instances.

The basic principle of polymorphism in PHP takes place through `method overriding`.

Code:

```php
<?php
interface MyShape
{
    public function calculateArea();
}

class Circle implements MyShape
{
    const PI = 3.14159;
    private $radius;
	
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
	
    public function calculateArea()
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
        return self::PI * $this->radius * $this->radius;
    }
}

class Square implements MyShape
{
    private $side;
	
    public function __construct($side)
    {
        $this->side = $side;
    }
	
    public function calculateArea()
    {
        //The formula to calculate the area of a square is: (s^2)
        return $this->side * $this->side;
    }
}

$circle = new Circle(2.5);
$square = new Square(3.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```

Output:
```
Circle area: 19.6349375 
Square area: 12.25
```

In the above example, the code breaks down as follows:

 - `interface MyShape {...}` declares the `MyShape` interface with the abstract method `calculateArea()`.

 - `class Circle implements MyShape {...}` declares the `Circle` class that implements the `MyShape` interface and provides implementation to the `calculateArea()` method of the `MyShape` interface.

 - `class Square implements MyShape {...}` declares the `Square` class that also implements the `MyShape` interface and provides different implementation to the `calculateArea()` method of the `MyShape` interface.

 - Polymorphism takes place in the method calls `$circle->calculateArea()` and `$square->calculateArea()` that behaves differently according to the specified instance.

 - The `calculateArea()` method performs different tasks based on the specified instance of a class that implements it.
