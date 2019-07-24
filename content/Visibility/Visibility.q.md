# Visibility

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(15);
$pObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `Anna`.

 - No output is displayed.

 - It prints `Anna is years old.`.

 - It prints `Anna is 15 years old.`.


/// type=MS, answer=[1,2]

Which of the following are properties?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `$pObject`


/// type=MS, answer=[2,3,4,5]

Which of the following are methods?

 - `Person()`

 - `getAge()`

 - `setAge()`

 - `display()`

 - `checkAge()`


/// type=SS, answer=[3]

Which of the following is a pseudo-variable?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `$pObject`


/// type=MS, answer=[2,4]

Which of the following are visibility keywords?

 - `$this`

 - `public`

 - `Person`

 - `private`

 - `$pObject`


/// type=SS, answer=[4]

In the property definition `private $age;` on line 5, what does `private` do?

 - It accesses the `$age` property of the `Person` class.

 - It sets the accessibility of the `$age` property everywhere.

 - It declares and initializes the `$age` property of the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class and its child or parent classes.


/// type=MS, answer=[2,4]

Which statements correctly describe the code on line 5?

 - It calls the `$age` property of the `Person` class.

 - It declares the `$age` property of the `Person` class.

 - It accesses the `$age` property of the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class and its child or parent classes.


/// type=SS, answer=[4]

In the statement `if ($this->checkAge($newAge))` on line 9, what is `$newAge`?

 - It is a property.

 - It is a parameter.

 - It is an operator.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, answer=[1]

In the statement `if ($this->checkAge($newAge))` on line 9, what is `checkAge()`?

 - It is a method.

 - It is a property.

 - It is a parameter.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, answer=[2]

Which statement best describes `$this->checkAge($newAge)` on line 9?

 - It returns the argument `$newAge` in the `checkAge()` method of the `Person` class.

 - It calls the `checkAge()` method of the `Person` class passing the argument `$newAge`.

 - It creates the `checkAge()` method of the `Person` class with the parameter `$newAge`.

 - It removes the argument `$newAge` from the `checkAge()` method of the `Person` class.

 - It accesses the argument `$newAge` from the `checkAge()` method of the `Person` class.


/// type=MS, answer=[1,2,5]

On lines 9, 10, and 11, what does the `if` statement do?

 - It evaluates the truthiness of the method call `$this->checkAge($newAge)` on line 9.

 - It executes the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It executes the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `false`. 

 - It does not execute the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It does not execute the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `false`. 


/// type=MS, answer=[1,2,3,4]

Which statements correctly describe the `checkAge()` method of the `Person` class?

 - It is accessible only within the `Person` class.

 - It returns `true` if the value of `$age` is greater than `0`.

 - It is not accessible by any instance of the `Person` class.

 - It returns `false` if the value of `$age` is less than or equal to `0`.

 - It is accessible everywhere from inside and outside of the `Person` class.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(15);
$pObject->display();
?>
```
/// type=SS, answer=[4]

In the method call `$pObject->setAge(15);` on line 33, replace the argument `15` with `-15`. Execute the program. What is its output?

 - It prints `-15`.

 - It prints `Anna`.

 - No output is displayed.

 - It prints `Anna is years old.`.

 - It prints `Anna is -15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(-15);
$pObject->display();
?>
```
/// type=MS, answer=[1,4,5]

Why is there no value of the `$age` property displayed?

 - There is no value assigned to the `$age` property of `$pObject`.

 - There is no semicolon `;` at the end of the statement on line 33.

 - The `setAge()` method is accessible only within the `Person` class.

 - On line 33, the argument `-15` in the `setAge()` method is less than `0`.

 - The `setAge()` method only assigns values greater than `0` to the `$age` property of `$pObject`.


/// type=SS, answer=[1]

Which property is accessible only within the `Person` class?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `$pObject`


/// type=SS, answer=[5]

Which method is accessible only within the `Person` class?

 - `Person()`

 - `getAge()`

 - `setAge()`

 - `display()`

 - `checkAge()`


/// type=SS, answer=[4]

In the method call `$pObject->setAge(-15);` on line 33, replace the argument `-15` with `45`. Execute the program. What is its output?

 - It prints `45`.

 - It prints `-15`.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.

 - It prints `Anna is -15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(45);
$pObject->display();
?>
```
/// type=SS, answer=[1]

On line 34, replace the method call `$pObject->display();` with `echo $pObject->getAge();`. Execute the program. What is its output?

 - It prints `45`.

 - It prints `-15`.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.

 - It prints `Anna is -15 years old.`.

::: 


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(45);
echo $pObject->getAge();
?>
```
/// type=SS, answer=[2]

