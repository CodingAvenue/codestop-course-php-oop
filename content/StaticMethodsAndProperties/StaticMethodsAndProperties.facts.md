### Facts for Static Methods and Properties lesson:

Static method and property are special types of methods and properties that can be called without creating an object as an instance of a class.

The `static` keyword is used to define a static method and property.

To declare a static method, add the `static` keyword after the visibility keyword followed by the `function` keyword; the method name; a pair of parentheses `()` which may contain the parameters; and a method body enclosed in curly braces `{}`.

```php
public static function myStaticMethod() { }
```

To declare a static property, add the `static` keyword after the visibility keyword like `public` followed by the property name.

```php
public static myStaticProps;
```

A class name with the scope resolution operator `::` is used to access static methods and properties with `public` visibility outside a class.

```php
MyClass::myStaticProps;
MyClass::myStaticMethod();
```

The `self` keyword with the scope resolution operator `::` is used to access static methods and properties within a class itself.

The `$this` pseudo-variable is not allowed to use inside a static method.

The object operator `->` cannot be used to access static properties.

Code:

```php
<?php
class MyClass 
{
    public static $myStaticProp;

    public static function myStaticMethod()
    {
        echo "This is a static method." . self::$myStaticProp;
    }
}

MyClass::$myStaticProp = "This is a static property.";
MyClass::myStaticMethod();
?>
```

Output:

```
This is a static method.This is a static property.
```

In the above example, the code breaks down as follows:

 - `public static $myStaticProp;` defines the static property `$myStaticProp` of the `MyClass` class.

 - `public static function myStaticMethod() {...}` defines the static method `myStaticMethod()` of the `MyClass` class.

 - `self::$myStaticProp` accesses the static property `$myStaticProp` inside the `MyClass` class itself.

 - `MyClass::$myStaticProp = "This is a static property.";` accesses and initializes the static property `$myStaticProp` outside the `MyClass` class.

 - `MyClass::myStaticMethod();` accesses the static method `myStaticMethod()` outside the `MyClass` class.
 
