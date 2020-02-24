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
/// type=SS, id=1dbbe882-17a1-4707-9d8c-249405714edc, answer=[3]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, id=2dfa48b4-38bc-4a39-ada5-e67ab5e68ec3, answer=[4]

Why is there no output displayed?

 - `MyClass` is not a valid class name.

 - There are no parentheses `()` after `MyClass`.

 - `$myProp` is not a valid property of `MyClass`.

 - There is no `MyClass` instance created at the moment.

 - On line 6, the `myMethod()` method definition is invalid.


/// type=SS, id=dbb4491f-6a3e-49b2-b983-e0aa2829f5a7, answer=[3]

On line 2, what is `class`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a variable.

 - It is a property.


/// type=SS, id=a7249711-3960-441b-b21c-2a4841f1af9b, answer=[5]

On line 2, what is `MyClass`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=49ef793c-bf46-40e5-bc6b-32f2e25858e5, answer=[4]

On line 3, what does the open curly brace `{` indicate?

 - The end of the program.

 - The beginning of the program.

 - The end of the `class` declaration.

 - The beginning of the `class` declaration.


/// type=SS, id=a0ed61cf-5e03-4934-bbb7-b6a98acae9cd, answer=[3]

On line 10, what does the close curly brace `}` indicate?

 - The end of the program.

 - The beginning of the program.

 - The end of the `class` declaration.

 - The beginning of the `class` declaration.


/// type=SS, id=d67a6e0d-7544-44a0-9c37-f1f6b80eb843, answer=[3]

On line 4, what is `public`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=35995512-0116-4043-bbef-9a2651b5e3e0, answer=[4]

On line 4, what is `$myProp`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=5b0af060-3169-4f35-9e47-ff45fe46af7c, answer=[1]

In the statement `$myProp = "This is a class property."` on line 4, what is `"This is a class property."`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=MS, id=7625a0ca-179f-4388-95f4-20b9bfac9d57, answer=[1,2]

Which statements correctly describe the code on line 4?

 - It is the definition of the `$myProp` property.

 - It declares and initializes the `$myProp` property of `MyClass`.

 - It accesses the string `This is a class property.` of the `$myProp` property.

 - It displays the string `This is a class property.` of the `$myProp` property.

 - It removes the string `This is a class property.` from the `$myProp` property.


/// type=SS, id=0c8f0368-9ff4-4869-9cf5-48e544437f52, answer=[3]

On line 6, what is `function`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=73af37b9-4a72-40b0-9419-c2c81074ff2b, answer=[2]

On line 6, what is `myMethod()`?

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=6cd3149c-d8be-4516-b22c-ade71232b8c0, answer=[1]

Which of the following is a class declaration?

 - `class MyClass { }`

 - `public function myMethod()`

 - `echo "This is a class method.";`

 - `public $myProp = "This is a class property.";`

 - `public function myMethod() { echo "This is a class method."; }`


/// type=SS, id=b5a5bec5-15b6-4646-8a9c-5a66341febb4, answer=[4]

Which of the following is a property definition?

 - `class MyClass { }`

 - `public function myMethod()`

 - `echo "This is a class method.";`

 - `public $myProp = "This is a class property.";`

 - `public function myMethod() { echo "This is a class method."; }`


/// type=SS, id=72c02c78-19f7-4d5b-9866-f00b632fd15a, answer=[5]

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
    	
    $myObject = new MyClass();

    echo $myObject->myProp;
?>
```
/// type=SS, id=dd664f21-c2aa-4e91-be77-a679f6507ba3, answer=[5]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, id=996e16d4-a24b-4f92-a40a-6e4d7a972f81, answer=[1]

On line 2, what does the `class` keyword do?

 - It creates the `MyClass` class.

 - It displays the `MyClass` class.

 - It accesses the `MyClass` class.

 - It defines the `MyClass` method.

 - It creates the `MyClass` property.


/// type=SS, id=3b2cdeb8-da22-4243-b441-91d0a6a601fd, answer=[4]

Which of the following is a property?

 - `class`

 - `public`

 - `MyClass`

 - `$myProp`

 - `myMethod()`


/// type=SS, id=48845840-1d49-4135-a721-5f2a829a875b, answer=[5]

Which of the following is a method?

 - `class`

 - `public`

 - `MyClass`

 - `$myProp`

 - `myMethod()`


/// type=SS, id=91de0050-47bb-4b58-b3bd-44fbe8c619f8, answer=[2]

In the statement `$myObject = new MyClass();` on line 12, what is `$myObject`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a property.

 - It is a class name.


/// type=SS, id=baaadfae-d910-45cc-8297-21937031e96d, answer=[5]

On line 12, what does the statement `$myObject = new MyClass();` do?

 - It sets the value of `$myObject` to `MyClass`.

 - It replaces the value of `$myObject` with `MyClass`.

 - It accesses the value of `MyClass` through `$myObject`.

 - It assigns the value of the `MyClass` class to `$myObject`.

 - It creates the `$myObject` object as an instance of the `MyClass` class.


/// type=SS, id=81824dc2-3a96-4be8-9794-1e3d77b40f62, answer=[5]

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
    	
    $myObject = new MyClass();

    echo $myObject->myProp;
?>
```
/// type=SS, id=e3f1a7a8-d9ae-4a1f-b9b2-185dd8170098, answer=[4]

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
    	
    $myObject = new MyClass();

    $myObject->myMethod();
