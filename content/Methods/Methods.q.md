# Methods

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    echo $pObject->name;
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `Charles`.

 - It prints `$newName`.

 - No output is displayed.


/// type=MS, answer=[1,3,4,5]

Which of the following are keywords?

 - `new`

 - `$this`

 - `class`

 - `public`

 - `function`


/// type=SS, answer=[4]

Which of the following is an object?

 - `$name`

 - `Person`

 - `$newName`

 - `$pObject`

 - `changeName()`


/// type=SS, answer=[2]

Which of the following is a class?

 - `$name`

 - `Person`

 - `$newName`

 - `$pObject`

 - `changeName()`


/// type=SS, answer=[1]

Which of the following is a property?

 - `$name`

 - `Person`

 - `$newName`

 - `$pObject`

 - `changeName()`


/// type=SS, answer=[5]

Which of the following is a method?

 - `$name`

 - `Person`

 - `$newName`

 - `$pObject`

 - `changeName()`


/// type=SS, answer=[4]

In the method definition `public function changeName($newName)` on line 6, what is `$newName`?

 - It is a class.

 - It is an object.

 - It is a property.

 - It is a parameter.

 - It is an argument.


/// type=SS, answer=[2]

In the method definition `public function changeName($newName)` on line 6, what does the `function` keyword do?

 - It returns the `changeName()` method of the `Person` class.

 - It creates the `changeName()` method of the `Person` class.

 - It removes the `changeName()` method of the `Person` class.

 - It accesses the `changeName()` method of the `Person` class.

 - It initializes the `changeName()` method of the `Person` class.


/// type=SS, answer=[5]

In the statement `$this->name = $newName;` on line 8, what is `$this`?

 - It is a keyword.

 - It is a parameter.

 - It is an operator.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, answer=[1]

In the statement `$this->name = $newName;` on line 8, what is `->`?

 - It is an object operator.

 - It is a less than operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a greater than operator.


/// type=SS, answer=[5]

In the statement `$this->name = $newName;` on line 8, what does `$this->name` do?

 - It tests the `$name` property inside the `Person` class.

 - It creates the `$name` property inside the `Person` class.

 - It defines the `$name` property inside the `Person` class.

 - It removes the `$name` property inside the `Person` class.

 - It accesses the `$name` property inside the `Person` class.


/// type=SS, answer=[1]

Which statement best describes the code on line 8?

 - It assigns the value of `$newName` to the `$name` property of the `Person` class.

 - It accesses the value of `$newName` in the `$name` property of the `Person` class.

 - It retrieves the value of `$newName` in the `$name` property of the `Person` class.

 - It evaluates the value of `$newName` in the `$name` property of the `Person` class.

 - It removes the value of `$newName` from the `$name` property of the `Person` class.


/// type=SS, answer=[4]

In the statement `$pObject->changeName("Charles");` on line 12, what is `Charles`?

 - It is a keyword.

 - It is a parameter.

 - It is an operator.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, answer=[2]

On line 12, what does the statement `$pObject->changeName("Charles");` do?

 - It returns the argument `Charles` in the `changeName()` method of `$pObject`.

 - It calls the `changeName()` method of `$pObject` passing the argument `Charles`.

 - It creates the `changeName()` method of `$pObject` with the parameter `Charles`.

 - It removes the argument `Charles` from the `changeName()` method of `$pObject`.

 - It accesses the argument `Charles` from the `changeName()` method of `$pObject`.


/// type=SS, answer=[5]

Which statement best describes the code on line 13?

 - It sets the value `Charles` of the `name` property as `$pObject`.

 - It adds the value `Charles` of the `name` property to `$pObject`.

 - It returns the value `Charles` of the `name` property of `$pObject`.

 - It removes the value `Charles` of the `name` property of `$pObject`.

 - It displays the value `Charles` of the `name` property of `$pObject`.

:::


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `My name is Diana.`.

 - It prints `My name is Charles.`.


/// type=MS, answer=[4,5]

