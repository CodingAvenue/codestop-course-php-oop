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
    $person = new Person();
    echo $person->address;
?>
```
/// type=SS, id=abf95283-dcb0-4145-b363-e6b88c8ff071, answer=[4]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `address`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=MS, id=a1b2d431-111b-4adf-9c02-7839c7b8c7d5, answer=[1,5]

Why is there no output displayed?

 - On line 5, the `$address` property is not yet initialized. 

 - There is no semicolon `;` at the end of the statement on line 4.
 
 - On line 5, the property definition `public $address;` is invalid.

 - On line 13, the statement `echo $person->address;` is invalid.

 - There is no default value assigned to the `$address` property on line 5.


/// type=MS, id=5208f815-7c9f-4d5f-ace7-910bfd195a3c, answer=[1,4]

Which of the following are properties?

 - `$name`

 - `Diana`

 - `Person`

 - `$address`

 - `$person`


/// type=SS, id=56765830-86c2-4ec0-8df1-d1210d4256e9, answer=[4]

Which of the following is a visibility keyword?

 - `new`

 - `echo`

 - `class`

 - `public`

 - `function`


/// type=SS, id=ee926493-bb26-4a57-8145-e55886989ad8, answer=[2]

In the statement `public $name = "Diana";` on line 4, what does `public` do?

 - It displays the value of the `$name` property.

 - It specifies the visibility of the `$name` property.

 - It sets the value of the `$name` property to `Diana`.

 - It creates the `$name` property of the `Person` class.

 - It declares the `$name` property of the `Person` class.


/// type=MS, id=35b2c6c6-d489-4cc2-b662-27d2b2d7b7b1, answer=[1,3]

Which of the following are property definitions?

 - `public $address;`

 - `class Person { }`

 - `public $name = "Diana";`

 - `echo $person->address;`

 - `$person = new Person();`


/// type=SS, id=d97051ce-321b-41eb-8839-5f1df2167259, answer=[5]

Which statement best describes the code on line 4?

 - It accesses the string `Diana` of the `$name` property.

 - It displays the string `Diana` of the `$name` property.

 - It removes the string `Diana` from the `$name` property.

 - It replaces the value of the `$name` property with the string `Diana`.

 - It declares and initializes the `$name` property of the `Person` class.


/// type=SS, id=db1f974d-447e-4ede-8e47-3427498e5fc0, answer=[3]

Which statement best describes the code on line 5?

 - It calls the `$address` property of the `Person` class.

 - It displays the `$address` property of the `Person` class.

 - It declares the `$address` property of the `Person` class.

 - It accesses the `$address` property of the `Person` class.

 - It declares and initializes the `$address` property of the `Person` class.


/// type=SS, id=638839cc-4ef4-41f0-8835-73fa2ced85d4, answer=[5]

On line 12, what does the statement `$person = new Person();` do?

 - It sets the value of `$person` to `Person`.

 - It replaces the value of `$person` with `Person`.

 - It accesses the value of `Person` through `$person`.

 - It assigns the value of the `Person` class to `$person`.

 - It creates the `$person` object as an instance of the `Person` class.


/// type=SS, id=9b2e3e0e-8c5e-491b-8922-2769bb1847f4, answer=[5]

In the statement `echo $person->address;` on line 13, what does `$person->address` do?

 - It sets the value of the `address` property of `$person`.

 - It returns the value of the `address` property of `$person`.

 - It removes the value of the `address` property of `$person`.

 - It displays the value of the `address` property of `$person`.

 - It accesses the value of the `address` property of `$person`.

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
    $person = new Person();
    $person->address = "Canada";
    echo $person->address;
?>
```
/// type=SS, id=2cb03810-e3a0-4750-8aec-69c33d06c7cf, answer=[2]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `address`.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, id=a33411e7-6ee0-4e9c-87a1-c942bc061d69, answer=[5]

Which of the following is an object?

 - `$name`

 - `Diana`

 - `Person`

 - `$address`

 - `$person`


/// type=SS, id=ce4d1ea8-9a4f-4eb1-beee-826845bd3d58, answer=[3]

Which of the following is a class?

 - `$name`

 - `Diana`

 - `Person`

 - `$address`

 - `$person`


/// type=MS, id=ecded2f9-663f-41f5-bf4b-db08a392111b, answer=[1,3,4,5]

Which of the following are keywords?

 - `new`

 - `Diana`

 - `class`

 - `public`

 - `function`


/// type=SS, id=bc382860-8ab0-4d47-ab93-8b0f3c41fac0, answer=[5]

Which of the following is an object instantiation?

 - `public $address;`

 - `class Person { }`

 - `public $name = "Diana";`

 - `echo $person->address;`

 - `$person = new Person();`


/// type=SS, id=1cd8fdc5-764d-4d02-8b90-e8bc60c3a47d, answer=[1]

In the statement `$person->address = "Canada";` on line 13, what is `Canada`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=7d3e2f9e-97cc-42de-8465-92ba53dbd197, answer=[5]