?>
```
/// type=SS, id=f5ac8e42-6882-4a78-abbc-ae23805010f1, answer=[1]

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

/// type=SS, id=131902c6-1ea7-456c-b276-ccfb17093742, answer=[5]

Which statement is true about a class?

 - It is an instance of an object.

 - It is a basic building block of a method.

 - It is an actual representation of a function.

 - It is a function that performs a specific action.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, id=522e2b17-144c-4432-805a-00e02945e3e4, answer=[1]

Which statement best describes the `class` keyword?

 - It creates a class.

 - It accesses a class.

 - It sets a property of a class.

 - It defines a method of a class.

 - It removes a method of a class.


/// type=SS, id=9dd76af4-ce52-4873-9fb3-d3c959d612e2, answer=[3]

Which statement is true about a property?

 - It is the value of a class.

 - It is an instance of a class.

 - It is a variable defined inside a class.
 
 - It is an actual representation of a class.

 - It is a function inside a class that performs a specific action.


/// type=SS, id=5f409753-bcbf-4ec5-9b4c-c83d7fb8a8b6, answer=[5]

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

    $myObject = new MyClass();

    echo $myObject->myProp;
?>
```
/// type=SS, id=c384361a-dab2-4ce6-981a-bf942cd8e5af, answer=[2]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, id=5300c313-99dc-485b-8151-0294a1a6808f, answer=[5]

What is the error message?

 - syntax error, unexpected `'{'` on line number 3

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 6

 - syntax error, unexpected `'myProp'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'"This is a class property."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, id=e5977991-47f4-4518-94e9-bc17ab55d113, answer=[5]

Which statement best describes the error?

 - There is no `class` keyword before `MyClass` on line 2. 

 - There is no semicolon `;` after the property definition on line 4.

 - On line 4, the property `myProp` does not start with a dollar sign `$`.

 - On line 4, the string `This is a class property.` is not enclosed in double quotes `""`.

 - There is no assignment operator `=` between `$myProp` and `"This is a class property."` on line 4.

:::


/// type=CR, id=355f59d8-93c5-4399-bf42-ca1d010ee92e, answer=[tests/Classes/MissingAssignmentOperatorTest.php]

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

    $myObject = new MyClass();

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

    $myObject = new MyClass();

    echo $myObject->myProp;
?>
```
/// type=SS, id=bfcf8276-40d0-4d54-a216-0ef66aa5c46c, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'` on line number 3

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 6

 - syntax error, unexpected `'myProp'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'"This is a class property."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, id=4e630a4f-ada5-4aa4-bbb0-3c3631c154a9, answer=[1]

Which statement best describes the error?

 - There is no `class` keyword before `MyClass` on line 2. 

 - There is no semicolon `;` after the property definition on line 4.

 - On line 4, the property `myProp` does not start with a dollar sign `$`.

 - On line 4, the string `This is a class property.` is not enclosed in double quotes `""`.

 - There is no assignment operator `=` between `$myProp` and `"This is a class property."` on line 4.

:::


/// type=CR, id=f37728d4-5e19-4549-85de-8d7d3874ef4f, answer=[tests/Classes/MissingClassKeywordTest.php]

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

    $myObject = new MyClass();

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

    $myObject = new MyClass();

    echo $myObject->myProp;
?>
```
/// type=SS, id=012f33f0-04bd-45ed-a191-43b6a6e8f9c4, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'` on line number 3

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `','` or `';'` on line number 6

 - syntax error, unexpected `'myProp'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'"This is a class property."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4


/// type=SS, id=f0f78624-969e-4004-8f43-5d4624fe6403, answer=[3]

Which statement best describes the error?

 - There is no `class` keyword before `MyClass` on line 2. 

 - There is no semicolon `;` after the property definition on line 4.

 - On line 4, the property `myProp` does not start with a dollar sign `$`.

 - On line 4, the string `This is a class property.` is not enclosed in double quotes `""`.

 - There is no assignment operator `=` between `$myProp` and `"This is a class property."` on line 4.

:::


/// type=CR, id=6ea8778e-83a7-49e4-a517-021d123b738f, answer=[tests/Classes/MissingDollarSignOnPropertyTest.php]

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

    $myObject = new MyClass();

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

    $myObject = new MyClass();

    $myObject->myMethod();
?>
```
/// type=SS, id=53d7c500-098c-46b1-a9d4-96f543982d35, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 8

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=SS, id=7d4004e3-34ff-45df-bfa7-e36e2ae49f89, answer=[4]

