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
    $person = new Person();
    $person->changeName("Charles");
    echo $person->name;
?>
```
/// type=SS, id=6f753cd7-7217-4495-8754-400245e3332e, answer=[3]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `Charles`.

 - It prints `$newName`.

 - No output is displayed.


/// type=MS, id=bafcdb1f-829b-4633-8318-0b6b9def16ea, answer=[1,3,4,5]

Which of the following are keywords?

 - `new`

 - `$this`

 - `class`

 - `public`

 - `function`


/// type=SS, id=26e7f19d-d24e-43c7-888c-7f08e550e9ea, answer=[3]

Which of the following is an object?

 - `$name`

 - `Person`

 - `$person`

 - `$newName`

 - `changeName()`


/// type=SS, id=83c7284b-04dd-4c7b-a7ab-92ab739c98db, answer=[2]

Which of the following is a class?

 - `$name`

 - `Person`

 - `$person`

 - `$newName`

 - `changeName()`


/// type=SS, id=923c6894-c434-45c1-8804-30a4c2c473c7, answer=[1]

Which of the following is a property?

 - `$name`

 - `Person`

 - `$person`

 - `$newName`

 - `changeName()`


/// type=SS, id=79642b28-9c02-4123-8504-356306d584e0, answer=[5]

Which of the following is a method?

 - `$name`

 - `Person`

 - `$person`

 - `$newName`

 - `changeName()`


/// type=SS, id=30c4bbe9-70f8-424f-b20b-40c2f8ec924a, answer=[4]

In the method definition `public function changeName($newName)` on line 6, what is `$newName`?

 - It is a class.

 - It is an object.

 - It is a property.

 - It is a parameter.

 - It is an argument.


/// type=SS, id=124864ae-1782-454e-b15b-f2f605fc39af, answer=[2]

In the method definition `public function changeName($newName)` on line 6, what does the `function` keyword do?

 - It returns the `changeName()` method of the `Person` class.

 - It creates the `changeName()` method of the `Person` class.

 - It removes the `changeName()` method of the `Person` class.

 - It accesses the `changeName()` method of the `Person` class.

 - It initializes the `changeName()` method of the `Person` class.


/// type=SS, id=e05c0696-a8bb-461c-aeb1-409fe333e795, answer=[5]

In the statement `$this->name = $newName;` on line 8, what is `$this`?

 - It is a keyword.

 - It is a parameter.

 - It is an operator.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, id=de0af59b-08f1-470f-b0b8-51b1f00caf6c, answer=[1]

In the statement `$this->name = $newName;` on line 8, what is `->`?

 - It is an object operator.

 - It is a less than operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a greater than operator.


/// type=SS, id=3507c80d-3533-44ab-b88c-288aa6f64587, answer=[5]

In the statement `$this->name = $newName;` on line 8, what does `$this->name` do?

 - It tests the `$name` property inside the `Person` class.

 - It creates the `$name` property inside the `Person` class.

 - It defines the `$name` property inside the `Person` class.

 - It removes the `$name` property inside the `Person` class.

 - It accesses the `$name` property inside the `Person` class.


/// type=SS, id=e43e311a-14c6-465f-9ace-48c684292b4d, answer=[1]

Which statement best describes the code on line 8?

 - It assigns the value of `$newName` to the `$name` property of the `Person` class.

 - It accesses the value of `$newName` in the `$name` property of the `Person` class.

 - It retrieves the value of `$newName` in the `$name` property of the `Person` class.

 - It evaluates the value of `$newName` in the `$name` property of the `Person` class.

 - It removes the value of `$newName` from the `$name` property of the `Person` class.


/// type=SS, id=f7e1ea50-fdb6-4ef0-8041-13a3d979828b, answer=[4]

In the statement `$person->changeName("Charles");` on line 12, what is `Charles`?

 - It is a keyword.

 - It is a parameter.

 - It is an operator.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, id=e4f801cc-bd99-4fac-a928-004fa09deb33, answer=[2]

On line 12, what does the statement `$person->changeName("Charles");` do?

 - It returns the argument `Charles` in the `changeName()` method of `$person`.

 - It calls the `changeName()` method of `$person` passing the argument `Charles`.

 - It creates the `changeName()` method of `$person` with the parameter `Charles`.

 - It removes the argument `Charles` from the `changeName()` method of `$person`.

 - It accesses the argument `Charles` from the `changeName()` method of `$person`.


/// type=SS, id=8c9d5f6a-8c7c-4621-88b1-917484d36f2b, answer=[5]

Which statement best describes the code on line 13?

 - It sets the value `Charles` of the `name` property as `$person`.

 - It adds the value `Charles` of the `name` property to `$person`.

 - It returns the value `Charles` of the `name` property of `$person`.

 - It removes the value `Charles` of the `name` property of `$person`.

 - It displays the value `Charles` of the `name` property of `$person`.

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
    $person = new Person();
    $person->changeName("Charles");
    $person->display();
?>
```
/// type=SS, id=1831e1d6-4c50-42bf-a30d-20ab6d82b619, answer=[5]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `My name is Diana.`.

 - It prints `My name is Charles.`.