Which of the following are method definitions?

 - `public $name = "Diana";`

 - `$this->name = $newName;`

 - `$pObject->changeName("Charles");`

 - `public function changeName($newName) { $this->name = $newName; }`

 - `public function display() { echo "My name is " . $this->name . "."; }`


/// type=SS, answer=[5]

In the statement `echo "My name is " . $this->name . ".";` on line 13, what is `.`?

 - It is an object operator.

 - It is a less than operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a concatenation operator.


/// type=SS, answer=[5]

In the statement `echo "My name is " . $this->name . ".";` on line 13, what does `$this->name` do?

 - It tests the `$name` property inside the `Person` class.

 - It creates the `$name` property inside the `Person` class.

 - It defines the `$name` property inside the `Person` class.

 - It removes the `$name` property inside the `Person` class.

 - It accesses the `$name` property inside the `Person` class.


/// type=MS, answer=[3,5]

Which statements correctly describe the code on line 16?

 - It assigns `Person()` to `$pObject`.

 - It sets the value of `$pObject` to `Person()`.

 - It creates the `$pObject` instance of the `Person` class.

 - It evaluates the `$pObject` object of the `Person` class.

 - It instantiates the `$pObject` object of the `Person` class.


/// type=SS, answer=[2]

Which statement best describes the code on line 17?

 - It returns the argument `Charles` in the `changeName()` method of `$pObject`.

 - It calls the `changeName()` method of `$pObject` passing the argument `Charles`.

 - It creates the `changeName()` method of `$pObject` with the parameter `Charles`.

 - It removes the argument `Charles` from the `changeName()` method of `$pObject`.

 - It accesses the argument `Charles` from the `changeName()` method of `$pObject`.


/// type=MS, answer=[1,2]

Which statements correctly describe the code on line 18?

 - It calls the `display()` method of `$pObject`.

 - It displays the string `My name is Charles.`.

 - It creates the `display()` method of `$pObject`.

 - It evaluates the `display()` method of `$pObject`.

 - It removes the `display()` method from `$pObject`.


:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display();
?>
```
/// type=SS, answer=[5]

On line 4, replace the property definition `public $name = "Diana";` with `public $name;`. Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `My name is Diana.`.

 - It prints `My name is Charles.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name;

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display();
?>
```
/// type=SS, answer=[5]

In the statement `$pObject->changeName("Charles");` on line 17, replace the argument `Charles` with `Princess`. Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `My name is Charles.`.

 - It prints `My name is Princess.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name;

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Princess");
    $pObject->display();
?>
```
/// type=SS, answer=[3]

In the statement `$pObject->display();` on line 18, replace `display()` with `name`. Execute the program. What is its output?

 - It prints `Charles`.

 - It prints `Princess`.

 - No output is displayed.

 - It prints `My name is Charles.`.

 - It prints `My name is Princess.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name;

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Princess");
    $pObject->name;
?>
```
/// type=SS, answer=[2]

Add the `echo` construct before `$pObject->name` on line 18. Execute the program. What is its output?

 - It prints `Charles`.

 - It prints `Princess`.

 - No output is displayed.

 - It prints `My name is Charles.`.

 - It prints `My name is Princess.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name;

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Princess");
    echo $pObject->name;
?>
```
/// type=SS, answer=[3]

Remove the statement `$pObject->changeName("Princess");` on line 17. Execute the program. What is its output?

 - It prints `Charles`.

 - It prints `Princess`.

 - No output is displayed.

 - It prints `My name is Charles.`.

 - It prints `My name is Princess.`.

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name;

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    echo $pObject->name;
?>
```
/// type=MS, answer=[1,5]

Why is there no output displayed?

 - On line 4, the `$name` property is not yet initialized. 

 - On line 4, the property definition `public $name;` is invalid.

 - On line 17, the statement `echo $pObject->name;` is invalid.

 - There is no semicolon `;` at the end of the statement on line 4.

 - There is no default value assigned to the `$name` property on line 4.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[5]

Which statement best describes a method?

 - It is the value of a class.

 - It is an instance of a class.

 - It is a variable defined inside a class.

 - It is an actual representation of a class.

 - It is a function inside a class that performs a specific action.


/// type=SS, answer=[5]