Which statement best describes the error?

 - There is no open curly brace `{` on line 7.

 - There is no `class` keyword before `MyClass` on line 2. 

 - There are no parentheses `()` after `myMethod` on line 6.

 - There is no `function` keyword before `myMethod()` on line 6.

 - On line 8, the string `This is a class method.` is not properly quoted.

:::


/// type=CR, id=1f0bff5a-85ec-40cb-84d8-367b0eebb9ad, answer=[tests/Classes/MissingFunctionKeywordTest.php]

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

    $myObject = new MyClass();

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

    $myObject = new MyClass();

    $myObject->myMethod();
?>
```
/// type=SS, id=fe45f170-bfec-422b-8999-f685f9c41fd8, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 8

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=SS, id=1282d4d9-968b-4fe0-8018-185820076e19, answer=[3]

Which statement best describes the error?

 - There is no open curly brace `{` on line 7.

 - There is no `class` keyword before `MyClass` on line 2. 

 - There are no parentheses `()` after `myMethod` on line 6.

 - There is no `function` keyword before `myMethod()` on line 6.

 - On line 8, the string `This is a class method.` is not properly quoted.

:::


/// type=CR, id=c5132db2-9b98-4d32-b307-69d3c48f7075, answer=[tests/Classes/MissingParenthesesAfterMethodTest.php]

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

    $myObject = new MyClass();

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
    	
    $myObject = new MyClass();

    $myObject->myMethod();
?>
```
/// type=SS, id=18ef86cd-7138-4b45-a5b7-f21353d94425, answer=[4]

Execute the program. What is its output?

 - It prints `MyClass`.

 - It produces an error.

 - No output is displayed.

 - It prints `This is a class method.`.

 - It prints `This is a class property.`.


/// type=SS, id=5863e799-4ccb-41a8-8e65-1a2a11beb5d8, answer=[5]

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
    
    	
    $myObject = new MyClass();

    $myObject->myMethod();
?>
```
/// type=SS, id=5f97a06b-5351-4b36-8339-7bb95b0b66d0, answer=[3]

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
    
    	
    $myObject = new MyClass();

    $myObject->myMethod();
?>
```
/// type=SS, id=6f0906ab-1150-4b34-9d84-d3c72912e365, answer=[2]

Remove the open curly brace `{` on line 3. Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 7

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'is'` (T_STRING), expecting `','` or `';'` on line number 8

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `';'` or `'{'` on line number 8

 - syntax error, unexpected `'myMethod'` (T_STRING), expecting variable (T_VARIABLE) on line number 6

:::


/// type=CR, id=3ce1a9ec-c263-41a9-8792-b2a21f45ec7d, answer=[tests/Classes/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `This is a class method.`.

```php
<?php
    class MyClass 
    
        public $myProp = "This is a class property.";
        
        public function myMethod() 
        
            echo "This is a class method.";
        }
    
    	
    $myObject = new MyClass();

    $myObject->myMethod();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=0b0f737a-fa9c-4cf6-bbf2-dd6c4b217fde, answer=[tests/Classes/CreateSimpleClassTest.php]

Write a program that uses a `class` keyword to create a class definition of a `Person` class. First, use a `class` keyword to declare a class named `Person`. Within the curly braces `{}`, add a property definition of a class property `$name` with the value `Diana`. Next, add a method definition for `eat()` method. Inside the `eat()` method body, add an `echo` statement to display the string `This is an eat method.`. After the class declaration, add a statement `$pObject = new Person();` to instantiate a `Person` class. Then, add another statement `$pObject->eat();` to call a class method. Run the program to view the output.

```php
<?php


?>
```

+++