/// type=MS, id=61ab21b4-273e-46d2-bae4-67690049b48a, answer=[4,5]

Which of the following are method definitions?

 - `public $name = "Diana";`

 - `$this->name = $newName;`

 - `$person->changeName("Charles");`

 - `public function changeName($newName) { $this->name = $newName; }`

 - `public function display() { echo "My name is " . $this->name . "."; }`


/// type=SS, id=b88835db-b995-4df9-9adc-94c739d05113, answer=[5]

In the statement `echo "My name is " . $this->name . ".";` on line 13, what is `.`?

 - It is an object operator.

 - It is a less than operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a concatenation operator.


/// type=SS, id=3ce38021-9619-4a39-aeea-d4c4178e0466, answer=[5]

In the statement `echo "My name is " . $this->name . ".";` on line 13, what does `$this->name` do?

 - It tests the `$name` property inside the `Person` class.

 - It creates the `$name` property inside the `Person` class.

 - It defines the `$name` property inside the `Person` class.

 - It removes the `$name` property inside the `Person` class.

 - It accesses the `$name` property inside the `Person` class.


/// type=MS, id=7c9ae440-5994-413b-a383-4037a05ba14c, answer=[4,5]

Which statements correctly describe the code on line 16?

 - It assigns `Person()` to `$person`.

 - It sets the value of `$person` to `Person()`.

 - It displays the `$person` object of the `Person` class.

 - It creates `$person` as an instance of the `Person` class.

 - It assigns the new instance of the `Person` class to `$person`.


/// type=SS, id=b0e76498-64c6-43a2-90ea-5f41f02032e2, answer=[2]

Which statement best describes the code on line 17?

 - It returns the argument `Charles` in the `changeName()` method of `$person`.

 - It calls the `changeName()` method of `$person` passing the argument `Charles`.

 - It creates the `changeName()` method of `$person` with the parameter `Charles`.

 - It removes the argument `Charles` from the `changeName()` method of `$person`.

 - It accesses the argument `Charles` from the `changeName()` method of `$person`.


/// type=MS, id=217ea2a4-f8b0-4e67-92db-748a64d9af87, answer=[1,2]

Which statements correctly describe the code on line 18?

 - It calls the `display()` method of `$person`.

 - It displays the string `My name is Charles.`.

 - It creates the `display()` method of `$person`.

 - It evaluates the `display()` method of `$person`.

 - It removes the `display()` method from `$person`.

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
            return $this;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $person = new Person();
    $person->changeName("Charles")->display();
?>
```
/// type=SS, id=f85743d1-f358-4f01-935e-368a5f43639f, answer=[5]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Charles`.

 - No output is displayed.

 - It prints `My name is Diana.`.

 - It prints `My name is Charles.`.