Which statement is true about the `$this` pseudo-variable?

 - It closes a method of a class.

 - It creates a method in a class.

 - It returns a method value in a class.

 - It sets the value of a method in a class.

 - It accesses the properties and methods within a class. 


/// type=SS, answer=[3]

Which statement best describes the `function` keyword?
 
 - It calls a method of a class.

 - It closes a method of a class.

 - It creates a method in a class.

 - It returns a method value in a class.

 - It sets the value of a method in a class.

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

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $pObject = new Person();
    $pObject->changeName();
    echo $pObject->name;
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Charles`.

 - It prints `$newName`.

 - It produces an error.

 - No output is displayed.


/// type=MS, answer=[1,5]

What are the error messages?

 - Undefined variable: `newName` on line number 8

 - syntax error, unexpected `'$pObject'` (T_VARIABLE) on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 12

 - Uncaught Error: Call to undefined function `changeName()` on line number 12

 - Missing argument `1` for `Person::changeName()` on line 12 and defined on line number 6


/// type=SS, answer=[5]

Which statement best describes the error?

 - There is no semicolon `;` at the end of the statement on line 11.

 - There is no default value assigned to the `$name` property on line 4.

 - There are no parentheses `()` after the `changeName` method call on line 12.

 - There is no object operator `->` between `$pObject` and `changeName()` on line 12.

 - There is no argument specified in the `changeName()` method call of `$pObject` on line 12.

:::


/// type=CR, answer=[tests/Methods/MissingArgumentOnMethodCallTest.php]

Correct the code so that it outputs the string `Charles`.

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $pObject = new Person();
    $pObject->changeName();
    echo $pObject->name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $pObject = new Person();
    pObject->changeName("Charles");
    echo $pObject->name;
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `newName` on line number 8

 - syntax error, unexpected `'$pObject'` (T_VARIABLE) on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 12

 - Uncaught Error: Call to undefined function `changeName()` on line number 12

 - Missing argument `1` for `Person::changeName()` on line 12 and defined on line number 6


/// type=MS, answer=[1,2]

Which statements correctly describe the error?

 - On line 12, the `pObject` object does not start with a dollar sign `$`.

 - On line 12, the statement `pObject->changeName("Charles");` is invalid.

 - There are no parentheses `()` after the `changeName` method call on line 12.

 - There is no object operator `->` between `$pObject` and `changeName()` on line 12.

 - There is no argument specified in the `changeName()` method call of `$pObject` on line 12.

:::


/// type=CR, answer=[tests/Methods/MissingDollarSignOnObjectTest.php]

Correct the code so that it outputs the string `Charles`.

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $pObject = new Person();
    pObject->changeName("Charles");
    echo $pObject->name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    echo $pObject->name;
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `')'` on line number 7

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 8

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 6

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting '(' on line number 6

 - syntax error, unexpected `'changeName'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no parameter specified in the method definition on line 6.

 - There are no parentheses `()` after the `changeName` method call on line 12.

 - On line 6, the parameter `$newName` in the `changeName()` method is invalid.

 - On line 6, the method definition `public changeName($newName)` is invalid.

 - There is no `function` keyword between `public` and `changeName($newName)` on line 6.

:::


/// type=CR, answer=[tests/Methods/MissingFunctionKeywordOnMethodTest.php]

Correct the code so that it outputs the string `Charles`.

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    echo $pObject->name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display;
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Undefined property: `Person::$display` on line number 18

 - syntax error, unexpected `'new'` (T_NEW) on line number 16

 - Undefined variable: `pObjectchangeName` on line number 17

 - syntax error, unexpected `'$pObject'` (T_VARIABLE) on line number 18

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `','` or `';'` on line number 13


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - On line 18, the statement `$pObject->display;` is invalid.

 - On line 18, the `pObject` object does not start with a dollar sign `$`.

 - There are no parentheses `()` after `$pObject->display` on line 18.

 - There is no object operator `->` between `$pObject` and `display` on line 18.

 - There is no argument specified in the `display()` method call of `$pObject` on line 18.

:::


