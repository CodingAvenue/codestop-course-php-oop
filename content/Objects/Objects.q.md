# Objects

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    echo $personObject->name;
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=MS, answer=[1,2,4,5]

Which of the following are keywords?

 - `new`

 - `class`

 - `Person`

 - `public`

 - `function`


/// type=SS, answer=[1]

On line 2, what does the `class` keyword do?

 - It creates the `Person` class.

 - It displays the `Person` class.

 - It accesses the `Person` class.

 - It defines the `Person` method.

 - It creates the `Person` property.


/// type=SS, answer=[4]

Which statement best describes the code on line 4?

 - It accesses the string `Diana` of the `$name` property.

 - It displays the string `Diana` of the `$name` property.

 - It removes the string `Diana` from the `$name` property.

 - It declares and initializes the `$name` property of `Person`.

 - It replaces the value of the `$name` property with the string `Diana`.


/// type=SS, answer=[1]

Which of the following is a class declaration?

 - `class Person { }`

 - `public $name = "Diana";`

 - `echo $personObject->name;`

 - `$personObject = new Person();`

 - `public function eat() { echo "This is an eat() method."; }`


/// type=SS, answer=[2]

Which of the following is a property definition?

 - `class Person { }`

 - `public $name = "Diana";`

 - `echo $personObject->name;`

 - `$personObject = new Person();`

 - `public function eat() { echo "This is an eat() method."; }`


/// type=SS, answer=[5]

Which of the following is a method definition?

 - `class Person { }`

 - `public $name = "Diana";`

 - `echo $personObject->name;`

 - `$personObject = new Person();`

 - `public function eat() { echo "This is an eat() method."; }`


/// type=MS, answer=[1,5]

In the statement `$personObject = new Person();` on line 12, what is `$personObject`?

 - It is an object.

 - It is a keyword.

 - It is a property.

 - It is a class name.

 - It is an instance of the `Person` class.


/// type=SS, answer=[5]

In the statement `$personObject = new Person();` on line 12, what does the `new` keyword do?

 - It assigns `Person()` to `$personObject`.

 - It sets the value of `$personObject` to `Person()`.

 - It defines the `$personObject` object in `Person()`.

 - It displays the `$personObject` object of the `Person` class.

 - It creates the `$personObject` object as an instance of the `Person` class.


/// type=MS, answer=[2,5]

Which statements correctly describe the code on line 12?

 - It assigns `Person()` to `$personObject`.

 - It creates an instance of the `Person` class.

 - It sets the value of `$personObject` to `Person()`.

 - It displays the `$personObject` object of the `Person` class.

 - It assigns the new instance of the `Person` class to `$personObject`.


/// type=SS, answer=[1]

In the statement `echo $personObject->name;` on line 13, what is `->`?

 - It is an object operator.

 - It is a less than operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a greater than operator.


/// type=SS, answer=[4]

In the statement `echo $personObject->name;` on line 13, what is `name`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[5]

In the statement `echo $personObject->name;` on line 13, what does `$personObject->name` do?

 - It sets the value of the `name` property of `$personObject`.

 - It returns the value of the `name` property of `$personObject`.

 - It removes the value of the `name` property of `$personObject`.

 - It displays the value of the `name` property of `$personObject`.

 - It accesses the value of the `name` property of `$personObject`.
 

/// type=SS, answer=[4]

Which statement best describes the code on line 13?

 - It sets the value `Diana` of the `name` property as `$personObject`.

 - It adds the value `Diana` of the `name` property to `$personObject`.

 - It returns the value `Diana` of the `name` property of `$personObject`.

 - It displays the value `Diana` of the `name` property of `$personObject`.

 - It removes the value `Diana` of the `name` property of `$personObject`.

:::


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    $personObject->eat();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `eat`.

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, answer=[5]

Which of the following is an object?

 - `new`

 - `eat()`

 - `$name`

 - `Person`

 - `$personObject`


/// type=SS, answer=[3]

Which of the following is a property?

 - `new`

 - `eat()`

 - `$name`

 - `Person`

 - `$personObject`


/// type=SS, answer=[2]

Which of the following is a method?

 - `new`

 - `eat()`

 - `$name`

 - `Person`

 - `$personObject`


/// type=SS, answer=[1]

