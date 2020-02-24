### Facts for Constants lesson:

A constant is a piece of information that has a fixed value and does not change.

A class constant is a constant defined within a class.

The `const` keyword defines a constant.

To declare a constant, use the `const` keyword followed by the constant name; an assignment operator `=`; a fixed value; and ends with a semicolon `;`. 

A constant name should not start with a dollar sign `$` and should be in all uppercase with an underscore `_` as a separator. The examples are `PI`, `MY_CONSTANT`, and `CONST_VALUE`.

A visibility keyword is not allowed in defining a class constant.

The `self` keyword with the scope resolution operator `::` accesses a constant within a class method.

A class name with the scope resolution operator `::` accesses a constant outside a class.

Code:

```php
<?php
class Circle {
    const PI = 3.1416;
    
    public static function area($radius)
    {
        return self::PI * $radius * $radius;
    }
}

echo "The area is: " . Circle::area(2.5);
?>
```

Output:
```
The area is: 19.635
```

In the above example, the code breaks down as follows:

 - `const PI = 3.1416;` defines the constant `PI` with the fixed value `3.1416` of the `Circle` class.

 - `public static function area($radius) {...}` defines the static method `area()` that accepts an argument.

 - `self::PI` accesses the constant `PI` inside the static method `area()` of the `Circle` class.

 - `Circle::area(2.5)` accesses the static method `area()` passing the argument `2.5` outside of the `Circle` class.
