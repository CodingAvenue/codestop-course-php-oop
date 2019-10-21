# Constants

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
class Circle
{
    const PI = 3.1416;
    
    public static function area($radius)
    {
        return self::PI * $radius * $radius;
    }
}

echo "The PI value is: " . Circle::PI;
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `PI`.

 - It prints `3.1416`.

 - It prints `area()`.

 - It prints `$radius`.

 - It prints `The PI value is: 3.1416`.


/// type=SS, answer=[2]

Which of the following is a class?

 - `PI`

 - `Circle`

 - `self::PI`

 - `Circle::PI`

 - `const PI = 3.1416;`


/// type=SS, answer=[2]

Which of the following is a static method?

 - `PI`

 - `area()`

 - `Circle`

 - `$radius`

 - `Circle::PI`


/// type=SS, answer=[3]

In the statement `const PI = 3.1416;` on line 4, what is `const`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a constant.

 - It is a property.


/// type=SS, answer=[5]

In the statement `const PI = 3.1416;` on line 4, what is `PI`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a constant name.


/// type=SS, answer=[2]

In the statement `const PI = 3.1416;` on line 4, what does the `const` keyword do?

 - It sets the `PI` class constant.

 - It defines the `PI` class constant.

 - It removes the `PI` class constant.

 - It displays the `PI` class constant.

 - It accesses the `PI` class constant.


/// type=SS, answer=[4]

Which statement best describes the code on line 4?

 - It sets the value of the `PI` property to `3.1416`.

 - It accesses the value of the `PI` constant in the `Circle` class.

 - It assigns the value `3.1416` to the `PI` property of the `Circle` class.

 - It defines the `PI` constant of the `Circle` class with the fixed value `3.1416`.

 - It defines the `PI` property of the `Circle` class with the default value `3.1416`.


/// type=SS, answer=[5]

On line 8, what does `self::PI` do?

 - It sets the `PI` constant in the `area()` method of the `Circle` class.

 - It defines the `PI` constant in the `area()` method of the `Circle` class.

 - It removes the `PI` constant in the `area()` method of the `Circle` class.

 - It displays the `PI` constant in the `area()` method of the `Circle` class.

 - It accesses the `PI` constant in the `area()` method of the `Circle` class.


/// type=SS, answer=[5]

On line 12, what does `Circle::PI` do?

 - It sets the `PI` constant outside the `Circle` class.

 - It defines the `PI` constant outside the `Circle` class.

 - It removes the `PI` constant outside the `Circle` class.

 - It displays the `PI` constant outside the `Circle` class.

 - It accesses the `PI` constant outside the `Circle` class.


:::


:::

/// type=REPL, readonly=true

