# Polymorphism

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=dd155c19-a77c-4333-8869-d268593e5661, answer=[5]

Execute the program. What is its output?

 - It prints `2.5`.

 - It prints `6.25`.

 - It prints `19.6349375`.

 - It prints `Circle area: 6.25` and `Square area: 6.25` in separate lines.

 - It prints `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.


/// type=MS, id=eb7a8b97-971b-414c-91ca-9503daa9a8ff, answer=[1,2]

Which of the following are classes?

 - `Circle`

 - `Square`

 - `$circle`

 - `$square`

 - `MyShape`


/// type=SS, id=479a1d68-dc7a-4899-a36c-b231d8660f6f, answer=[5]

Which of the following is an interface?

 - `Circle`

 - `Square`

 - `$circle`

 - `$square`

 - `MyShape`


/// type=MS, id=49133c37-7468-4eb1-bb3b-ed682387d74b, answer=[2,3]

Which of the following are method calls?

 - `private $radius;`

 - `$circle->calculateArea()`

 - `$square->calculateArea()`

 - `$square = new Square(2.5);`

 - `$circle = new Circle(2.5);`


/// type=SS, id=18f2b0f6-f1b8-4c75-8e38-1b5cfc910459, answer=[3]

Which of the following is an instance of the `Circle` class?

 - `Circle`

 - `Square`

 - `$circle`

 - `$square`

 - `MyShape`


/// type=SS, id=0ad1e4b4-7241-4646-b1cd-88dcf1a3ce66, answer=[4]

Which of the following is an instance of the `Square` class?

 - `Circle`

 - `Square`

 - `$circle`

 - `$square`

 - `MyShape`


/// type=SS, id=222f0f89-2939-48df-8dcf-5aeceb045abe, answer=[2]

On line 4 of `MyShape.php`, what does `public function calculateArea();` do?

 - It calls the abstract method named `calculateArea()`.

 - It declares the abstract method named `calculateArea()`.

 - It displays the abstract method named `calculateArea()`.

 - It removes the abstract method named `calculateArea()`.

 - It sets the value of the abstract method named `calculateArea()`.


/// type=MS, id=45d02641-a9a3-4dd4-b6a1-7fa62f9418d1, answer=[1,4,5]

Which statements correctly describe the `calculateArea()` method of the `Circle` class?

 - It returns the area of a circle by multiplying `PI` by the square of `$radius`.

 - It accesses the implementation of the `calculateArea()` method in the `MyShape` interface.

 - It is a method definition that duplicates the `calculateArea()` method in the `MyShape` interface.

 - It provides the implementation of the `calculateArea()` abstract method in the `MyShape` interface.

 - It is a method definition that changes the behavior of the `calculateArea()` method in the `MyShape` interface.


/// type=MS, id=61ac8622-fecd-4244-ba7b-63ecd7e6f347, answer=[1,4,5]

Which statements correctly describe the `calculateArea()` method of the `Square` class?

 - It returns the area of a square by multiplying `$side` by itself.

 - It accesses the implementation of the `calculateArea()` method in the `MyShape` interface.

 - It is a method definition that duplicates the `calculateArea()` method in the `MyShape` interface.

 - It provides the implementation of the `calculateArea()` abstract method in the `MyShape` interface.

 - It is a method definition that changes the behavior of the `calculateArea()` method in the `MyShape` interface.


/// type=SS, id=13c8c921-c757-461f-ae21-74d3f044fe4a, answer=[4]

What value is returned by the method call `$circle->calculateArea()` on line 8 of `Main.php`?

 - `2.5`

 - `6.25`

 - `12.25`

 - `19.6349375`

 - `38.4844775`


/// type=SS, id=afbc77b1-08f2-48b6-8308-430802945e60, answer=[2]

What value is returned by the method call `$square->calculateArea()` on line 9 of `Main.php`?

 - `3.5`

 - `6.25`

 - `12.25`

 - `19.6349375`

 - `38.4844775`


/// type=MS, id=077f698e-78b8-40d8-89fc-8e169f186412, answer=[2,5]

Why does the `calculateArea()` method behave differently in the `$circle->calculateArea()` and `$square->calculateArea()` method calls?

 - The `calculateArea()` method does not have a method body.

 - The `calculateArea()` method has different implementations in the `Circle` and `Square` classes.

 - The `Circle` class does not provide implementation to the `calculateArea()` method of the `MyShape` interface.

 - The `Square` class does not provide implementation to the `calculateArea()` method of the `MyShape` interface.

 - The `Circle` and `Square` classes implement the `calculateArea()` method differently according to their specific behavior.

:::


:::

/// type=REPL, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=fa1d4348-0429-46df-9a42-5c21bf9eb1f8, answer=[4]

In the statement `$circle = new Circle(2.5);` on line 5 of `Main.php`, replace the value `2.5` with `3.5`. Execute the program. What is its output?

 - It prints `2.5`.

 - It prints `3.5`.

 - It prints `6.25`.

 - It prints `Circle area: 38.4844775` and `Square area: 6.25` in separate lines.

 - It prints `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.