/// type=SS, id=2d080f43-9e17-448f-bf01-61cc517e4288, answer=[1]

Which of the following is a property?

 - `$name`

 - `$this`

 - `$person`

 - `display()`

 - `changeName()`


/// type=MS, id=c895de8f-c909-42d3-affd-c3c8bd5bbd17, answer=[4,5]

Which of the following are methods?

 - `$name`

 - `$this`

 - `$person`

 - `display()`

 - `changeName()`


/// type=SS, id=71ca4d31-266f-4b22-9d16-9e80886f934f, answer=[2]

Which of the following is a pseudo-variable?

 - `$name`

 - `$this`

 - `return`

 - `$person`

 - `changeName()`


/// type=SS, id=0cc405bf-05ff-491d-85cc-c0e2265cb795, answer=[4]

On line 9, what does `return $this;` do?

 - It accesses the value of the `changeName()` method.

 - It sets the value of the `$name` property in the `Person` class.

 - It removes the value of the `$name` property in the `Person` class.

 - It returns the current object that calls the `changeName()` method.

 - It displays the current object that calls the `changeName()` method.


/// type=SS, id=d69ad5d1-eed5-466f-899c-eafba11ba6aa, answer=[5]

On line 18, what is `$person->changeName("Charles")->display();`?

 - It is a method.

 - It is an object.

 - It is a property.

 - It is an instantiation.

 - It is a chained method calls.


/// type=SS, id=b09e89d1-83ae-4aca-8fa4-562905bf2174, answer=[1]

Which statement best describes `$person->changeName("Charles")->display();` on line 18?

 - It is the chained method calls that sets the value of `$name` to `Charles` and displays the string `My name is Charles.`.

 - It is the nested method calls that returns the value of the `$name` property in the `display()` method of the `Person` class.

 - It is the nested method calls that accesses the value of the `$name` property in the `display()` method of the `Person` class.

 - It is the chained method calls that displays the value of the `changeName()` method and the string `My name is Charles.`.

 - It is the chained method calls that removes the value `Charles` from `$name` and displays the string `My name is Charles.`.

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
    $person = new Person();
    $person->changeName("Charles");
    $person->display();
?>
```
/// type=SS, id=82a7917f-e3ad-460b-a155-cbff27019808, answer=[5]

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
    $person = new Person();
    $person->changeName("Charles");
    $person->display();
?>
```
/// type=SS, id=d0c4b9ed-8179-4318-9699-152838133b50, answer=[5]

In the statement `$person->changeName("Charles");` on line 17, replace the argument `Charles` with `Princess`. Execute the program. What is its output?

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
    $person = new Person();
    $person->changeName("Princess");
    $person->display();
?>
```
/// type=SS, id=fec0a9b0-a2ef-471f-ba0f-be39700567b3, answer=[3]

In the statement `$person->display();` on line 18, replace `display()` with `name`. Execute the program. What is its output?

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
    $person = new Person();
    $person->changeName("Princess");
    $person->name;
?>
```
/// type=SS, id=e8801346-222f-46ab-aeab-e15f86dbd17f, answer=[2]

Add the `echo` construct before `$person->name` on line 18. Execute the program. What is its output?

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
    $person = new Person();
    $person->changeName("Princess");
    echo $person->name;
?>
```
/// type=SS, id=bcec4224-0e1d-44d0-99ca-b6fe3ddeaf95, answer=[3]

Remove the statement `$person->changeName("Princess");` on line 17. Execute the program. What is its output?

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
    $person = new Person();
    echo $person->name;
?>
```
/// type=MS, id=7b4ca647-ed27-459e-b8bd-dbf356e0c2e0, answer=[1,5]

