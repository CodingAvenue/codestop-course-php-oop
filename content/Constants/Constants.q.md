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
/// type=SS, id=f96ac714-ddaf-42c1-974e-f33b906b2b53, answer=[5]

Execute the program. What is its output?

 - It prints `PI`.

 - It prints `3.1416`.

 - It prints `area()`.

 - It prints `$radius`.

 - It prints `The PI value is: 3.1416`.


/// type=SS, id=14686bf9-2bfd-4709-a3db-11fda14a9b30, answer=[2]

Which of the following is a class?

 - `PI`

 - `Circle`

 - `self::PI`

 - `Circle::PI`

 - `const PI = 3.1416;`


/// type=SS, id=464383b0-cd4e-4359-b630-e2e3d1f9efa8, answer=[2]

Which of the following is a static method?

 - `PI`

 - `area()`

 - `Circle`

 - `$radius`

 - `Circle::PI`


/// type=SS, id=818dd3b0-4115-4538-9242-cc620efcb480, answer=[3]

In the statement `const PI = 3.1416;` on line 4, what is `const`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a constant.

 - It is a property.


/// type=SS, id=8d0aac61-d768-41fb-954c-b53c962d706c, answer=[5]

In the statement `const PI = 3.1416;` on line 4, what is `PI`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a constant name.


/// type=SS, id=5a196297-1e0a-4161-b7e7-a22bcf122be0, answer=[2]

In the statement `const PI = 3.1416;` on line 4, what does the `const` keyword do?

 - It sets the `PI` class constant.

 - It defines the `PI` class constant.

 - It removes the `PI` class constant.

 - It displays the `PI` class constant.

 - It accesses the `PI` class constant.


/// type=SS, id=5690e9fb-1640-4571-a468-4e03ef111d0b, answer=[4]

Which statement best describes the code on line 4?

 - It sets the value of the `PI` property to `3.1416`.

 - It accesses the value of the `PI` constant in the `Circle` class.

 - It assigns the value `3.1416` to the `PI` property of the `Circle` class.

 - It defines the `PI` constant of the `Circle` class with the fixed value `3.1416`.

 - It defines the `PI` property of the `Circle` class with the default value `3.1416`.


/// type=SS, id=073608a9-1db3-4527-81b0-93764d9e4216, answer=[5]

On line 8, what does `self::PI` do?

 - It sets the `PI` constant in the `area()` method of the `Circle` class.

 - It defines the `PI` constant in the `area()` method of the `Circle` class.

 - It removes the `PI` constant in the `area()` method of the `Circle` class.

 - It displays the `PI` constant in the `area()` method of the `Circle` class.

 - It accesses the `PI` constant in the `area()` method of the `Circle` class.


/// type=SS, id=d11185bc-704f-48ef-a949-d7a7ce20e584, answer=[5]

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
/// type=SS, id=8ed42ff0-d506-4064-9339-e4c6ba71a8af, answer=[4]

Execute the program. What is its output?

 - It prints `The value of PI is: 3.1416`.

 - It prints `The area of the circle is 38.46`.

 - It prints `The radius of the circle is: 3.5`.

 - It prints `The area of the circle with 3.5 radius is: 38.4846`.

 - It prints `The area of the circle with 3.5 radius is: 38.4646`.


/// type=SS, id=2f0c84ad-6361-4628-8bc5-6cfe7e8e541e, answer=[1]

Which of the following is a constant?

 - `PI`

 - `area()`

 - `Circle`

 - `$radius`

 - `$circleObject`


/// type=MS, id=0de00d1a-d1cf-40a5-9aa1-17bf4b1708ef, answer=[1,4]

Which of the following are methods?

 - `area()`

 - `Circle`

 - `$radius`

 - `display()`

 - `$circleObject`


/// type=SS, id=1a04d97f-f05b-49bf-8c17-a237fbabc6ec, answer=[5]

Which of the following is an object?

 - `area()`

 - `Circle`

 - `$radius`

 - `display()`

 - `$circleObject`