In the statement `$person->address = "Canada";` on line 13, what does the object operator `->` do?

 - It sets the `address` property of `$person`.

 - It creates the `address` property of `$person`.

 - It defines the `address` property of `$person`.

 - It declares the `address` property of `$person`.

 - It accesses the `address` property of `$person`.


/// type=SS, id=584ef9af-2f62-4e28-9bcb-4144c5a94724, answer=[1]

On line 13, what does the statement `$person->address = "Canada";` do?

 - It assigns the string `Canada` to the `address` property of `$person`.

 - It returns the string `Canada` of the `address` property of `$person`.

 - It creates the string `Canada` of the `address` property of `$person`.

 - It displays the string `Canada` of the `address` property of `$person`.

 - It replaces the string `Canada` of the `address` property with `$person`.

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
    $person = new Person();
    $person->address = "Canada";
    echo $person->address;
?>
```
/// type=SS, id=c72dcf49-545f-45f8-acff-d0e2b36438e3, answer=[2]

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
    $person = new Person();
    $person->address = "Canada";
    echo $person->address;
?>
```
/// type=SS, id=56263d55-201d-46c0-be81-510f5c19f6dc, answer=[3]

Remove the statement `$person->address = "Canada";` on line 13. Execute the program. What is its output?

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
    $person = new Person();
    echo $person->address;
?>
```
/// type=SS, id=9f4a3031-b191-4b13-a81f-d57a337f8382, answer=[1]

In the statement `echo $person->address;` on line 13, replace `address` with `name`. Execute the program. What is its output?

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
    $person = new Person();
    echo $person->name;
?>
```
/// type=SS, id=621846a7-0f1b-442a-aae9-dc2d48226dc6, answer=[5]

On line 13, replace the statement `echo $person->name;` with `$person->eat();`. Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `California`.

 - No output is displayed.

 - It prints `This is an eat() method.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=2c51e706-7014-4ae2-a069-9468a9c4143f, answer=[3,5]

Which statements correctly describe a property?

 - It is the value of a class.

 - It is an instance of a class.

 - It is a variable defined inside a class.

 - It is a function inside a class that performs a specific action. 

 - It is commonly referred to as an attribute or member of a class.


/// type=MS, id=8b9fccfc-e704-4aa4-adc0-57bdb4b5b674, answer=[1,3,5]

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
    $person = new Person();
    echo $person->name;
?>
```
/// type=SS, id=d6043acb-b12f-4d16-9580-1dcc12b5ee40, answer=[3]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `address`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, id=f03beff4-ba39-4d55-97fc-f9b72ac60427, answer=[5]

What is the error message?

 - syntax error, unexpected `'This'` (T_STRING), expecting `','` or `';'` on line number 9

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 5

 - syntax error, unexpected `'name'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'address'` (T_STRING), expecting variable (T_VARIABLE) on line number 5

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4


/// type=SS, id=12774bd5-0edc-454c-85e3-bfd1ad5df764, answer=[2]

Which statement best describes the error?

 - There is a dollar sign `$` in the `name` property on line 13.

 - There is no `public` visibility keyword before `$name` on line 4.

 - There is no `public` visibility keyword before `$address` on line 5.

 - There is no assignment operator `=` between `$name` and `Diana` on line 4.

 - There is no object operator `->` between `$person` and `name` on line 13.

:::


/// type=CR, id=2d38580f-78ff-4ed4-8b2b-d43450d2fa81, answer=[tests/Properties/MissingPublicKeywordTest.php]

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
    $person = new Person();
    echo $person->name;
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
    $person = new Person();
    echo $person->name;
?>
```
/// type=SS, id=8df00122-625f-4b1f-aeca-d0955ea54ad7, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 5

 - syntax error, unexpected `'name'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'address'` (T_STRING), expecting variable (T_VARIABLE) on line number 5

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - syntax error, unexpected `'"Diana"'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, id=6896c06f-6e4b-45be-9edf-f0f6079c3099, answer=[4]

Which statement best describes the error?

 - There is a dollar sign `$` in the `name` property on line 13.

 - There is no `public` visibility keyword before `$name` on line 4.

 - There is no `public` visibility keyword before `$address` on line 5.

 - There is no assignment operator `=` between `$name` and `Diana` on line 4.

 - There is no object operator `->` between `$person` and `name` on line 13.

:::


/// type=CR, id=ddfec419-f572-4ab8-adda-bd9c5ab4779f, answer=[tests/Properties/MissingAssignmentOperatorTest.php]

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
    $person = new Person();
    echo $person->name;
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
    $person = new Person();
    $person->$address = "Canada";
    echo $person->address;
?>
```
/// type=MS, id=4002a63d-1da1-458d-8f09-b30142ebde52, answer=[1,2]

Execute the program. What are the error messages?

 - Uncaught Error: Cannot access empty property

 - Undefined variable: `address` on line number 13

 - syntax error, unexpected `'='` on line number 13

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'"Canada"'` (T_CONSTANT_ENCAPSED_STRING) on line number 13


