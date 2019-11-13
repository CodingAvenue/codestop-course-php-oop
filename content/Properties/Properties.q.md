# Properties

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    echo $personObject->address;
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `address`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=MS, answer=[1,5]

Why is there no output displayed?

 - On line 5, the `$address` property is not yet initialized. 

 - There is no semicolon `;` at the end of the statement on line 4.
 
 - On line 5, the property definition `public $address;` is invalid.

 - On line 13, the statement `echo $personObject->address;` is invalid.

 - There is no default value assigned to the `$address` property on line 5.


/// type=MS, answer=[1,4]

Which of the following are properties?

 - `$name`

 - `Diana`

 - `Person`

 - `$address`

 - `$personObject`


/// type=SS, answer=[4]

Which of the following is a visibility keyword?

 - `new`

 - `echo`

 - `class`

 - `public`

 - `function`


/// type=SS, answer=[2]

In the statement `public $name = "Diana";` on line 4, what does `public` do?

 - It displays the value of the `$name` property.

 - It specifies the visibility of the `$name` property.

 - It sets the value of the `$name` property to `Diana`.

 - It creates the `$name` property of the `Person` class.

 - It declares the `$name` property of the `Person` class.


/// type=MS, answer=[1,3]

Which of the following are property definitions?

 - `public $address;`

 - `class Person { }`

 - `public $name = "Diana";`

 - `echo $personObject->address;`

 - `$personObject = new Person();`


/// type=SS, answer=[5]

Which statement best describes the code on line 4?

 - It accesses the string `Diana` of the `$name` property.

 - It displays the string `Diana` of the `$name` property.

 - It removes the string `Diana` from the `$name` property.

 - It replaces the value of the `$name` property with the string `Diana`.

 - It declares and initializes the `$name` property of the `Person` class.


/// type=SS, answer=[3]

Which statement best describes the code on line 5?

 - It calls the `$address` property of the `Person` class.

 - It displays the `$address` property of the `Person` class.

 - It declares the `$address` property of the `Person` class.

 - It accesses the `$address` property of the `Person` class.

 - It declares and initializes the `$address` property of the `Person` class.


/// type=SS, answer=[5]

On line 12, what does the statement `$personObject = new Person();` do?

 - It sets the value of `$personObject` to `Person`.

 - It replaces the value of `$personObject` with `Person`.

 - It accesses the value of `Person` through `$personObject`.

 - It assigns the value of the `Person` class to `$personObject`.

 - It creates the `$personObject` object as an instance of the `Person` class.


/// type=SS, answer=[5]

In the statement `echo $personObject->address;` on line 13, what does `$personObject->address` do?

 - It sets the value of the `address` property of `$personObject`.

 - It returns the value of the `address` property of `$personObject`.

 - It removes the value of the `address` property of `$personObject`.

 - It displays the value of the `address` property of `$personObject`.

 - It accesses the value of the `address` property of `$personObject`.

:::


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->address = "Canada";
    echo $personObject->address;
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `address`.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, answer=[5]

Which of the following is an object?

 - `$name`

 - `Diana`

 - `Person`

 - `$address`

 - `$personObject`


/// type=SS, answer=[3]

Which of the following is a class?

 - `$name`

 - `Diana`

 - `Person`

 - `$address`

 - `$personObject`


/// type=MS, answer=[1,3,4,5]

Which of the following are keywords?

 - `new`

 - `Diana`

 - `class`

 - `public`

 - `function`


/// type=SS, answer=[5]

Which of the following is an object instantiation?

 - `public $address;`

 - `class Person { }`

 - `public $name = "Diana";`

 - `echo $personObject->address;`

 - `$personObject = new Person();`


/// type=SS, answer=[1]

In the statement `$personObject->address = "Canada";` on line 13, what is `Canada`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[5]

In the statement `$personObject->address = "Canada";` on line 13, what does the object operator `->` do?

 - It sets the `address` property of `$personObject`.

 - It creates the `address` property of `$personObject`.

 - It defines the `address` property of `$personObject`.

 - It declares the `address` property of `$personObject`.

 - It accesses the `address` property of `$personObject`.


/// type=SS, answer=[1]