/// type=SS, id=642b98ed-4448-4380-9536-e93e5183a1f2, answer=[3]

Which of the following is a constant definition?

 - `$this->area()`

 - `private $radius;`

 - `const PI = 3.1416;`

 - `class Circle {...}`

 - `$circleObject->display();`


/// type=SS, id=9060dbab-2548-459e-8b1e-054052aa182b, answer=[5]

Which statement best describes `self::PI` on line 19?

 - It sets the `PI` constant in the `area()` method of the `Circle` class.

 - It defines the `PI` constant in the `area()` method of the `Circle` class.

 - It removes the `PI` constant in the `area()` method of the `Circle` class.

 - It displays the `PI` constant in the `area()` method of the `Circle` class.

 - It accesses the `PI` constant in the `area()` method of the `Circle` class.


/// type=SS, id=0380f08e-6c1d-468c-8675-e83fd54dedbe, answer=[4]

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
/// type=SS, id=5972fd23-5812-4782-b8b4-5708b3bbe9c9, answer=[4]

Execute the program. What is printed on line 2?

 - `PI: 3.1416`

 - `Radius: 3.5`

 - `Area: 38.4846`

 - `Diameter: 12.25`

 - `Circumference: 21.9912`


/// type=MS, id=ebaf0b04-6a00-4745-b09b-366aa2a6d2c1, answer=[3,5]

Which of the following are keywords?

 - `PI`

 - `echo`

 - `self`

 - `$this`

 - `const`


/// type=SS, id=3d5be5ce-b5a0-445f-9c0a-ec6a6e45a209, answer=[5]

Which of the following is a parent class?

 - `Circle`

 - `Radius`

 - `diameter()`

 - `$circleObject`

 - `CircularShape`


/// type=SS, id=6a5ccd8f-c34c-42d3-a039-9089e988380a, answer=[1]

Which of the following is a child class?

 - `Circle`

 - `Radius`

 - `diameter()`

 - `$circleObject`

 - `CircularShape`


/// type=MS, id=3e24caf5-970d-496c-ab67-417118ec88ae, answer=[2,4,5]

Which of the following are abstract method definitions?

 - `public function display() {...}`

 - `abstract public function area();`

 - `public function getRadius() {...}`

 - `abstract public function diameter();`

 - `abstract public function circumference();`


/// type=SS, id=bfb72b00-f024-4abf-aab2-525864fd8934, answer=[4]

Which statement best describes `const PI = 3.1416;` on line 4 of `CircularShape.php`?

 - It sets the value of the `PI` property to `3.1416`.

 - It accesses the value of the `PI` constant in the `CircularShape` class.

 - It assigns the value `3.1416` to the `PI` property of the `CircularShape` class.

 - It defines the `PI` constant of the `CircularShape` class with the fixed value `3.1416`.

 - It defines the `PI` property of the `CircularShape` class with the default value `3.1416`.


/// type=SS, id=02aaef84-e848-425c-8b65-1bed415f31f7, answer=[5]

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

/// type=SS, id=282fab88-2b4e-4180-a271-2a6b44b91d0b, answer=[2]

Which statement best describes a constant?

 - It is a relationship between classes.

 - It is a piece of information that has a fixed value and does not change.

 - It is a method in a class that does not have a method body or implementation.

 - It is a program that only contains public methods that do not have a method body.

 - It is a way of hiding the details of implementation to reduce complexity and increase the efficiency of a program.


/// type=SS, id=90e1d20f-857b-4c6a-9fad-223e59aba1b8, answer=[3]

Which statement is true about the `const` keyword?

 - It defines a method.

 - It defines a variable.

 - It defines a constant.

 - It defines a child class.

 - It defines the visibility of a method.


/// type=MS, id=eafc534e-6916-446e-b33a-c91f639d3da0, answer=[2,3,4,5]

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
/// type=SS, id=e846afa4-8fad-4f2e-9e8c-f0f546d7cec8, answer=[3]