/// type=MS, id=4328b9ff-a121-4633-92f8-0f76a0586f25, answer=[1,3]

Which statements correctly describe the error?

 - There is a dollar sign `$` in the `address` property on line 13.

 - There is no semicolon `;` at the end of the statement on line 13

 - On line 13, the statement `$person->$address = "Canada";` is invalid.

 - There is no object operator `->` between `$person` and `$address` on line 13.

 - There is no assignment operator `=` between `$address` and `Canada` on line 13.

:::


/// type=CR, id=2f36df9e-1c39-47fb-bd43-8fd4878f8089, answer=[tests/Properties/RemoveUnpexpectedDollarSignTest.php]

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
    $person = new Person();
    $person->$address = "Canada";
    echo $person->address;
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
    $person = new Person();
    person->address = "Canada";
    echo $person->address;
?>
```
/// type=SS, id=06957518-5119-4aa5-bdee-c9d55de9a90e, answer=[4]

Execute the program. What is the error message?

 - Uncaught Error: Cannot access empty property

 - Undefined variable: `address` on line number 13

 - syntax error, unexpected `'='` on line number 13

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'"Canada"'` (T_CONSTANT_ENCAPSED_STRING) on line number 13


/// type=MS, id=19b3be4a-d5ac-4d6b-87de-45fe7793af00, answer=[2,3]

Which statements correctly describe the error?

 - There is a dollar sign `$` in the `address` property on line 13.

 - On line 13, the `person` object does not start with a dollar sign `$`.

 - On line 13, the statement `person->address = "Canada";` is invalid.

 - There is no assignment operator `=` between `$address` and `Canada` on line 13.

 - There is no object operator `->` between `$person` and `$address` on line 13.

:::


/// type=CR, id=e9640e3b-0b32-4232-95cd-98a3647036a6, answer=[tests/Properties/MissingDollarSignOnObjectTest.php]

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
    $person = new Person();
    person->address = "Canada";
    echo $person->address;
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
    $person = new Person();
    $person->address = "Canada";
    echo $person->address;
?>
```
/// type=SS, id=71339518-2585-41b4-b907-b328ce364e8d, answer=[2]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Canada`.

 - It prints `address`.

 - No output is displayed.

 - It prints `This is an eat() method.`.


/// type=SS, id=76486e36-9f55-4958-b18d-2c81333aa3db, answer=[3]

Remove the object operator `->` between `$person` and `address` on line 14. Execute the program. What is the error message?

 - Uncaught Error: Cannot access empty property

 - Undefined variable: `address` on line number 14

 - Undefined variable: `personaddress` on line number 14

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
    $person = new Person();
    $person->address = "Canada";
    echo $personaddress;
?>
```
/// type=SS, id=6fd947f8-2fbc-41fd-aaa4-8e2ca84a94a5, answer=[5]

On line 13, remove the assignment operator `=` between `$person->address` and `"Canada"`. Execute the program. What is the error message?

 - Undefined variable: `address` on line number 13

 - syntax error, unexpected `'"'` on line number 13

 - syntax error, unexpected `'='` on line number 13

 - syntax error, unexpected `'$person'` (T_VARIABLE) on line number 13

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
    $person = new Person();
    $person->address  "Canada";
    echo $personaddress;
?>
```
/// type=SS, id=a25bf662-fbc8-468a-9c8d-2380469bc3be, answer=[2]

Remove the dollar sign `$` from `$person` on line 13. Execute the program. What is the error message?

 - syntax error, unexpected `'echo'` (T_ECHO) on line number 14

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'$person'` (T_VARIABLE) on line number 13

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
    $person = new Person();
    person->address  "Canada";
    echo $personaddress;
?>
```
/// type=SS, id=7f8ef71b-32c6-42ef-a0bd-76eb19f48e8d, answer=[2]

Remove the `new` keyword before `Person()` on line 12. Execute the program. What is the error message?

 - syntax error, unexpected `'Person()'` (T_VARIABLE) on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 13

 - syntax error, unexpected `'$person'` (T_VARIABLE) on line number 13

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
    $person =  Person();
    person->address  "Canada";
    echo $personaddress;
?>
```
/// type=SS, id=2c07032b-096a-407d-8f70-0260ba5ed210, answer=[3]

Remove the dollar sign `$` from `$address` on line 5. Execute the program. What is the error message?

 - syntax error, unexpected `'"'`, expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 5

 - syntax error, unexpected `'address'` (T_STRING), expecting variable (T_VARIABLE) on line number 5

 - syntax error, unexpected `'$address'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

 - syntax error, unexpected `'"Diana"'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4

:::


/// type=CR, id=88ff20f9-2d23-4325-b1d1-520a29351a30, answer=[tests/Properties/CorrectMultipleErrorsTest.php]

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
    $person =  Person();
    person->address  "Canada";
    echo $personaddress;
?>
```


+++


+++

### Part 4: Practice

/// type=CR, id=84334020-7682-4b7d-bfda-e7d45384630b, answer=[tests/Properties/ManipulateObjectPropertiesTest.php]

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
