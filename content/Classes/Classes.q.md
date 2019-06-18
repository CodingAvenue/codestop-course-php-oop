# Classes

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, answer=[4]

Why is there no output displayed?

 - `MyClass` is not a valid class name.

 - There are no parentheses `()` after `MyClass`.

 - `$myProp` is not a valid property of `MyClass`.

 - There is no `MyClass` instance created at the moment.

 - On line 6, the `myMethod()` method definition is invalid.


/// type=SS, answer=[3]

On line 2, what is `class`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a variable.

 - It is a property.


/// type=SS, answer=[5]

On line 2, what is `MyClass`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[4]

On line 3, what does the open curly brace `{` indicate?

 - The end of the program.

 - The beginning of the program.

 - The end of the `class` declaration.

 - The beginning of the `class` declaration.


/// type=SS, answer=[3]

On line 10, what does the close curly brace `}` indicate?

 - The end of the program.

 - The beginning of the program.

 - The end of the `class` declaration.

 - The beginning of the `class` declaration.


/// type=SS, answer=[3]

On line 4, what is `public`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[4]

On line 4, what is `$myProp`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[1]

In the statement `$myProp = "This is a class property."` on line 4, what is `"This is a class property."`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=MS, answer=[1,2]

Which statements correctly describe the code on line 4?

 - It is the definition of the `$myProp` property.

 - It declares and initializes the `$myProp` property of `MyClass`.

 - It accesses the string `This is a class property.` of the `$myProp` property.

 - It displays the string `This is a class property.` of the `$myProp` property.

 - It removes the string `This is a class property.` from the `$myProp` property.


/// type=SS, answer=[3]

On line 6, what is `function`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[2]

On line 6, what is `myMethod()`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[1]

Which of the following is a class declaration?

 - `class MyClass { }`

 - `public function myMethod()`

 - `echo "This is a class method.";`

 - `public $myProp = "This is a class property.";`

 - `public function myMethod() { echo "This is a class method."; }`


/// type=SS, answer=[4]

Which of the following is a property definition?

 - `class MyClass { }`

 - `public function myMethod()`

 - `echo "This is a class method.";`

 - `public $myProp = "This is a class property.";`

 - `public function myMethod() { echo "This is a class method."; }`


/// type=SS, answer=[5]

Which of the following is a method definition?

 - `class MyClass { }`

 - `public function myMethod()`

 - `echo "This is a class method.";`

 - `public $myProp = "This is a class property.";`

 - `public function myMethod() { echo "This is a class method."; }`

:::


:::

/// type=REPL, readonly=true

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }
    	
    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, answer=[1]

On line 2, what does the `class` keyword do?

 - It creates the `MyClass` class.

 - It displays the `MyClass` class.

 - It accesses the `MyClass` class.

 - It defines the `MyClass` method.

 - It creates the `MyClass` property.


/// type=SS, answer=[4]

Which of the following is a property?

 - `class`

 - `public`

 - `MyClass`

 - `$myProp`

 - `myMethod()`


/// type=SS, answer=[5]

Which of the following is a method?

 - `class`

 - `public`

 - `MyClass`

 - `$myProp`

 - `myMethod()`


/// type=SS, answer=[2]

In the statement `$myObject = new MyClass;` on line 12, what is `$myObject`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, answer=[4]

On line 12, what does the statement `$myObject = new MyClass;` do?

 - It sets the value of `$myObject` to `MyClass`.

 - It replaces the value of `$myObject` with `MyClass`.

 - It accesses the value of `MyClass` through `$myObject`.

 - It creates the `$myObject` object of the `MyClass` class.

 - It assigns the value of the `MyClass` class to `$myObject`.


/// type=SS, answer=[5]

On line 14, what does the statement `echo $myObject->myProp;` do?

 - It creates the `myProp` property of `$myObject`.

 - It sets the value of the `myProp` property of `$myObject`.

 - It returns the value of the `myProp` property of `$myObject`.

 - It removes the value of the `myProp` property of `$myObject`.

 - It displays the value of the `myProp` property of `$myObject`.


:::


:::

/// type=REPL

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }
    	
    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```
/// type=SS, answer=[4]

On line 14, replace the statement `echo $myObject->myProp;` with `$myObject->myMethod();`. Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.
 
:::


:::

/// type=REPL

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }
    	
    $myObject = new MyClass;

    $myObject->myMethod();
?>
```
/// type=SS, answer=[1]

On line 14, what does the statement `$myObject->myMethod();` do?

 - It calls the `myMethod()` method of `$myObject`.

 - It checks the `myMethod()` method of `$myObject`.

 - It creates the `myMethod()` method of `$myObject`.

 - It removes the `myMethod()` method of `$myObject`.

 - It evaluates the `myMethod()` method of `$myObject`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[5]

Which statements are true about a class?

 - It is an instance of an object.

 - It is a basic building block of a method.

 - It is an actual representation of a function.

 - It is a function that performs a specific action.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, answer=[1]

Which statement best describes the `class` keyword?

 - It creates a class.

 - It accesses a class.

 - It sets a property of a class.

 - It defines a method of a class.

 - It removes a method of a class.


/// type=SS, answer=[3]

Which statement is true about a property?

 - It is the value of a class.

 - It is an instance of a class.

 - It is a variable defined inside a class.
 
 - It is an actual representation of a class.

 - It is a function inside a class that performs a specific action.


/// type=SS, answer=[5]