Execute the program. What is its output?

 - It prints `PI`.

 - It prints `3.1416`.

 - It produces an error.

 - No output is displayed.

 - It prints `The PI value is: 3.1416`.


/// type=SS, id=3d864be1-72d6-4f70-81a5-51b4fdb663ee, answer=[5]

What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4

 - Undefined property: `Circle::$PI` on line number 8

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, id=54ddf838-c0f6-46f4-94e5-cae11d6ff8bb, answer=[2,4,5]

Which statements correctly describe the error?

 - There is a `const` keyword between `public` and `PI` on line 4.

 - Visibility keywords are not allowed in the constant definition.

 - On line 4, the constant name `PI` does not start with a dollar sign `$`. 

 - On line 4, the constant definition `public const PI = 3.1416;` is invalid.

 - There is a `public` visibility keyword before `const` in `public const PI = 3.1416;` on line 4.

:::


/// type=CR, id=59e1a824-3583-4f47-bb67-a56cf2318b31, answer=[tests/Constants/IncorrectConstantDefinitionTest.php]

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
/// type=SS, id=83037694-9b2c-4114-8652-b5cfc6965cf9, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4

 - Undefined property: `Circle::$PI` on line number 8

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, id=72803a82-fd16-4906-a87b-787203a09abb, answer=[1,5]

Which statements correctly describe the error?

 - On line 4, the constant definition `const PI;` is invalid.

 - There is a semicolon `;` at the end of the statement on line 4.

 - There is no visibility keyword specified before `const` on line 4.

 - On line 4, the constant name `PI` does not start with a dollar sign `$`. 

 - There is no fixed value assigned to the `PI` constant definition on line 4.

:::


/// type=CR, id=ec85edf5-0bca-4875-8497-12e0f83c64ec, answer=[tests/Constants/UninitializeContantPiTest.php]

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
/// type=SS, id=25c1a788-0001-439b-8768-ca68d18aa499, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4

 - Undefined property: `Circle::$PI` on line number 19

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, id=5c258612-5b34-4264-b02b-9a42780bbfe0, answer=[3,4,5]

Which statements correctly describe the error?

 - On line 19, the constant name `PI` does not start with a dollar sign `$`. 

 - There is an asterisk `*` between `$this->PI` and `$this->PI` on line 19.

 - In the `return` statement on line 19, `self::PI` is replaced with `$this->PI`.

 - On line 19, the statement `return $this->PI * $this->radius * $this->radius;` is invalid.

 - The `$this` pseudo-variable and the object operator `->` are not allowed to access the `PI` constant in the `area()` method of the `Circle` class.

:::


/// type=CR, id=d7322e50-6b7d-4dcb-bd37-1f4649acacb7, answer=[tests/Constants/IncorrectConstantAccessInsideMethodTest.php]

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
/// type=SS, id=8ed96127-abea-4324-bf63-ee787604697e, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4 

 - Undefined property: `Circle::$PI` on line number 19

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, id=f2f6c961-a9c5-4e9e-b621-de9105bd075c, answer=[1,3,5]

Which statements correctly describe the error?

 - On line 4, the constant name `$PI` starts with a dollar sign `$`.

 - There is no visibility keyword specified before `const` on line 4.

 - On line 4, the constant definition `const $PI = 3.1416;` is invalid.

 - There is no fixed value assigned to the `PI` constant definition on line 4.

 - There is a dollar sign `$` at the beginning of the constant name `$PI` on line 4.

:::


/// type=CR, id=f2f05df3-4eac-42fc-83e8-f6ea08946875, answer=[tests/Constants/RemoveDollarSignOnConstantDeclarationTest.php]

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
/// type=SS, id=4bd02ba7-bb9b-4d43-8b26-0db2507f1b87, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'$PI'` on line number 4 

 - Undefined property: `Circle::$PI` on line number 19

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - syntax error, unexpected `'3.1416'` (T_DNUMBER), expecting `'='` on line number 4

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4