/// type=CR, answer=[tests/Methods/MissingParenthesesOnMethodCallTest.php]

Correct the code so that it outputs the string `My name is Charles.`.

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display();
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Use of undefined constant `name` - assumed `'name'` on line number 13

 - Object of class `Person` could not be converted to string on line number 13

 - syntax error, unexpected `'name'` (T_STRING), expecting `','` or `';'` on line number 13

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `','` or `';'` on line number 13

 - syntax error, unexpected `'"."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 13


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - On line 13, `$this name` in the `echo` statement is invalid.

 - On line 13, `$this name` is not enclosed in double quotes `""`.

 - There is no object operator `->` between `$this` and `name` on line 13.

 - On line 13, the `this` pseudo-variable does not start with a dollar sign `$`.

 - There is no concatenation operator `.` between `$this` and `name` on line 13.

:::


/// type=CR, answer=[tests/Methods/MissingObjectOperatorTest.php]

Correct the code so that it outputs the string `My name is Charles.`.

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display();
?>
```


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `Charles`.

 - It produces an error.

 - No output is displayed.

 - It prints `My name is Diana.`.

 - It prints `My name is Charles.`.


/// type=MS, answer=[2,3]

Remove the object operator `->` from the statement `$pObjectdisplay();` on line 18. Execute the program. What are the error messages?

 - Undefined variable: `newName` on line number 8

 - Undefined variable: `pObjectdisplay` on line number 18

 - Uncaught Error: Function name must be a string on line number 18

 - Missing argument `1` for `Person::changeName()` on line 17 and defined on line number 6 

 - syntax error, unexpected `'"Charles"'` (T_CONSTANT_ENCAPSED_STRING) on line number 17

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObjectdisplay();
?>
```
/// type=SS, answer=[1]

On line 11, remove the parentheses `()` from `display()`. Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 12

 - syntax error, unexpected `'public'` (T_PUBLIC) on line number 11

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 8

 - syntax error, unexpected `'display'` (T_STRING), expecting variable (T_VARIABLE) on line number 11

 - syntax error, unexpected `'changeName'` (T_STRING), expecting variable (T_VARIABLE) on line number 6

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObjectdisplay();
?>
```
/// type=SS, answer=[3]

On line 8, remove the pseudo-variable `$this` from the statement `$this->name = $newName;`. Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `'('` on line number 12

 - syntax error, unexpected `'public'` (T_PUBLIC) on line number 11

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 8

 - syntax error, unexpected `'display'` (T_STRING), expecting variable (T_VARIABLE) on line number 11

 - syntax error, unexpected `'changeName'` (T_STRING), expecting variable (T_VARIABLE) on line number 6

:::


:::

/// type=REPL

```php
<?php
    class Person 
    {
        public $name = "Diana";

        public function changeName($newName)
        {
            ->name = $newName;
        }

        public function display
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObjectdisplay();
?>
```
/// type=SS, answer=[3]

In the property definition `public $name = "Diana";` on line 4, remove the dollar sign `$` from `$name`. Execute the program. What is the error message?

 - syntax error, unexpected `'"'`, expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'name'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 -  syntax error, unexpected `'"Diana"'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4

:::


/// type=CR, answer=[tests/Methods/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `My name is Charles.`.

```php
<?php
    class Person 
    {
        public name = "Diana";

        public function changeName($newName)
        {
            ->name = $newName;
        }

        public function display
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $pObject = new Person();
    $pObject->changeName("Charles");
    $pObjectdisplay();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Methods/ManipulateObjectMethodsTest.php]

Write a program that adds and manipulates the methods of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add a property definition of a class property `$type` with the value `Dog`. Next, add a method definition for `changeType()` method with a parameter named `$newType`. Inside the `changeType()` method body, add a statement that assigns the value of `$newType` to the `$type` property of the `Animal` class. Add another method definition for a method named `display()`. Inside the `display()` method body, add an `echo` statement to display the string `"The animal type is " . $this->type . "."`. After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class. Add a statement that calls the `changeType()` method of the `$pet` object passing the argument `Cat`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.

```php
<?php



?>
```

+++