In the statement `echo $pObject->getAge();` on line 34, replace `getAge()` with `name`. Execute the program. What is its output?

 - It prints `45`.

 - It prints `Anna`.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.

 - It prints `Anna is -15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(45);
echo $pObject->name;
?>
```
/// type=SS, answer=[3]

In the statement `echo $pObject->name;` on line 34, replace `name` with `age`. Execute the program. What is its output?

 - It prints `45`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(45);
echo $pObject->age;
?>
```
/// type=SS, answer=[3]

In the method call `$pObject->setAge(45);` on line 33, replace `setAge` with `checkAge`. Execute the program. What is its output?

 - It prints `45`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[5]

Which statement is true about visibility?

 - It adds a property and a method to a class.

 - It declares a property and a method to a class.

 - It creates a new object as an instance of a class.

 - It accesses the properties and methods within a class. 

 - It defines the accessibility of a property and a method of a certain class.


/// type=SS, answer=[1]

What does the `public` visibility keyword do?

 - It sets the accessibility of the class properties and methods everywhere.

 - It sets the accessibility of the properties and methods only within a class itself.

 - It sets the accessibility of the properties and methods only within the object of a class.

 - It sets the accessibility of the properties and methods only within a class itself and its child or parent classes.

 - It sets the accessibility of the properties and methods only to the instance of a class and its child or parent classes.


/// type=SS, answer=[2]

Which statement best describes the `private` visibility keyword?

 - It sets the accessibility of the class properties and methods everywhere.

 - It sets the accessibility of the properties and methods only within a class itself.

 - It sets the accessibility of the properties and methods only within the object of a class.

 - It sets the accessibility of the properties and methods only within a class itself and its child or parent classes.

 - It sets the accessibility of the properties and methods only to the instance of a class and its child or parent classes.


/// type=SS, answer=[4]

Which statement is true about the `protected` keyword?

 - It sets the accessibility of the class properties and methods everywhere.

 - It sets the accessibility of the properties and methods only within a class itself.

 - It sets the accessibility of the properties and methods only within the object of a class.

 - It sets the accessibility of the properties and methods only within a class itself and its child or parent classes.

 - It sets the accessibility of the properties and methods only to the instance of a class and its child or parent classes.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->age = 12;
$pObject->display();
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `12`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 12 years old.`.


/// type=SS, answer=[4]

What is the error message?

 - Undefined variable: `age` on line number 33

 - Uncaught Error: Cannot access empty property on line number 33

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 33

 - Uncaught Error: Cannot access private property `Person::$age` on line number 33

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 33


/// type=MS, answer=[2,3,5]

Which statements correctly describe the error?

 - There is no object operator `->` between `$pObject` and `age` on line 33.

 - On line 33, the assignment statement `$pObject->age = 12;` is invalid.

 - The private property `$age` is not accessible outside of the `Person` class.

 - There is no semicolon `;` at the end of the statement `$pObject->age = 12` on line 33.

 - `$pObject` is not allowed to access and assign the value `12` to the private property `$age` of the `Person` class.

:::


/// type=CR, answer=[tests/Visibility/IncorrectAccessToPrivatePropertyTest.php]

Correct the code so that it outputs the string `Anna is 12 years old.`.

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->age = 12;
$pObject->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(12);
$pObject->age;
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `newAge` on line number 9

 - Use of undefined constant `age` - assumed `'age'` on line number 34

 - syntax error, unexpected `'$pObject'` (T_VARIABLE) on line number 34

 - Uncaught Error: Cannot access private property `Person::$age` on line number 34

 - Missing argument `1` for `Person::setAge()`, called on line 33 and defined on line number 7


/// type=MS, answer=[1,3,5]

Which statements correctly describe the error?

 - On line 34, the statement `$pObject->age;` is invalid.

 - There is no object operator `->` between `$pObject` and `age` on line 34.

 - The private property `$age` is not accessible outside of the `Person` class.

 - There is no semicolon `;` at the end of the statement `$pObject->age` on line 34.

 - `$pObject` is not allowed to access the private property `$age` of the `Person` class.

:::


/// type=CR, answer=[tests/Visibility/IncorrectAccessToAgePropertyTest.php]

Correct the code so that it outputs the string `Anna is 12 years old.`.

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(12);
$pObject->age;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->checkAge(12);
$pObject->display();
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Use of undefined constant `age` - assumed `'age'` on line number 34

 - Uncaught Error: Call to private method `Person::display()` on line number 34

 - Uncaught Error: Call to private method `Person::checkAge()` on line number 33

 - Uncaught Error: Cannot access private property `Person::$age` on line number 34

 - Missing argument `1` for `Person::setAge()`, called on line 33 and defined on line number 7


/// type=MS, answer=[1,3,5]