Which statement is true about a method?

 - It is the value of a class.

 - It is an instance of a class.

 - It is a variable defined inside a class.
 
 - It is an actual representation of a class.

 - It is a function inside a class that performs a specific action.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
    class MyClass 
    {
        public $myProp  "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, answer=[5]

What is the error message?

 - syntax error, unexpected `'{'` on line number 3

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 6

 - syntax error, unexpected `'myProp'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'"This is a class property."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, answer=[5]

Which statement best describes the error?

 - There is no `class` keyword before `MyClass` on line 2. 

 - There is no semicolon `;` after the property definition on line 4.

 - On line 4, the property `myProp` does not start with a dollar sign `$`.

 - On line 4, the string `This is a class property.` is not enclosed in double quotes `""`.

 - There is no assignment operator `=` between `$myProp` and `"This is a class property."` on line 4.

:::


/// type=CR, answer=[tests/Classes/MissingAssignmentOperatorTest.php]

Correct the code so that it outputs the string `This is a class property.`.

```php
<?php
    class MyClass 
    {
        public $myProp  "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
     MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'` on line number 3

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 6

 - syntax error, unexpected `'myProp'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'"This is a class property."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, answer=[1]

Which statement best describes the error?

 - There is no `class` keyword before `MyClass` on line 2. 

 - There is no semicolon `;` after the property definition on line 4.

 - On line 4, the property `myProp` does not start with a dollar sign `$`.

 - On line 4, the string `This is a class property.` is not enclosed in double quotes `""`.

 - There is no assignment operator `=` between `$myProp` and `"This is a class property."` on line 4.

:::


/// type=CR, answer=[tests/Classes/MissingClassKeywordTest.php]

Correct the code so that it outputs the string `This is a class property.`.

```php
<?php
     MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```

:::

/// type=REPL, readonly=true

```php
<?php
    class MyClass 
    {
        public myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'` on line number 3

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 6

 - syntax error, unexpected `'myProp'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'"This is a class property."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, answer=[3]

Which statement best describes the error?

 - There is no `class` keyword before `MyClass` on line 2. 

 - There is no semicolon `;` after the property definition on line 4.

 - On line 4, the property `myProp` does not start with a dollar sign `$`.

 - On line 4, the string `This is a class property.` is not enclosed in double quotes `""`.

 - There is no assignment operator `=` between `$myProp` and `"This is a class property."` on line 4.

:::


/// type=CR, answer=[tests/Classes/MissingDollarSignOnPropertyTest.php]

Correct the code so that it outputs the string `This is a class property.`.

```php
<?php
    class MyClass 
    {
        public myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    echo $myObject->myProp;
?>
```

:::

/// type=REPL, readonly=true

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    $myObject->myMethod();
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 8

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=SS, answer=[4]

Which statement best describes the error?

 - There is no open curly brace `{` on line 7.

 - There is no `class` keyword before `MyClass` on line 2. 

 - There are no parentheses `()` after `myMethod` on line 6.

 - There is no `function` keyword before `myMethod()` on line 6.

 - On line 8, the string `This is a class method.` is not properly quoted.

:::


/// type=CR, answer=[tests/Classes/MissingFunctionKeywordTest.php]

Correct the code so that it outputs the string `This is a class method.`.

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public myMethod() 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    $myObject->myMethod();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    $myObject->myMethod();
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 8

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=SS, answer=[3]

Which statement best describes the error?

 - There is no open curly brace `{` on line 7.

 - There is no `class` keyword before `MyClass` on line 2. 

 - There are no parentheses `()` after `myMethod` on line 6.

 - There is no `function` keyword before `myMethod()` on line 6.

 - On line 8, the string `This is a class method.` is not properly quoted.

:::


/// type=CR, answer=[tests/Classes/MissingParenthesesAfterMethodTest.php]

Correct the code so that it outputs the string `This is a class method.`.

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod 
        {
            echo "This is a class method.";
        }
    }

    $myObject = new MyClass;

    $myObject->myMethod();
?>
```


:::

/// type=REPL

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    }
    	
    $myObject = new MyClass;

    $myObject->myMethod();
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, answer=[5]

Remove the close curly brace `}` on line 10. Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6

 - syntax error, unexpected `'$myObject'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 12

:::


:::

/// type=REPL

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        {
            echo "This is a class method.";
        }
    
    	
    $myObject = new MyClass;

    $myObject->myMethod();
?>
```
/// type=SS, answer=[3]

Remove the open curly brace `{` on line 7. Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6

 - syntax error, unexpected `'$myObject'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 12

:::


:::

/// type=REPL

```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        
            echo "This is a class method.";
        }
    
    	
    $myObject = new MyClass;

    $myObject->myMethod();
?>
```
/// type=SS, answer=[2]

Remove the open curly brace `{` on line 3. Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 8

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6

:::


/// type=CR, answer=[tests/Classes/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `This is a class method.`.

```php
<?php
    class MyClass 
    
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        
            echo "This is a class method.";
        }
    
    	
    $myObject = new MyClass;

    $myObject->myMethod();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Classes/CreateSimpleClassTest.php]

Write a program that uses a `class` keyword to create a class definition of a `Person` class. First, use a `class` keyword to declare a class named `Person`. Within the curly braces `{}`, add a property definition of a class property `$name` with the value `Diana`. Next, add a method definition for `eat()` method. Inside the `eat()` method body, add an `echo` statement to display the string `This is an eat method.`. After the class declaration, add a statement `$pObject = new Person;` to instantiate a `Person` class. Then, add another statement `$pObject->eat();` to call a class method. Run the program to view the output.

```php
<?php


?>
```

+++
