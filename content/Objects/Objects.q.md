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

    $person = new Person();
    echo $person->name;
?>
```
/// type=SS, id=871c4e38-65ea-4aa0-a7c3-7e74bf83c756, answer=[2]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=MS, id=9443f363-cfb4-47e5-81db-ecb8addfb39f, answer=[1,2,4,5]

Which of the following are keywords?

 - `new`

 - `class`

 - `Person`

 - `public`

 - `function`


/// type=SS, id=71d2891a-773f-4c56-856b-f24769b16bc9, answer=[1]

On line 2, what does the `class` keyword do?

 - It creates the `Person` class.

 - It displays the `Person` class.

 - It accesses the `Person` class.

 - It defines the `Person` method.

 - It creates the `Person` property.


/// type=SS, id=2891d015-81fc-4f0e-a20e-7e68f2a43909, answer=[4]

Which statement best describes the code on line 4?

 - It accesses the string `Diana` of the `$name` property.

 - It displays the string `Diana` of the `$name` property.

 - It removes the string `Diana` from the `$name` property.

 - It declares and initializes the `$name` property of `Person`.

 - It replaces the value of the `$name` property with the string `Diana`.


/// type=SS, id=7c3f0404-e43e-4ef6-83c1-42d9b783b929, answer=[1]

Which of the following is a class declaration?

 - `class Person { }`

 - `echo $person->name;`

 - `public $name = "Diana";`

 - `$person = new Person();`

 - `public function eat() { echo "This is an eat() method."; }`


/// type=SS, id=fd0287de-bb5c-4a42-9ac1-141e122cc19b, answer=[3]

Which of the following is a property definition?

 - `class Person { }`

 - `echo $person->name;`

 - `public $name = "Diana";`

 - `$person = new Person();`

 - `public function eat() { echo "This is an eat() method."; }`


/// type=SS, id=2a4c3910-0c15-4ccf-8935-818937f77d9d, answer=[5]

Which of the following is a method definition?

 - `class Person { }`

 - `echo $person->name;`

 - `public $name = "Diana";`

 - `$person = new Person();`

 - `public function eat() { echo "This is an eat() method."; }`


/// type=MS, id=f001c235-1869-42b5-a6b6-487beefcf91c, answer=[1,5]

In the statement `$person = new Person();` on line 12, what is `$person`?

 - It is an object.

 - It is a keyword.

 - It is a property.

 - It is a class name.

 - It is an instance of the `Person` class.


/// type=SS, id=9a9be46c-4d0f-4846-bbd4-d0db49489f21, answer=[5]

In the statement `$person = new Person();` on line 12, what does the `new` keyword do?

 - It assigns `Person()` to `$person`.

 - It sets the value of `$person` to `Person()`.

 - It defines the `$person` object in `Person()`.

 - It displays the `$person` object of the `Person` class.

 - It creates the `$person` object as an instance of the `Person` class.


/// type=MS, id=87d5e0a5-ccd7-4f9a-8e32-d09348de5a47, answer=[2,5]

Which statements correctly describe the code on line 12?

 - It assigns `Person()` to `$person`.

 - It creates an instance of the `Person` class.

 - It sets the value of `$person` to `Person()`.

 - It displays the `$person` object of the `Person` class.

 - It assigns the new instance of the `Person` class to `$person`.


/// type=SS, id=4bb092b5-33af-45a2-84f1-cabac0cd2e54, answer=[1]

In the statement `echo $person->name;` on line 13, what is `->`?

 - It is an object operator.

 - It is a less than operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a greater than operator.


/// type=SS, id=ef743a7b-9e42-4e82-8db7-06771072a1c2, answer=[4]

In the statement `echo $person->name;` on line 13, what is `name`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=91e39709-6b3f-4ccc-85ba-e8143118cc05, answer=[5]

In the statement `echo $person->name;` on line 13, what does `$person->name` do?

 - It sets the value of the `name` property of `$person`.

 - It returns the value of the `name` property of `$person`.

 - It removes the value of the `name` property of `$person`.

 - It displays the value of the `name` property of `$person`.

 - It accesses the value of the `name` property of `$person`.
 

/// type=SS, id=f9f3ffed-4f37-421a-8015-c01fc35cae57, answer=[4]

Which statement best describes the code on line 13?

 - It sets the value `Diana` of the `name` property as `$person`.

 - It adds the value `Diana` of the `name` property to `$person`.

 - It returns the value `Diana` of the `name` property of `$person`.

 - It displays the value `Diana` of the `name` property of `$person`.

 - It removes the value `Diana` of the `name` property of `$person`.

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

    $person = new Person();
    $person->eat();
?>
```
/// type=SS, id=d36bc0bf-b948-4ad9-a5df-db88dc8345bc, answer=[5]

Execute the program. What is its output?

 - It prints `eat`.

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, id=f4b85e60-b3d4-47fe-aa08-fa26dda75f13, answer=[5]

Which of the following is an object?

 - `new`

 - `eat()`

 - `$name`

 - `Person`

 - `$person`