On line 13, what does the statement `$personObject->address = "Canada";` do?

 - It assigns the string `Canada` to the `address` property of `$personObject`.

 - It returns the string `Canada` of the `address` property of `$personObject`.

 - It creates the string `Canada` of the `address` property of `$personObject`.

 - It displays the string `Canada` of the `address` property of `$personObject`.

 - It replaces the string `Canada` of the `address` property with `$personObject`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->address = "Canada";
    echo $personObject->address;
?>
```
/// type=SS, answer=[2]

On line 5, replace the property definition `public $address;` with `public $address = "California";`. Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `California`.

 - No output is displayed.

 - It prints `This is an eat() method.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address = "California";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->address = "Canada";
    echo $personObject->address;
?>
```
/// type=SS, answer=[3]

Remove the statement `$personObject->address = "Canada";` on line 13. Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `California`.

 - No output is displayed.

 - It prints `This is an eat() method.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address = "California";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    echo $personObject->address;
?>
```
/// type=SS, answer=[1]

In the statement `echo $personObject->address;` on line 13, replace `address` with `name`. Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `California`.

 - No output is displayed.

 - It prints `This is an eat() method.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address = "California";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    echo $personObject->name;
?>
```
/// type=SS, answer=[5]

On line 13, replace the statement `echo $personObject->name;` with `$personObject->eat();`. Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `California`.

 - No output is displayed.

 - It prints `This is an eat() method.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[3,5]

Which statements correctly describe a property?

 - It is the value of a class.

 - It is an instance of a class.

 - It is a variable defined inside a class.

 - It is a function inside a class that performs a specific action. 

 - It is commonly referred to as an attribute or member of a class.


/// type=MS, answer=[1,3,5]

Which statements are true about a property definition and initialization?

 - A property definition can be initialized.

 - It creates a new object as an instance of a class.

 - Defining a class property requires a visibility keyword before the name of the property.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.

 - A class property initialization should be a constant value that can be evaluated at compile time. 


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    echo $personObject->name;
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `address`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, answer=[5]

What is the error message?

 - syntax error, unexpected `'This'` (T_STRING), expecting `','` or `';'` on line number 9

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 5

 - syntax error, unexpected `'name'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'address'` (T_STRING), expecting variable (T_VARIABLE) on line number 5

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4


/// type=SS, answer=[2]

Which statement best describes the error?

 - There is a dollar sign `$` in the `name` property on line 13.

 - There is no `public` visibility keyword before `$name` on line 4.

 - There is no `public` visibility keyword before `$address` on line 5.

 - There is no assignment operator `=` between `$name` and `Diana` on line 4.

 - There is no object operator `->` between `$personObject` and `name` on line 13.

:::


/// type=CR, answer=[tests/Properties/MissingPublicKeywordTest.php]

Correct the code so that it outputs the string `Diana`.

```php
<?php
    class Person 
    {
        $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    echo $personObject->name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name  "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    echo $personObject->name;
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 5

 - syntax error, unexpected `'name'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'address'` (T_STRING), expecting variable (T_VARIABLE) on line number 5

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - syntax error, unexpected `'"Diana"'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, answer=[4]

Which statement best describes the error?

 - There is a dollar sign `$` in the `name` property on line 13.

 - There is no `public` visibility keyword before `$name` on line 4.

 - There is no `public` visibility keyword before `$address` on line 5.

 - There is no assignment operator `=` between `$name` and `Diana` on line 4.

 - There is no object operator `->` between `$personObject` and `name` on line 13.

:::


/// type=CR, answer=[tests/Properties/MissingAssignmentOperatorTest.php]

Correct the code so that it outputs the string `Diana`.

```php
<?php
    class Person 
    {
        public $name  "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    echo $personObject->name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->$address = "Canada";
    echo $personObject->address;
?>
```
/// type=MS, answer=[1,2]

Execute the program. What are the error messages?

 - Uncaught Error: Cannot access empty property

 - Undefined variable: `address` on line number 13

 - syntax error, unexpected `'='` on line number 13

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'"Canada"'` (T_CONSTANT_ENCAPSED_STRING) on line number 13


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - There is a dollar sign `$` in the `address` property on line 13.

 - There is no semicolon `;` at the end of the statement on line 13

 - On line 13, the statement `$personObject->$address = "Canada";` is invalid.

 - There is no object operator `->` between `$personObject` and `$address` on line 13.

 - There is no assignment operator `=` between `$address` and `Canada` on line 13.

:::


/// type=CR, answer=[tests/Properties/RemoveUnpexpectedDollarSignTest.php]

Correct the code so that it outputs the string `Canada`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->$address = "Canada";
    echo $personObject->address;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    personObject->address = "Canada";
    echo $personObject->address;
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Uncaught Error: Cannot access empty property

 - Undefined variable: `address` on line number 13

 - syntax error, unexpected `'='` on line number 13

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'"Canada"'` (T_CONSTANT_ENCAPSED_STRING) on line number 13