On line 13, what does `$personObject->eat()` do?

 - It calls the `eat()` method of `$personObject`.

 - It defines the `eat()` method of `$personObject`.

 - It creates the `eat()` method of `$personObject`.

 - It declares the `eat()` method of `$personObject`.

 - It displays the `eat()` method of `$personObject`.


/// type=SS, answer=[5]

In the statement `$personObject->eat();` on line 13, what does the object operator `->` do?

 - It sets the `eat()` method of `$personObject`.

 - It creates the `eat()` method of `$personObject`.

 - It defines the `eat()` method of `$personObject`.

 - It declares the `eat()` method of `$personObject`.

 - It accesses the `eat()` method of `$personObject`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    $personObject->name = "Charles";
    echo $personObject->name;
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, answer=[2]

Which statement best describes the code on line 13?

 - It adds the value `Charles` of the `name` property to `$personObject`.

 - It sets the value of the `name` property of `$personObject` to `Charles`.

 - It returns the value `Charles` of the `name` property of `$personObject`.

 - It displays the value `Charles` of the `name` property of `$personObject`.

 - It removes the value `Charles` of the `name` property of `$personObject`.


/// type=SS, answer=[3]

On lines 12, 13, and 14, replace the `$personObject` object with `$person`. Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `Charles`.

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
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $person = new Person();
    $person->name = "Charles";
    echo $person->name;
?>
```
/// type=SS, answer=[2]

Remove the statement `$person->name = "Charles";` on line 13. Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `Charles`.

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
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $person = new Person();
    echo $person->name;
?>
```
/// type=SS, answer=[5]

On line 13, replace the statement `echo $person->name;` with `$person->eat();`. Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `This is an eat() method.`.

:::

+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[1]

Which statement best describes an object?

 - It is an instance of a class.

 - It is a basic building block of a method.

 - It is an actual representation of a function.

 - It is a function that performs a specific action.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, answer=[4]

Which statement is true about the `new` keyword?

 - It sets a property of a class.

 - It defines a method of an object.

 - It represents a function in a class.

 - It creates a new object as an instance of a class.

 - It accesses the methods and properties of an object.


/// type=SS, answer=[5]

What does the object operator `->` do?

 - It sets a property of a class.

 - It defines a method of an object.

 - It represents a function in a class.

 - It creates a new object as an instance of a class.

 - It accesses the methods and properties of an object.

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    echo $personObject->$name;
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=MS, answer=[1,2]

What are the error messages?

 - Undefined variable: `name` on line number 13

 - Uncaught Error: Cannot access empty property

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 13

 - Use of undefined constant name - assumed `'name'` on line number 13

 - Object of class `Person` could not be converted to string on line number 13


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - There is a dollar sign `$` in the `name` property on line 13.

 - There is no semicolon `;` after the `echo` statement on line 13.

 - On line 13, the statement `echo $personObject->$name;` is invalid.

 - There are no parentheses `()` after `$personObject->$name` on line 13.

 - There is no object operator `->` between `$personObject` and `$name` on line 13.

:::


/// type=CR, answer=[tests/Objects/UnexpectedDollarSignOnNamePropertyTest.php]