Why is there no output displayed?

 - On line 4, the `$name` property is not yet initialized. 

 - On line 17, the statement `echo $person->name;` is invalid.

 - On line 4, the property definition `public $name;` is invalid.

 - There is no semicolon `;` at the end of the statement on line 4.

 - There is no default value assigned to the `$name` property on line 4.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=d912c77a-4dc4-49de-8c4d-fd431ac03cc0, answer=[5]

Which statement best describes a method?

 - It is the value of a class.

 - It is an instance of a class.

 - It is a variable defined inside a class.

 - It is an actual representation of a class.

 - It is a function inside a class that performs a specific action.


/// type=MS, id=2ab407c9-d242-456d-b0aa-47f0bc53c638, answer=[4,5]

Which statements are true about the `$this` pseudo-variable?

 - It creates a method in a class.

 - It returns a method value in a class.

 - It sets the value of a method in a class.

 - It represents the current instance of a class.

 - It accesses the properties or methods within a class. 


/// type=SS, id=65ca1ff6-7198-49e4-b5a7-b617861e1e44, answer=[3]

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
    $person = new Person();
    $person->changeName();
    echo $person->name;
?>
```
/// type=SS, id=93661dc6-e832-45e9-9b9d-80151459d5ea, answer=[4]

Execute the program. What is its output?

 - It prints `Diana`.

 - It prints `Charles`.

 - It prints `$newName`.

 - It produces an error.

 - No output is displayed.


/// type=MS, id=a1f556c0-81c5-4edd-8083-166507165087, answer=[1,5]

What are the error messages?

 - Undefined variable: `newName` on line number 8

 - syntax error, unexpected `'$person'` (T_VARIABLE) on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 12

 - Uncaught Error: Call to undefined function `changeName()` on line number 12

 - Missing argument `1` for `Person::changeName()` on line 12 and defined on line number 6


/// type=SS, id=f3e28a71-82fa-4b1e-b43c-3d5f997014fc, answer=[5]

Which statement best describes the error?

 - There is no semicolon `;` at the end of the statement on line 11.

 - There is no default value assigned to the `$name` property on line 4.

 - There are no parentheses `()` after the `changeName` method call on line 12.

 - There is no object operator `->` between `$person` and `changeName()` on line 12.

 - There is no argument specified in the `changeName()` method call of `$person` on line 12.

:::


/// type=CR, id=bc7fb821-4dfe-421a-b1cc-9f8790366d71, answer=[tests/Methods/bc7fb821-4dfe-421a-b1cc-9f8790366d71]

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
    $person = new Person();
    $person->changeName();
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

        public function changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $person = new Person();
    person->changeName("Charles");
    echo $person->name;
?>
```
/// type=SS, id=ce37f84c-4cdb-4954-a04d-c1aaf26bad46, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `newName` on line number 8

 - syntax error, unexpected `'$person'` (T_VARIABLE) on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 12

 - Uncaught Error: Call to undefined function `changeName()` on line number 12

 - Missing argument `1` for `Person::changeName()` on line 12 and defined on line number 6


/// type=MS, id=744728ce-0694-4b77-92df-070a8a827e6a, answer=[1,2]

Which statements correctly describe the error?

 - On line 12, the `person` object does not start with a dollar sign `$`.

 - On line 12, the statement `person->changeName("Charles");` is invalid.

 - There are no parentheses `()` after the `changeName` method call on line 12.

 - There is no object operator `->` between `$person` and `changeName()` on line 12.

 - There is no argument specified in the `changeName()` method call of `$person` on line 12.

:::


/// type=CR, id=8d4fce8c-033b-4194-8c53-32e481f8baca, answer=[tests/Methods/8d4fce8c-033b-4194-8c53-32e481f8baca]

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
    $person = new Person();
    person->changeName("Charles");
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

        public changeName($newName)
        {
            $this->name = $newName;
        }
    }
    $person = new Person();
    $person->changeName("Charles");
    echo $person->name;