:::


:::

/// type=REPL, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(3.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=c9b2fbeb-52aa-4608-a001-da04bef6bfc6, answer=[5]

What value is returned by the method call `$circle->calculateArea()` on line 8 of `Main.php`?

 - `3.5`

 - `6.25`

 - `12.25`

 - `19.6349375`

 - `38.4844775`


/// type=SS, id=f1d8ce9c-6e10-44e2-8286-c9016f231e82, answer=[2]

What value is returned by the method call `$square->calculateArea()` on line 9 of `Main.php`?

 - `3.5`

 - `6.25`

 - `12.25`

 - `19.6349375`

 - `38.4844775`

:::


:::

/// type=REPL, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(3.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=3ed798ab-cd36-490f-9844-a85117afc01f, answer=[5]

In the statement `$square = new Square(2.5);` on line 6 of `Main.php`, replace the value `2.5` with `3.5`. Execute the program. What is its output?

 - It prints `3.5`.

 - It prints `12.25`.

 - It prints `38.4844775`.

 - It prints `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.

 - It prints `Circle area: 38.4844775` and `Square area: 12.25` in separate lines.

:::


:::

/// type=REPL, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(3.5);
$square = new Square(3.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=75075ee1-2c92-4db4-81b8-ce642c970e00, answer=[5]

What value is returned by the method call `$circle->calculateArea()` on line 8 of `Main.php`?

 - `3.5`

 - `6.25`

 - `12.25`

 - `19.6349375`

 - `38.4844775`


/// type=SS, id=5c410402-8df1-47b9-8238-c244829dc0c1, answer=[3]

What value is returned by the method call `$square->calculateArea()` on line 9 of `Main.php`?

 - `3.5`

 - `6.25`

 - `12.25`

 - `19.6349375`

 - `38.4844775`

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=9ca01092-9693-49d0-9297-869db5abd9c4, answer=[3,5]

Which statements are true about polymorphism?

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It allows classes with different functionalities to implement a common interface.

 - It is a process of changing the behavior of a parent class method in a child class.

 - A method can have different implementations and behaviors for different instances.


/// type=MS, id=05d3fa3f-5658-4691-94d4-ae5cdc937850, answer=[1,4,5]

What are the advantages of polymorphism?

 - It makes the code reusable.

 - It improves code readability.

 - It removes unnecessary methods.

 - It makes applications more modular and extensible.

 - It reduces the coupling between different functionalities.


/// type=SS, id=e1ec4f01-dfc2-4643-ad34-9a10f488720b, answer=[5]

When does polymorphism take place?

 - An abstract method is defined in an interface.

 - A method is inherited by a child class from a parent class.

 - A child class can access the properties and methods of a parent class.

 - A method returns the same value when called by different class instances.

 - A method performs different tasks based on the specified instance of a class that implements it.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

class Square implements MyShape
{
    private $side;
	
    public function __construct($side)
    {
        $this->side = $side;
    }
	
    private function calculateArea()
    {
        //The formula to calculate the area of a square is: (s^2)
        return $this->side * $this->side;
    }
}
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=cff2e36d-e2f3-453c-ad94-c66eeccf6560, answer=[3]

Execute the program. What is its output?

 - It prints `2.5`.

 - It prints `6.25`.

 - It produces an error.

 - No output is displayed.

 - It prints `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.