/// type=MS, answer=[2,3]

Which statements correctly describe the error?

 - There is a dollar sign `$` in the `address` property on line 13.

 - On line 13, the `personObject` object does not start with a dollar sign `$`.

 - On line 13, the statement `personObject->address = "Canada";` is invalid.

 - There is no assignment operator `=` between `$address` and `Canada` on line 13.

 - There is no object operator `->` between `$personObject` and `$address` on line 13.

:::


/// type=CR, answer=[tests/Properties/MissingDollarSignOnObjectTest.php]

Correct the code so that it outputs the string `Canada`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    personObject->address = "Canada";
    echo $personObject->address;
?>
```


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->address = "Canada";
    echo $personObject->address;
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `address`.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, answer=[3]

Remove the object operator `->` between `$personObject` and `address` on line 14. Execute the program. What is the error message?

 - Uncaught Error: Cannot access empty property

 - Undefined variable: `address` on line number 14

 - Undefined variable: `personObjectaddress` on line number 14

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 14

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 14

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->address = "Canada";
    echo $personObjectaddress;
?>
```
/// type=SS, answer=[5]

On line 13, remove the assignment operator `=` between `$personObject->address` and `"Canada"`. Execute the program. What is the error message?

 - Undefined variable: `address` on line number 13

 - syntax error, unexpected `'"'` on line number 13

 - syntax error, unexpected `'='` on line number 13

 - syntax error, unexpected `'$personObject'` (T_VARIABLE) on line number 13

 - syntax error, unexpected `'"Canada"'` (T_CONSTANT_ENCAPSED_STRING) on line number 13

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    $personObject->address  "Canada";
    echo $personObjectaddress;
?>
```
/// type=SS, answer=[2]

Remove the dollar sign `$` from `$personObject` on line 13. Execute the program. What is the error message?

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 14

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'$personObject'` (T_VARIABLE) on line number 13

 - syntax error, unexpected `'"Canada"'` (T_CONSTANT_ENCAPSED_STRING) on line number 13

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject = new Person();
    personObject->address  "Canada";
    echo $personObjectaddress;
?>
```
/// type=SS, answer=[2]

Remove the `new` keyword before `Person()` on line 12. Execute the program. What is the error message?

 - syntax error, unexpected `'Person()'` (T_VARIABLE) on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'$personObject'` (T_VARIABLE) on line number 13

 - syntax error, unexpected `'"Canada"'` (T_CONSTANT_ENCAPSED_STRING) on line number 13

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public $address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject =  Person();
    personObject->address  "Canada";
    echo $personObjectaddress;
?>
```
/// type=SS, answer=[3]

Remove the dollar sign `$` from `$address` on line 5. Execute the program. What is the error message?

 - syntax error, unexpected `'"'`, expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 5

 - syntax error, unexpected `'address'` (T_STRING), expecting variable (T_VARIABLE) on line number 5

 - syntax error, unexpected `'$address'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

 - syntax error, unexpected `'"Diana"'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4

:::


/// type=CR, answer=[tests/Properties/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `Canada`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        public address;
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }
    $personObject =  Person();
    personObject->address  "Canada";
    echo $personObjectaddress;
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Properties/ManipulateObjectPropertiesTest.php]

Write a program that manipulates the properties of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:
 
 1. A property definition of a class property `$type` with the value `Dog`. 
 
 2. Another property definition of a class property named `$breed`. 
 
 3. A method definition for `move()` method. Inside the `move()` method body, add an `echo` statement to display the string `Animals move from one place to another.`.
 
After the class declaration, add the following:
 
 1. A statement that creates the `$pet` object an instance of an `Animal` class. 
 
 2. Another statement that assigns the value `Chihuahua` to the `$breed` property of the `$pet` object. 
 
 3. An `echo` statement to display the value of the `$breed` property of `$pet`. 
 
Run the program to view the output.

```php
<?php


?>
```

+++