?>
```
/// type=SS, id=f574f0a1-3dc2-47a9-bde9-050931e6186c, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `')'` on line number 7

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 8

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 6

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting '(' on line number 6

 - syntax error, unexpected `'changeName'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=MS, id=e9dd312c-47d8-4ed6-aa99-d79756850932, answer=[4,5]

Which statements correctly describe the error?

 - There is no parameter specified in the method definition on line 6.

 - There are no parentheses `()` after the `changeName` method call on line 12.

 - On line 6, the parameter `$newName` in the `changeName()` method is invalid.

 - On line 6, the method definition `public changeName($newName)` is invalid.

 - There is no `function` keyword between `public` and `changeName($newName)` on line 6.

:::


/// type=CR, id=d98ba317-8907-4227-ac75-14a6ee9d69e2, answer=[tests/Methods/d98ba317-8907-4227-ac75-14a6ee9d69e2]

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
    $person = new Person();
    $person->changeName("Charles");
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

        public function changeName($newName)
        {
            $this->name = $newName;
        }

        public function display()
        {
            echo "My name is " . $this->name . ".";
        }
    }
    $person = new Person();
    $person->changeName("Charles");
    $person->display;
?>
```
/// type=SS, id=b06208f8-8db5-43af-871d-f3bfbbab98af, answer=[1]

Execute the program. What is the error message?

 - Undefined property: `Person::$display` on line number 18

 - syntax error, unexpected `'new'` (T_NEW) on line number 16

 - Undefined variable: `personchangeName` on line number 17

 - syntax error, unexpected `'$person'` (T_VARIABLE) on line number 18

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `','` or `';'` on line number 13


/// type=MS, id=1c34306e-be0d-4908-a0ee-10c821378d16, answer=[1,3]

Which statements correctly describe the error?

 - On line 18, the statement `$person->display;` is invalid.

 - On line 18, the `person` object does not start with a dollar sign `$`.

 - There are no parentheses `()` after `$person->display` on line 18.

 - There is no object operator `->` between `$person` and `display` on line 18.

 - There is no argument specified in the `display()` method call of `$person` on line 18.

:::


/// type=CR, id=01001ba3-668a-46b2-ac04-b837dbeb8406, answer=[tests/Methods/01001ba3-668a-46b2-ac04-b837dbeb8406]

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
    $person = new Person();
    $person->changeName("Charles");
    $person->display;
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
    $person = new Person();
    $person->changeName("Charles");
    $person->display();
?>
```
/// type=SS, id=c4687122-3ec0-484d-ad66-6e1594879920, answer=[3]

Execute the program. What is the error message?

 - Use of undefined constant `name` - assumed `'name'` on line number 13

 - Object of class `Person` could not be converted to string on line number 13

 - syntax error, unexpected `'name'` (T_STRING), expecting `','` or `';'` on line number 13

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `','` or `';'` on line number 13

 - syntax error, unexpected `'"."'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 13


/// type=MS, id=b6adbc37-8847-44fc-bfb9-928d32089236, answer=[1,3]

Which statements correctly describe the error?

 - On line 13, `$this name` in the `echo` statement is invalid.

 - On line 13, `$this name` is not enclosed in double quotes `""`.

 - There is no object operator `->` between `$this` and `name` on line 13.

 - On line 13, the `this` pseudo-variable does not start with a dollar sign `$`.

 - There is no concatenation operator `.` between `$this` and `name` on line 13.

:::


/// type=CR, id=f568ae92-b9b0-45f3-9932-80dc75e7177b, answer=[tests/Methods/f568ae92-b9b0-45f3-9932-80dc75e7177b]

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
    $person = new Person();
    $person->changeName("Charles");
    $person->display();
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
    $person = new Person();
    $person->changeName("Charles")->display();
?>
```
/// type=SS, id=bc052b29-662e-494b-8852-b24fee29d416, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `person` on line number 17

 - Uncaught Error: Function name must be a string on line number 17

 - Uncaught Error: Call to a member function `display()` on null on line number 17.

 - Missing argument `1` for `Person::changeName()` on line 17 and defined on line number 6 

 - syntax error, unexpected `'"Charles"'` (T_CONSTANT_ENCAPSED_STRING) on line number 17