/// type=SS, id=9b7a55d3-3f4b-46e1-a73b-928ff9bc56c4, answer=[3]

Which of the following is a property?

 - `new`

 - `eat()`

 - `$name`

 - `Person`

 - `$person`


/// type=SS, id=1e194ceb-6755-4a2b-ab6d-d2c2a97e2b41, answer=[2]

Which of the following is a method?

 - `new`

 - `eat()`

 - `$name`

 - `Person`

 - `$person`


/// type=SS, id=fe674cd7-72ad-4e49-a04d-50428b3f0b20, answer=[1]

On line 13, what does `$person->eat()` do?

 - It calls the `eat()` method of `$person`.

 - It defines the `eat()` method of `$person`.

 - It creates the `eat()` method of `$person`.

 - It declares the `eat()` method of `$person`.

 - It displays the `eat()` method of `$person`.


/// type=SS, id=7d4c7933-4b0f-4595-82b9-2dd430faf738, answer=[5]

In the statement `$person->eat();` on line 13, what does the object operator `->` do?

 - It sets the `eat()` method of `$person`.

 - It creates the `eat()` method of `$person`.

 - It defines the `eat()` method of `$person`.

 - It declares the `eat()` method of `$person`.

 - It accesses the `eat()` method of `$person`.

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
/// type=SS, id=dbbfe47c-6e0a-4ec0-9a0f-1566c358bdc1, answer=[3]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, id=8f038eb9-8ee2-452f-8502-e32542f87e92, answer=[2]

Which statement best describes the code on line 13?

 - It adds the value `Charles` of the `name` property to `$person`.

 - It sets the value of the `name` property of `$person` to `Charles`.

 - It returns the value `Charles` of the `name` property of `$person`.

 - It displays the value `Charles` of the `name` property of `$person`.

 - It removes the value `Charles` of the `name` property of `$person`.


/// type=SS, id=6d96bd41-2721-45c0-b0b8-29a97a60dc55, answer=[3]

On lines 12, 13, and 14, replace the `$person` object with `$person`. Execute the program. What is its output?

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
/// type=SS, id=3dfdaf10-e152-4bc3-868f-acbece86d76a, answer=[2]

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
/// type=SS, id=1a3ce1b3-15da-46c2-ae84-f0a8b48df918, answer=[5]

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

/// type=SS, id=f1a16faf-39a0-46cc-8627-f21b56711599, answer=[1]

Which statement best describes an object?

 - It is an instance of a class.

 - It is a basic building block of a method.

 - It is an actual representation of a function.

 - It is a function that performs a specific action.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, id=ee73c605-5e85-4c97-8fc5-a24b58a48b3b, answer=[4]

Which statement is true about the `new` keyword?

 - It sets a property of a class.

 - It defines a method of an object.

 - It represents a function in a class.

 - It creates a new object as an instance of a class.

 - It accesses the methods and properties of an object.


/// type=SS, id=3254137a-7821-47a4-b4a4-d069683eb8f2, answer=[5]

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

    $person = new Person();
    echo $person->$name;
?>
```
/// type=SS, id=95eac32e-218e-468f-a128-5e1358fcc2bf, answer=[3]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=MS, id=8c8d1cd6-8aed-4ea0-8fdf-4814e48da3ba, answer=[1,2]

What are the error messages?

 - Undefined variable: `name` on line number 13

 - Uncaught Error: Cannot access empty property

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 13

 - Use of undefined constant name - assumed `'name'` on line number 13

 - Object of class `Person` could not be converted to string on line number 13


/// type=MS, id=555d7ea9-c47f-4d75-a960-769462fdc25e, answer=[1,3]

Which statements correctly describe the error?

 - There is a dollar sign `$` in the `name` property on line 13.

 - There is no semicolon `;` after the `echo` statement on line 13.

 - On line 13, the statement `echo $person->$name;` is invalid.

 - There are no parentheses `()` after `$person->$name` on line 13.

 - There is no object operator `->` between `$person` and `$name` on line 13.

:::


/// type=CR, id=8de62e70-dac4-44b8-88a6-eef890804869, answer=[tests/Objects/8de62e70-dac4-44b8-88a6-eef890804869]

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

    $person = new Person();
    echo $person->$name;
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

    $person = new Person();
    echo $person.name;
?>
```
/// type=MS, id=73702179-d7de-4c18-af8f-9a543dcff038, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `name` on line number 13

 - Uncaught Error: Cannot access empty property

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 13

 - Use of undefined constant name - assumed `'name'` on line number 13

 - Object of class `Person` could not be converted to string on line number 13


/// type=MS, id=4127ee50-90ac-44c4-848c-4f730545f540, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 13, the statement `echo $person.name;` is invalid.

 - There is no semicolon `;` after the `echo` statement on line 13.

 - There are no parentheses `()` after `$person.name` on line 13.

 - On line 13, the dot operator `.` between `$person` and `name` is invalid.

 - There is no object operator `->` between `$person` and `name` on line 13.