```php
<?php
class Circle
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    public function area()
    {
        return self::PI * $this->radius * $this->radius;
    }
    
    public function display()
    {
        echo "The area of the circle with " . $this->radius . " radius is: " . $this->area();
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `The value of PI is: 3.1416`.

 - It prints `The area of the circle is 38.46`.

 - It prints `The radius of the circle is: 3.5`.

 - It prints `The area of the circle with 3.5 radius is: 38.4846`.

 - It prints `The area of the circle with 3.5 radius is: 38.4646`.


/// type=SS, answer=[1]

Which of the following is a constant?

 - `PI`

 - `area()`

 - `Circle`

 - `$radius`

 - `$circleObject`


/// type=MS, answer=[1,4]

Which of the following are methods?

 - `area()`

 - `Circle`

 - `$radius`

 - `display()`

 - `$circleObject`


/// type=SS, answer=[5]

Which of the following is an object?

 - `area()`

 - `Circle`

 - `$radius`

 - `display()`

 - `$circleObject`


/// type=SS, answer=[3]

Which of the following is a constant definition?

 - `$this->area()`

 - `private $radius;`

 - `const PI = 3.1416;`

 - `class Circle {...}`

 - `$circleObject->display();`


/// type=SS, answer=[5]

Which statement best describes `self::PI` on line 19?

 - It sets the `PI` constant in the `area()` method of the `Circle` class.

 - It defines the `PI` constant in the `area()` method of the `Circle` class.

 - It removes the `PI` constant in the `area()` method of the `Circle` class.

 - It displays the `PI` constant in the `area()` method of the `Circle` class.

 - It accesses the `PI` constant in the `area()` method of the `Circle` class.


/// type=SS, answer=[4]

Which statement best describes `const PI = 3.1416;` on line 4?

 - It sets the value of the `PI` property to `3.1416`.

 - It accesses the value of the `PI` constant in the `Circle` class.

 - It assigns the value `3.1416` to the `PI` property of the `Circle` class.

 - It defines the `PI` constant of the `Circle` class with the fixed value `3.1416`.

 - It defines the `PI` property of the `Circle` class with the default value `3.1416`.

:::


:::

/// type=REPL, readonly=true, filename=[CircularShape.php,Circle.php]

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[4]

Execute the program. What is printed on line 2?

 - `PI: 3.1416`

 - `Radius: 3.5`

 - `Area: 38.4846`

 - `Diameter: 12.25`

 - `Circumference: 21.9912`


/// type=MS, answer=[3,5]

Which of the following are keywords?

 - `PI`

 - `echo`

 - `self`

 - `$this`

 - `const`


/// type=SS, answer=[5]

Which of the following is a parent class?

 - `Circle`

 - `Radius`

 - `diameter()`

 - `$circleObject`

 - `CircularShape`


/// type=SS, answer=[1]

Which of the following is a child class?

 - `Circle`

 - `Radius`

 - `diameter()`

 - `$circleObject`

 - `CircularShape`


/// type=MS, answer=[2,4,5]

Which of the following are abstract method definitions?

 - `public function display() {...}`

 - `abstract public function area();`

 - `public function getRadius() {...}`

 - `abstract public function diameter();`

 - `abstract public function circumference();`


/// type=SS, answer=[4]

Which statement best describes `const PI = 3.1416;` on line 4 of `CircularShape.php`?

 - It sets the value of the `PI` property to `3.1416`.

 - It accesses the value of the `PI` constant in the `CircularShape` class.

 - It assigns the value `3.1416` to the `PI` property of the `CircularShape` class.

 - It defines the `PI` constant of the `CircularShape` class with the fixed value `3.1416`.

 - It defines the `PI` property of the `CircularShape` class with the default value `3.1416`.


/// type=SS, answer=[5]

Which statement best describes `self::PI` on line 7 of `Circle.php`?

 - It sets the `PI` constant in the `area()` method of the `Circle` class inherited from the `CircularShape` class.

 - It defines the `PI` constant in the `area()` method of the `Circle` class inherited from the `CircularShape` class.

 - It removes the `PI` constant in the `area()` method of the `Circle` class inherited from the `CircularShape` class.

 - It displays the `PI` constant in the `area()` method of the `Circle` class inherited from the `CircularShape` class.

 - It accesses the `PI` constant in the `area()` method of the `Circle` class inherited from the `CircularShape` class.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[2]

Which statement best describes a constant?

 - It is a relationship between classes.

 - It is a piece of information that has a fixed value and does not change.

 - It is a method in a class that does not have a method body or implementation.

 - It is a program that only contains public methods that do not have a method body.

 - It is a way of hiding the details of implementation to reduce complexity and increase the efficiency of a program.


/// type=SS, answer=[3]

Which statement is true about the `const` keyword?

 - It defines a method.

 - It defines a variable.

 - It defines a constant.

 - It defines a child class.

 - It defines the visibility of a method.


/// type=MS, answer=[2,3,4,5]

Which statements are true about a class constant?

 - It cannot be accessed outside a class.

 - It is defined within a class with a fixed value.

 - A constant name should not start with a dollar sign `$`.

 - A visibility keyword is not allowed in the constant definition.

 - It can be accessed outside a class using the class name and the scope resolution operator `::`.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
class Circle
{
    public const PI = 3.1416;
    
    public static function area($radius)
    {
        return self::PI * $radius * $radius;
    }
}

echo "The PI value is: " . Circle::PI;
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `PI`.

 - It prints `3.1416`.

 - It produces an error.

 - No output is displayed.

 - It prints `The PI value is: 3.1416`.


/// type=SS, answer=[5]

What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4

 - Undefined property: `Circle::$PI` on line number 8

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, answer=[2,4,5]

Which statements correctly describe the error?

 - There is a `const` keyword between `public` and `PI` on line 4.

 - Visibility keywords are not allowed in the constant definition.

 - On line 4, the constant name `PI` does not start with a dollar sign `$`. 

 - On line 4, the constant definition `public const PI = 3.1416;` is invalid.

 - There is a `public` visibility keyword before `const` in `public const PI = 3.1416;` on line 4.

:::


/// type=CR, answer=[tests/Constants/IncorrectConstantDefinitionTest.php]

Correct the code so that it outputs the string `The PI value is: 3.1416`.

```php
<?php
class Circle
{
    public const PI = 3.1416;
    