/// type=MS, id=8929fc03-abcc-41e9-accb-d0b9a413c878, answer=[2,3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 16.

 - Method chaining requires a method to have the `return $this;` statement.

 - There is no `return $this;` statement in the `changeName()` method on line 6.

 - On line 17, the chained method calls `$person->changeName("Charles")->display();` is invalid.

 - The `changeName()` method does not allow method chaining because it does not return the current object. 

:::


/// type=CR, id=67265570-c30d-4094-9900-c3c4ce96b7ba, answer=[tests/Methods/67265570-c30d-4094-9900-c3c4ce96b7ba]

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
    $person = new Person();
    $person->changeName("Charles")->display();
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
    $person = new Person();
    $person->changeName("Charles");
    $person->display();
?>
```
/// type=SS, id=4d717953-942a-4182-b7d0-0c5a8214335d, answer=[5]

Execute the program. What is its output?

 - It prints `Charles`.

 - It produces an error.

 - No output is displayed.

 - It prints `My name is Diana.`.

 - It prints `My name is Charles.`.


/// type=MS, id=91923e15-9bf5-4cfe-b114-1b7015af54b5, answer=[2,3]

Remove the object operator `->` from the statement `$person->display();` on line 18. Execute the program. What are the error messages?

 - Undefined variable: `newName` on line number 8

 - Undefined variable: `persondisplay` on line number 18

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
    $person = new Person();
    $person->changeName("Charles");
    $persondisplay();
?>
```
/// type=SS, id=218a0ffa-e8d5-491f-ac2c-dec804b2e542, answer=[1]

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
    $person = new Person();
    $person->changeName("Charles");
    $persondisplay();
?>
```
/// type=SS, id=8013100d-7782-455a-80c3-01222bcda03d, answer=[3]

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
    $person = new Person();
    $person->changeName("Charles");
    $persondisplay();
?>
```
/// type=SS, id=1a6664be-4cc4-4be3-a0da-14984acce0ff, answer=[3]

In the property definition `public $name = "Diana";` on line 4, remove the dollar sign `$` from `$name`. Execute the program. What is the error message?

 - syntax error, unexpected `'"'`, expecting `','` or `';'` on line number 4

 - syntax error, unexpected `'public'` (T_PUBLIC), expecting `'{'` on line number 4

 - syntax error, unexpected `'name'` (T_STRING), expecting variable (T_VARIABLE) on line number 4

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 -  syntax error, unexpected `'"Diana"'` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 4

:::


/// type=CR, id=98f22e4e-515f-434f-8929-924b5da8bbc5, answer=[tests/Methods/98f22e4e-515f-434f-8929-924b5da8bbc5]

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
    $person = new Person();
    $person->changeName("Charles");
    $persondisplay();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=2a4805e4-5361-4d08-adb9-2312f0ae5bc6, answer=[tests/Methods/2a4805e4-5361-4d08-adb9-2312f0ae5bc6]

Write a program that adds and manipulates the methods of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:
 
 1. A property definition of a class property `$type` with the value `Dog`. 
 
 2. A method definition for `changeType()` method with a parameter named `$newType`. Inside the `changeType()` method body, add a statement that assigns the value of `$newType` to the `$type` property of the `Animal` class. 
 
 3. Add another method definition for a method named `display()`. Inside the `display()` method body, add an `echo` statement to display the string `"The animal type is " . $this->type . "."`.
 
After the class declaration, add the following:

 1. A statement that creates the `$pet` object an instance of the `Animal` class. 
 
 2. A statement that calls the `changeType()` method of the `$pet` object passing the argument `Cat`. 
 
 3. Add another statement that calls the `display()` method of the `$pet` object.
 
Run the program to view the output.

```php
<?php



?>
```

+++