Correct the code so that it outputs the string `Diana`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    echo $personObject->$name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    echo $personObject.name;
?>
```
/// type=MS, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `name` on line number 13

 - Uncaught Error: Cannot access empty property

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 13

 - Use of undefined constant name - assumed `'name'` on line number 13

 - Object of class `Person` could not be converted to string on line number 13


/// type=MS, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 13, the statement `echo $personObject.name;` is invalid.

 - There is no semicolon `;` after the `echo` statement on line 13.

 - There are no parentheses `()` after `$personObject.name` on line 13.

 - On line 13, the dot operator `.` between `$personObject` and `name` is invalid.

 - There is no object operator `->` between `$personObject` and `name` on line 13.

:::


/// type=CR, answer=[tests/Objects/MissingObjectOperatorTest.php]

Correct the code so that it outputs the string `Diana`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    echo $personObject.name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    $personObject->eat;
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `eat` on line number 13

 - Uncaught Error: Cannot access empty property

 - Uncaught Error: Call to undefined function `eat()`

 - Undefined property: `Person::$eat` on line number 13

 - Use of undefined constant eat - assumed `'eat'` on line number 13


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 13, the method call `$personObject->eat` is invalid.

 - There is no `new` keyword between `->` and `eat` on line 13.

 - There is no semicolon `;` at the end of the statement on line 13.

 - On line 13, the object operator `->` between `$personObject` and `eat` is invalid.

 - There are no parentheses `()` after the method call `$personObject->eat` on line 13.

:::


/// type=CR, answer=[tests/Objects/MissingParenthesesOnMethodTest.php]

Correct the code so that it outputs the string `This is an eat() method.`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = new Person();
    $personObject->eat;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = Person();
    $personObject->eat();
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Undefined property: `Person::$eat` on line number 13

 - Uncaught Error: Cannot access empty property on line 13

 - Uncaught Error: Call to undefined function `eat()` on line 13

 - Uncaught Error: Call to undefined function `Person()` on line 12

 - Use of undefined constant Person - assumed `'Person'` on line number 12


/// type=SS, answer=[3]

Which statement best describes the error?

 - There are parentheses `()` after `Person` on line 12.

 - On line 12, the statement `$personObject = Person();` is invalid.

 - There is no `new` keyword between `=` and `Person()` on line 12.

 - There is no object operator `->` between `=` and `Person()` on line 12.

 - There is an assignment operator `=` between `$personObject` and `Person()` on line 12.

:::


/// type=CR, answer=[tests/Objects/MissingNewKeywordTest.php]

Correct the code so that it outputs the string `This is an eat() method.`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $personObject = Person();
    $personObject->eat();
?>
```


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $person = new Person();
    $person->name = "Charles";
    echo $person->name;
?>
```
/// type=SS, answer=[3]

On line 14, remove the object operator `->` between `$person` and `name`. Execute the program. What is the error message?

 - Undefined variable: `name` on line number 13

 - syntax error, unexpected `'"'` on line number 13

 - Undefined variable: `personname` on line number 14

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 14

 - syntax error, unexpected end of file, expecting `','` or `';'` on line number 14

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $person = new Person();
    $person->name = "Charles";
    echo $personname;
?>
```
/// type=MS, answer=[1,3]

In the statement `$person->name = "Charles";` on line 13, replace `$person` with `$charles`. Execute the program. What are the error messages?

 - Undefined variable: `personname` on line number 14

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 14

 - Warning: Creating default object from empty value on line number 13

 - syntax error, unexpected `'$charles'` (T_VARIABLE) on line number 13

 - syntax error, unexpected end of file, expecting `','` or `';'` on line number 14

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $person = new Person();
    $charles->name = "Charles";
    echo $personname;
?>
```
/// type=SS, answer=[2]

On line 12, remove the assignment operator `=` after `$person`. Execute the program. What is the error message?

 - syntax error, unexpected `'='` on line number 12

 - syntax error, unexpected `'new'` (T_NEW) on line number 12

 - Warning: Creating default object from empty value on line number 13

 - syntax error, unexpected `'$charles'` (T_VARIABLE) on line number 13

 - syntax error, unexpected end of file, expecting `','` or `';'` on line number 14

:::


/// type=CR, answer=[tests/Objects/CorrectMultipleErrorTest.php]

Correct the code so that it outputs the string `Charles`.

```php
<?php
    class Person 
    {
        public $name = "Diana";
        
        public function eat()
        {
            echo "This is an eat() method.";
        }
    }

    $person  new Person();
    $charles->name = "Charles";
    echo $personname;
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Objects/CreateNewObjectTest.php]

Write a program that uses a `new` keyword to create an instance of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$type` with the value `Dog`. 

 2. A method definition for the `move()` method. Inside the `move()` method body, add an `echo` statement to display the string `Animals move from one place to another.`. 

After the class declaration, add a statement that creates the `$pet` object an instance of an `Animal` class. Then, add another statement that calls the `move()` method of the `$pet` object. Run the program to view the output.

```php
<?php


?>
```


/// type=CR, answer=[tests/Objects/CreatePlantObjectTest.php]

Write a program that uses a `new` keyword to create an instance of a certain class. First, use a `class` keyword to declare a class named `Plant`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$type` with the value `Tree`.

 2. A method definition for the `grow()` method. Inside the `grow()` method body, add an `echo` statement to display the string `Plants grow everywhere.`.

After the class declaration, add a statement that creates the `$plantObject` object an instance of a `Plant` class. Then, add another statement that calls the `grow()` method of the `$plantObject` object. Run the program to view the output.

```php
<?php


?>
```

+++