:::


/// type=CR, id=f04d7209-ac3b-4858-b8fa-f572ec87d408, answer=[tests/Objects/f04d7209-ac3b-4858-b8fa-f572ec87d408]

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

    $person = new Person();
    echo $person.name;
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

    $person = new Person();
    $person->eat;
?>
```
/// type=SS, id=fa93fa16-20f6-4206-abc5-2399f8230204, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `eat` on line number 13

 - Uncaught Error: Cannot access empty property

 - Uncaught Error: Call to undefined function `eat()`

 - Undefined property: `Person::$eat` on line number 13

 - Use of undefined constant eat - assumed `'eat'` on line number 13


/// type=MS, id=d8532de2-43d8-4f0e-8c82-32cd1ce11f9d, answer=[1,5]

Which statements correctly describe the error?

 - On line 13, the method call `$person->eat` is invalid.

 - There is no `new` keyword between `->` and `eat` on line 13.

 - There is no semicolon `;` at the end of the statement on line 13.

 - On line 13, the object operator `->` between `$person` and `eat` is invalid.

 - There are no parentheses `()` after the method call `$person->eat` on line 13.

:::


/// type=CR, id=25e8b187-15f1-427b-b55e-ede867bc6dca, answer=[tests/Objects/25e8b187-15f1-427b-b55e-ede867bc6dca]

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

    $person = new Person();
    $person->eat;
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

    $person = Person();
    $person->eat();
?>
```
/// type=SS, id=ac8918c6-a83f-4dac-9626-fe9c56868f56, answer=[4]

Execute the program. What is the error message?

 - Undefined property: `Person::$eat` on line number 13

 - Uncaught Error: Cannot access empty property on line 13

 - Uncaught Error: Call to undefined function `eat()` on line 13

 - Uncaught Error: Call to undefined function `Person()` on line 12

 - Use of undefined constant Person - assumed `'Person'` on line number 12


/// type=SS, id=d2353545-b7d0-4d45-b144-5c71ff5c1101, answer=[3]

Which statement best describes the error?

 - There are parentheses `()` after `Person` on line 12.

 - On line 12, the statement `$person = Person();` is invalid.

 - There is no `new` keyword between `=` and `Person()` on line 12.

 - There is no object operator `->` between `=` and `Person()` on line 12.

 - There is an assignment operator `=` between `$person` and `Person()` on line 12.

:::


/// type=CR, id=6137a825-b1ac-435a-bd44-77d911ab18ed, answer=[tests/Objects/6137a825-b1ac-435a-bd44-77d911ab18ed]

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

    $person = Person();
    $person->eat();
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
/// type=SS, id=f6ec5af5-3ac1-4056-9e82-b3b2c9e0e5fa, answer=[3]

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
/// type=MS, id=3bd5af02-2f5b-4a45-8fc2-3964ea04da02, answer=[1,3]

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
/// type=SS, id=5ec9ddec-246b-4e4b-9df2-00ad0ebf5cf8, answer=[2]

On line 12, remove the assignment operator `=` after `$person`. Execute the program. What is the error message?

 - syntax error, unexpected `'='` on line number 12

 - syntax error, unexpected `'new'` (T_NEW) on line number 12

 - Warning: Creating default object from empty value on line number 13

 - syntax error, unexpected `'$charles'` (T_VARIABLE) on line number 13

 - syntax error, unexpected end of file, expecting `','` or `';'` on line number 14

:::


/// type=CR, id=2bd1d89c-0c6f-4d2c-8f7b-2f68de90ee54, answer=[tests/Objects/2bd1d89c-0c6f-4d2c-8f7b-2f68de90ee54]

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

/// type=CR, id=a0f225fc-b7e2-45a2-9a3a-febaa82ef6b8, answer=[tests/Objects/a0f225fc-b7e2-45a2-9a3a-febaa82ef6b8]

Write a program that uses a `new` keyword to create an instance of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$type` with the value `Dog`. 

 2. A method definition for the `move()` method. Inside the `move()` method body, add an `echo` statement to display the string `Animals move from one place to another.`. 

After the class declaration, add a statement that creates the `$pet` object an instance of an `Animal` class. Then, add another statement that calls the `move()` method of the `$pet` object. Run the program to view the output.

```php
<?php


?>
```


/// type=CR, id=289ed4c4-f00b-424a-b605-b9246d94b575, answer=[tests/Objects/289ed4c4-f00b-424a-b605-b9246d94b575]

Write a program that uses a `new` keyword to create an instance of a certain class. First, use a `class` keyword to declare a class named `Plant`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$type` with the value `Tree`.

 2. A method definition for the `grow()` method. Inside the `grow()` method body, add an `echo` statement to display the string `Plants grow everywhere.`.

After the class declaration, add a statement that creates the `$plant` object an instance of a `Plant` class. Then, add another statement that calls the `grow()` method of the `$plant` object. Run the program to view the output.

```php
<?php


?>
```

+++