/// type=SS, id=06843364-37e3-4a21-a5bb-678c295e94e6, answer=[3]

What is the error message?

 - Undefined variable: `radius` in `Circle.php` on line number 11

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` in `Square.php` on line number 4

 - Access level to `Square::calculateArea()` must be public (as in class MyShape) in `Square.php` on line number 4

 - Missing argument `1` for `Circle::__construct()`, called in `Main.php` on line 5 and defined in `Circle.php` on line number 9

 - Class `Circle` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (MyShape::calculateArea) in `Circle.php` on line number 4


/// type=MS, id=2b290151-09db-424e-9d6b-93ff5558ba6a, answer=[3,4,5]

Which statements correctly describe the error?

 - There are no parentheses `()` after `calculateArea` on line 13 of `Square.php`.

 - There is no open curly brace `{` after `calculateArea()` on line 13 of `Square.php`.

 - On line 13 of `Square.php`, the `private` visibility keyword in the method definition is not allowed.

 - On line 13 of `Square.php`, the method definition `private function calculateArea()` is invalid. 

 - Implementing the `calculateArea()` method of the `MyShape` interface using the `private` visibility keyword is not allowed.

:::


/// type=CR, id=f739a867-c330-4a14-a82c-49f6635352dc, answer=[tests/Polymorphism/IncorrectCalculateAreaVisibilityTest.php], filename=[MyShape.php,Circle.php,Square.php,Main.php]

Correct the code so that it outputs the strings `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

class Square implements MyShape
{
    private $side;
	
    public function __construct($side)
    {
        $this->side = $side;
    }
	
    private function calculateArea()
    {
        //The formula to calculate the area of a square is: (s^2)
        return $this->side * $this->side;
    }
}
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```


:::

/// type=REPL, readonly=true, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

class Circle implements MyShape
{
    const PI = 3.14159;
    private $radius;
	
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=09393d6d-9c59-4ac5-9c8f-51f0e6baf841, answer=[5]

Execute the program. What is the error message?

 - Undefined variable: `radius` in `Circle.php` on line number 11

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` in `Square.php` on line number 4

 - Access level to `Square::calculateArea()` must be public (as in class MyShape) in `Square.php` on line number 4

 - Missing argument `1` for `Circle::__construct()`, called in `Main.php` on line 5 and defined in `Circle.php` on line number 9

 - Class `Circle` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (MyShape::calculateArea) in `Circle.php` on line number 4


/// type=MS, id=09c97d20-c355-4755-a0c8-9bbf880f72bf, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no `class` keyword before `Circle` on line 4 of `Circle.php`.

 - There is no `implements` keyword before `MyShape` on line 4 of `Circle.php`.

 - There is no `calculateArea()` method implementation in the `Circle` class.

 - The `calculateArea()` method of the `MyShape` interface is not implemented in the `Circle` class.

 - The `Circle` class is required to provide an implementation of the `calculateArea()` method in the `MyShape` interface.

:::


/// type=CR, id=19355764-acd2-42d0-870e-7c0b49059d3a, answer=[tests/Polymorphism/UnimplementedCalculateAreaMethodTest.php], filename=[MyShape.php,Circle.php,Square.php,Main.php]

Correct the code so that it outputs the strings `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

class Circle implements MyShape
{
    const PI = 3.14159;
    private $radius;
	
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```


:::

/// type=REPL, readonly=true, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle();
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=MS, id=84c82a9b-2881-462f-9fde-4cbc50c08cfe, answer=[1,4]

Execute the program. What are the error messages?

 - Undefined variable: `radius` in `Circle.php` on line number 11

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` in `Square.php` on line number 4

 - Access level to `Square::calculateArea()` must be public (as in class MyShape) in `Square.php` on line number 4

 - Missing argument `1` for `Circle::__construct()`, called in `Main.php` on line 5 and defined in `Circle.php` on line number 9

 - Class `Circle` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (MyShape::calculateArea) in `Circle.php` on line number 4


/// type=MS, id=7a966b50-1372-47c9-a7c8-98df91cc95d7, answer=[2,5]

Which statements correctly describe the error message?

 - There are no parentheses `()` after `Circle` on line 5 of `Main.php`.

 - There is no argument specified in `Circle()` on line 5 of `Main.php`.

 - There is no semicolon `;` at the end of the statement on line 5 of `Main.php`.

 - There is no `new` keyword specified before `Circle()` on line 5 of `Main.php`.

 - On line 5 of `Main.php`, the statement `$circle = new Circle();` is invalid.

:::


/// type=CR, id=cdb41f32-a1ed-4770-9cf3-291468ce8747, answer=[tests/Polymorphism/MissingArgumentOnObjectInstantiationTest.php], filename=[MyShape.php,Circle.php,Square.php,Main.php]

Correct the code so that it outputs the strings `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle();
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```


:::

/// type=REPL, readonly=true, filename=[MyShape.php,Circle.php,Square.php,Main.php]

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

class Square implement MyShape
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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```
/// type=SS, id=266706f7-ce40-4bd0-9853-a60c9985f3ab, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `radius` in `Circle.php` on line number 11

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` in `Square.php` on line number 4

 - Access level to `Square::calculateArea()` must be public (as in class MyShape) in `Square.php` on line number 4

 - Missing argument `1` for `Circle::__construct()`, called in `Main.php` on line 5 and defined in `Circle.php` on line number 9

 - Class `Circle` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (MyShape::calculateArea) in `Circle.php` on line number 4


/// type=MS, id=9ed58366-56d4-4e8e-a812-a5cf64fe76c0, answer=[3,4]

Which statements correctly describe the error?

 - There is no `class` keyword before `Square` on line 4 of `Square.php`.

 - There are no parentheses `()` after `MyShape` on line 4 of `Square.php`. 

 - On line 4 of `Square.php`, `class Square implement MyShape` is invalid.

 - On line 4 of `Square.php`, the `implements` keyword is misspelled as `implement`.

 - There is no open curly brace `{` after `class Square implement MyShape` on line 4 of `Square.php`.

:::


/// type=CR, id=39ff970a-5189-4364-b483-05895d51c7aa, answer=[tests/Polymorphism/MisspelledImplementsKeywordTest.php], filename=[MyShape.php,Circle.php,Square.php,Main.php]

Correct the code so that it outputs the strings `Circle area: 19.6349375` and `Square area: 6.25` in separate lines.

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
require_once("./MyShape.php");

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
?>
```

```php
<?php
require_once("./MyShape.php");

class Square implement MyShape
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
?>
```

```php
<?php
require_once("./Circle.php");
require_once("./Square.php");

$circle = new Circle(2.5);
$square = new Square(2.5);

echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=70c6f733-a10d-4802-82e8-d8218dc3553e, answer=[tests/Polymorphism/ApplyPolymorphismConceptTest.php], filename=[MyShape.php,Rectangle.php,Square.php,Main.php]

Given the initial implementations of `Rectangle` and `Square` classes, provide implementations to the specified abstract methods of the `MyShape` interface. In the `Rectangle.php` tab, add an implementation or method body to all abstract methods of the `MyShape` interface. In the `calculateArea()` method body, add a statement that returns the product of `$length` and `$width`. Inside the `getPerimeter()` method body, add the statement `return 2 * ($this->length + $this->width);`. In the `Square.php` tab, add an implementation or method body to the abstract method `getPerimeter()` of the `MyShape` interface. Inside the `getPerimeter()` method body, add a statement that returns the product of `4` and `$side`. Run the program to view the output.

```php
<?php
interface MyShape
{
    public function calculateArea();
    public function getPerimeter();
}
?>
```

```php
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
        
    }

    public function getPerimeter()
    {
        //The formula to calculate the perimeter of a rectangle is: 2(l+w)

    }
}
?>
```

```php
<?php
require_once("./MyShape.php");

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

    public function getPerimeter()
    {
        //The formula to calculate the perimeter of a square is: (4*s)

    }
}
?>
```

```php
<?php
require_once("./Rectangle.php");
require_once("./Square.php");

$rectangle = new Rectangle(2.5, 3);
$square = new Square(2.5);

echo "Rectangle area: " . $rectangle->calculateArea();
echo "\nRectangle perimeter: " . $rectangle->getPerimeter();
echo "\nSquare area: " . $square->calculateArea();
echo "\nSquare perimeter: " . $square->getPerimeter();
?>
```

+++