Which statements correctly describe the error?

 - On line 33, the method call `$pObject->checkAge(12);` is invalid.

 - There are no parentheses `()` after the `checkAge` method call on line 33.

 - The private method `checkAge()` is not accessible outside of the `Person` class.

 - There is no object operator `->` between `$pObject` and `checkAge()` on line 33.

 - `$pObject` is not allowed to access the private method `checkAge()` of the `Person` class.

:::


/// type=CR, answer=[tests/Visibility/IncorrectAccessToCheckAgePrivateMethodTest.php]

Correct the code so that it outputs the string `Anna is 12 years old.`.

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->checkAge(12);
$pObject->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge();
$pObject->display();
?>
```
/// type=MS, answer=[1,5]

Execute the program. What are the error messages?

 - Undefined variable: `newAge` on line number 9

 - Uncaught Error: Call to private method `Person::display()` on line number 34

 - Uncaught Error: Call to private method `Person::checkAge()` on line number 33

 - Uncaught Error: Cannot access private property `Person::$age` on line number 34

 - Missing argument `1` for `Person::setAge()`, called on line 33 and defined on line number 7


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 33, the method call `$pObject->setAge();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 33.

 - There are no parentheses `()` after the `setAge` method call on line 33.

 - There is no object operator `->` between `$pObject` and `setAge()` on line 33.

 - There is no argument specified in the `setAge()` method call of `$pObject` on line 33.

:::


/// type=CR, answer=[tests/Visibility/MissingArgumentOnSetAgeMethodTest.php]

Correct the code so that it outputs the string `Anna is 45 years old.`.

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge();
$pObject->display();
?>
```


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = new Person();
$pObject->setAge(45);
$pObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `45`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.


/// type=SS, answer=[2]

Remove the `new` keyword from the statement `$pObject = new Person();` on line 32. Execute the program. What is the error message?

 - syntax error, unexpected `'return'` (T_RETURN) on line number 22

 - Uncaught Error: Call to undefined function `Person()` on line number 32

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `'('` on line number 9

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `';'` on line number 16

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = Person();
$pObject->setAge(45);
$pObject->display();
?>
```
/// type=SS, answer=[1]

Remove the `if` construct on line 21, Execute the program. What is the error message?

 - syntax error, unexpected `'return'` (T_RETURN) on line number 22

 - Uncaught Error: Call to undefined function `Person()` on line number 32

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `'('` on line number 9

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `';'` on line number 16

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = Person();
$pObject->setAge(45);
$pObject->display();
?>
```
/// type=SS, answer=[4]

Remove the `$this` pseudo-variable from the statement `return $this->age;` on line 16. Execute the program. What is the error message?

 - syntax error, unexpected `'return'` (T_RETURN) on line number 22

 - Uncaught Error: Call to undefined function `Person()` on line number 32

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `'('` on line number 9

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `';'` on line number 16

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return ->age;
    }

    private function checkAge($age)
    {
        ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = Person();
$pObject->setAge(45);
$pObject->display();
?>
```
/// type=SS, answer=[5]

Remove the `private` keyword from the property definition `private $age;` on line 5. Execute the program. What is the error message?

 - syntax error, unexpected `'return'` (T_RETURN) on line number 22

 - Uncaught Error: Call to undefined function `Person()` on line number 32

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `'('` on line number 9

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `';'` on line number 16

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

:::


/// type=CR, answer=[tests/Visibility/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `Anna is 45 years old.`.

```php
<?php
class Person
{
    public $name = "Anna";
     $age;

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return ->age;
    }

    private function checkAge($age)
    {
        ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$pObject = Person();
$pObject->setAge(45);
$pObject->display();
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Visibility/CreateClassWithPrivatePropertyAndMethodTest.php]

Write a program that adds and manipulates the private properties and methods of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add a property definition of a class property `$type` with the value `Dog` using the `private` visibility keyword. Use the `private` visibility keyword to define another class property named `$age`. Next, add a `public` method named `changeType()` with a parameter `$newType`. Inside the `changeType()` method body, add a statement that assigns the value of `$newType` to the `$type` property of the `Animal` class. Add a `private` method named `isValid()` with a parameter `$value`. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. Add another `public` methods `display()`, `getType()`, `getAge()`, and `setAge()` with a parameter `$newAge`. Inside the `getType()` method body, add a statement that returns the value of the `$type` property. Inside the `getAge()` method body, add a statement that returns the value of the `$age` property. Inside the `display()` method body, add an `echo` statement to display the string `"The " . $this->getType() . " is " . $this->getAge() . " years old".`. Inside the `setAge()` method body, add an `if` statement that evaluates `$newAge` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$newAge` to the `$age` property of the `Animal` class. After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class. Add a statement that calls the `changeType()` method of the `$pet` object passing the argument `Cat`. Add a statement that calls the `setAge()` method of the `$pet` object passing the argument `1.5`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.  

```
<?php




?>
```

+++
