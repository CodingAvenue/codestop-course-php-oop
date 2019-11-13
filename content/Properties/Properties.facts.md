### Facts for Properties lesson:

A property is a variable that is defined inside of a class. These variables are typically used to represent attributes of an object and/or its state.

To declare a property, use a visibility keyword like `public` followed by the property name.

```php
public $name;
```

The `public` keyword indicates the accessibility of a property in a class. Learn more about visibility keywords in the `visibility` lesson.

A property definition can be initialized. This initialization should be a constant value that can be evaluated at compile time. 

```php
public $name = "Anna";
```

The name of the property is case-sensitive. `$name` and `$Name` are treated as two distinct properties.

A property name should start with a letter or an underscore `_`, followed by any combination of alphanumeric characters and underscores (`A-Z`, `a-z`, `0-9`, `_`).

The example code below shows how to add the `$name` and `$age` properties to the `Person` class.

Code:

```php
<?php
    class Person 
    {
        public $name = "Anna";
        public $age;
    }
?>
```

The code breaks down as follows:

 - `public $name = "Anna";` is the definition of the `$name` property with the default value `Anna`.

 - `public $age;` is the definition of the `$age` property without a default value. 

 Properties like `$name` and `$age` are commonly known as attributes or members of a class.