/// type=MS, id=5f514ff8-21cc-484b-a473-ec7a71f48e9c, answer=[1,4,5]

Which statements correctly describe the error?

 - Visibility keywords are not allowed in the constant definition.

 - There is a `const` keyword between `public` and `PI` on line 4 of `CircularShape.php`.

 - On line 4 of `CircularShape.php`, the constant name `PI` does not start with a dollar sign `$`. 

 - On line 4 of `CircularShape.php`, the constant definition `public const PI = 3.1416;` is invalid.

 - There is a `public` visibility keyword before `const` in `public const PI = 3.1416;` on line 4 of `CircularShape.php`.

:::


/// type=CR, id=a5ec0b5a-f620-4b62-9717-dc753d250737, answer=[tests/Constants/RemoveVisibilityKeywordOnConstantDeclarationTest.php], filename=[CircularShape.php,Circle.php]

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
/// type=SS, id=d0dc8896-7ab8-4d1d-aae5-085345d3d6ae, answer=[1]

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
/// type=SS, id=0fa896db-09f1-4b7a-bfd7-93f7a598034e, answer=[3]

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
/// type=SS, id=22ea162b-ef97-414b-a0de-6a55c5de3d2a, answer=[4]

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
/// type=SS, id=2387e091-fb86-4bae-a860-d79ea006445d, answer=[2]

On line 4 of `CircularShape.php`, replace the declaration `const PI = 3.1416;` with `const PI`. Execute the program. What is the error message?

 - Undefined property: `Circle::$PI` on line number 17

 - syntax error, unexpected `';'`, expecting `'='` on line number 4

 - Access level to `Circle::area()` must be public (as in class CircularShape) on line number 3

 - Abstract function `CircularShape::diameter()` cannot be declared private on line number 17

 - syntax error, unexpected `'const'` (T_CONST), expecting variable (T_VARIABLE) on line number 4

:::


/// type=CR, id=dc498fdc-1408-4274-99df-2fd16a341caf, answer=[tests/Constants/CorrectMultipleErrorsTest.php], filename=[CircularShape.php,Circle.php]

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

/// type=CR, id=316e9667-5913-442b-a51a-de213ae066fc, answer=[tests/Constants/AddConstantDefinitionInClassTest.php]

Write a program that uses a `const` keyword to define a class constant. First, use a `class` keyword to declare a class named `Cylinder`. Within the curly braces `{}`, add the following statements:
 
 1. A constant definition of a class constant `PI` with the fixed value `3.1416`. 
 
 2. Use the `private` visibility keyword to define class properties named `$radius` and `$height`. 
 
 3. A `__construct()` method with the parameters `$radius` and `$height`. Inside the `__construct()` method body, add a statement that assigns the values of `$radius` and `$height` to the `$radius` and `$height` properties of the `Cylinder` class respectively. 
 
 4. After the `__constuct()` method definition, Add a `public` method named `getRadius()`. Inside the `getRadius()` method, add a statement that returns the value of the `$radius` property.

 5. A `public` method named `getHeight()`. Inside the `getHeight()` method, add a statement that returns the value of the `$height` property.

 6. A `public` method named `area()`. Inside the `area()` method, add a statement that returns the area of a cylinder using the formula `2 * PI * radius * (radius + height)`.

 7. A `public` method named `volume()`. Inside the `volume()` method, add a statement that returns the volume of a cylinder using the formula `PI * radius * radius * height`.

 8. A `public` method named `display()`. Inside the `display()` method, add an `echo` statement to display the string `"Area: " . $this->area() . "\nVolume: " . $this->volume()`.
 
After the class declaration, add a statement that creates the `$cyObject` object an instance of the `Cylinder` class passing the arguments `1.5` and `3`. Then, add another statement that calls the `display()` method of the `$cyObject` object. Run the program to view the output.

```php
<?php


?>
```

+++