    public static function area($radius)
    {
        return self::PI * $radius * $radius;
    }
}

echo "The PI value is: " . Circle::PI;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Circle
{
    const PI;
    
    public static function area($radius)
    {
        return self::PI * $radius * $radius;
    }
}

echo "The PI value is: " . Circle::PI;
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4

 - Undefined property: `Circle::$PI` on line number 8

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 4, the constant definition `const PI;` is invalid.

 - There is a semicolon `;` at the end of the statement on line 4.

 - There is no visibility keyword specified before `const` on line 4.

 - On line 4, the constant name `PI` does not start with a dollar sign `$`. 

 - There is no fixed value assigned to the `PI` constant definition on line 4.

:::


/// type=CR, answer=[tests/Constants/UninitializeContantPiTest.php]

Correct the code so that it outputs the string `The PI value is: 3.1416`.

```php
<?php
class Circle
{
    const PI;
    
    public static function area($radius)
    {
        return self::PI * $radius * $radius;
    }
}

echo "The PI value is: " . Circle::PI;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Circle
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    public function area()
    {
        return $this->PI * $this->radius * $this->radius;
    }
    
    public function display()
    {
        echo "The area of the circle with " . $this->radius . " radius is: " . $this->area();
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4

 - Undefined property: `Circle::$PI` on line number 19

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, answer=[3,4,5]

Which statements correctly describe the error?

 - On line 19, the constant name `PI` does not start with a dollar sign `$`. 

 - There is an asterisk `*` between `$this->PI` and `$this->PI` on line 19.

 - In the `return` statement on line 19, `self::PI` is replaced with `$this->PI`.

 - On line 19, the statement `return $this->PI * $this->radius * $this->radius;` is invalid.

 - The `$this` pseudo-variable and the object operator `->` are not allowed to access the `PI` constant in the `area()` method of the `Circle` class.

:::


/// type=CR, answer=[tests/Constants/IncorrectConstantAccessInsideMethodTest.php]

Correct the code so that it outputs the string `The area of the circle with 3.5 radius is: 38.4846`.

```php
<?php
class Circle
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    public function area()
    {
        return $this->PI * $this->radius * $this->radius;
    }
    
    public function display()
    {
        echo "The area of the circle with " . $this->radius . " radius is: " . $this->area();
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Circle
{
    const $PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    public function area()
    {
        return self::PI * $this->radius * $this->radius;
    }
    
    public function display()
    {
        echo "The area of the circle with " . $this->radius . " radius is: " . $this->area();
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4 

 - Undefined property: `Circle::$PI` on line number 19

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, answer=[1,3,5]

Which statements correctly describe the error?

 - On line 4, the constant name `$PI` starts with a dollar sign `$`.

 - There is no visibility keyword specified before `const` on line 4.

 - On line 4, the constant definition `const $PI = 3.1416;` is invalid.

 - There is no fixed value assigned to the `PI` constant definition on line 4.

 - There is a dollar sign `$` at the beginning of the constant name `$PI` on line 4.

:::


/// type=CR, answer=[tests/Constants/RemoveDollarSignOnConstantDeclarationTest.php]

Correct the code so that it outputs the string `The area of the circle with 3.5 radius is: 38.4846`.

```php
<?php
class Circle
{
    const $PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    public function area()
    {
        return self::PI * $this->radius * $this->radius;
    }
    
    public function display()
    {
        echo "The area of the circle with " . $this->radius . " radius is: " . $this->area();
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[CircularShape.php,Circle.php]

```php
<?php
abstract class CircularShape
{
    public const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4 

 - Undefined property: `Circle::$PI` on line number 19

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, answer=[1,4,5]

Which statements correctly describe the error?

 - Visibility keywords are not allowed in the constant definition.

 - There is a `const` keyword between `public` and `PI` on line 4 of `CircularShape.php`.

 - On line 4 of `CircularShape.php`, the constant name `PI` does not start with a dollar sign `$`. 

 - On line 4 of `CircularShape.php`, the constant definition `public const PI = 3.1416;` is invalid.

 - There is a `public` visibility keyword before `const` in `public const PI = 3.1416;` on line 4 of `CircularShape.php`.

:::


/// type=CR, answer=[tests/Constants/RemoveVisibilityKeywordOnConstantDeclarationTest.php], filename=[CircularShape.php,Circle.php]

Correct the code so that it outputs the strings `Radius: 3.5`, `Diameter: 12.25`, `Area: 38.4846`, and `Circumference: 21.9912` in separate lines.

```php
<?php
abstract class CircularShape
{
    public const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```


:::

/// type=REPL, filename=[CircularShape.php,Circle.php]

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[1]

In the statement `return 2 * self::PI * $this->getRadius();` on line 17 of `Circle.php`, replace `self::PI` with `$this->PI`. Execute the program. What is the error message?

 - Undefined property: `Circle::$PI` on line number 17

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - Access level to `Circle::area()` must be public (as in class CircularShape) on line number 3

 - Abstract function `CircularShape::diameter()` cannot be declared private on line number 17

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4

:::


:::

/// type=REPL, filename=[CircularShape.php,Circle.php]

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * $this->PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[3]

In the declaration `public function area()` on line 5 of `Circle.php`, replace `public` with `private`. Execute the program. What is the error message?

 - Undefined property: `Circle::$PI` on line number 17

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - Access level to `Circle::area()` must be public (as in class CircularShape) on line number 3

 - Abstract function `CircularShape::diameter()` cannot be declared private on line number 17

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4

:::


:::

/// type=REPL, filename=[CircularShape.php,Circle.php]

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    private function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * $this->PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[4]

In the declaration `abstract public function diameter();` on line 17 of `CircularShape.php`, replace `public` with `private`. Execute the program. What is the error message?

 - Undefined property: `Circle::$PI` on line number 17

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - Access level to `Circle::area()` must be public (as in class CircularShape) on line number 3

 - Abstract function `CircularShape::diameter()` cannot be declared private on line number 17

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4

:::


:::

/// type=REPL, filename=[CircularShape.php,Circle.php]

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract private function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    private function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * $this->PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```
/// type=SS, answer=[2]

On line 4 of `CircularShape.php`, replace the declaration `const PI = 3.1416;` with `const PI`. Execute the program. What is the error message?

 - Undefined property: `Circle::$PI` on line number 17

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - Access level to `Circle::area()` must be public (as in class CircularShape) on line number 3

 - Abstract function `CircularShape::diameter()` cannot be declared private on line number 17

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4

:::


/// type=CR, answer=[tests/Constants/CorrectMultipleErrorsTest.php], filename=[CircularShape.php,Circle.php]

Correct the code so that it outputs the strings `Radius: 3.5`, `Diameter: 12.25`, `Area: 38.4846`, and `Circumference: 21.9912` in separate lines.

```php
<?php
abstract class CircularShape
{
    const PI;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract private function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
require_once('./CircularShape.php');
class Circle extends CircularShape
{
    private function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * $this->PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}

$circleObject = new Circle(3.5);
$circleObject->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Constants/AddConstantDefinitionInClassTest.php]

Write a program that uses a `const` keyword to define a class constant. First, use a `class` keyword to declare a class named `Cylinder`. Within the curly braces `{}`, add a constant definition of a class constant `PI` with the fixed value `3.1416`. Use the `private` visibility keyword to define class properties named `$radius` and `$height`. Next, add a `__construct()` method with the parameters `$radius` and `$height`. Inside the `__construct()` method body, add a statement that assigns the values of `$radius` and `$height` to the `$radius` and `$height` properties of the `Cylinder` class respectively. After the `__constuct()` method definition, Add `public` methods `getRadius()`, `getHeight()`, `area()`, `volume()`, and `display()`. Inside the `getRadius()` method, add a statement that returns the value of the `$radius` property. Inside the `getHeight()` method, add a statement that returns the value of the `$height` property. Inside the `area()` method, add a statement that returns the area of a cylinder using the formula `2 * PI * radius * (radius + height)`. Inside the `volume()` method, add a statement that returns the volume of a cylinder using the formula `PI * radius * radius * height`. Inside the `display()` method, add an `echo` statement to display the string `"Area: " . $this->area() . "\nVolume: " . $this->volume()`. After the class declaration, add a statement that creates the `$cyObject` object an instance of the `Cylinder` class passing the arguments `1.5` and `3`. Then, add another statement that calls the `display()` method of the `$cyObject` object. Run the program to view the output.

```php
<?php


?>
```

+++
