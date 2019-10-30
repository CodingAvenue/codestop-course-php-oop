# Encapsulation

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(12);
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `12`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 12 years old.`.


/// type=MS, answer=[1,2]

Which of the following are properties?

 - `$age`

 - `$name`

 - `getAge()`

 - `getName()`

 - `$personObject`


/// type=MS, answer=[2,3,4]

Which of the following are methods?

 - `$name`

 - `getAge()`

 - `setName()`

 - `checkAge()`

 - `$personObject`


/// type=SS, answer=[4]

Which of the following is a private method?

 - `$name`

 - `getAge()`

 - `setName()`

 - `checkAge()`

 - `$personObject`


/// type=MS, answer=[3,4]

Which of the following are visibility keywords?

 - `new`

 - `class`

 - `public`

 - `private`

 - `function`


/// type=MS, answer=[1,4]

In the statement `private $name = "Anna";` on line 4, what does `private` do?

 - It encapsulates the `$name` property of the `Person` class.

 - It sets the accessibility of the `$name` property everywhere.

 - It declares and initializes the `$name` property of the `Person` class.

 - It sets the accessibility of the `$name` property only within the `Person` class.

 - It sets the accessibility of the `$name` property only within the `Person` class and its child or parent classes.


/// type=MS, answer=[2,4]

Which statements correctly describe `private $age;` on line 5?

 - It calls the `$age` property of the `Person` class.

 - It declares the `$age` property of the `Person` class.

 - It accesses the `$age` property of the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class and its child or parent classes.


/// type=MS, answer=[4,5]

Which statements correctly describe the `setName()` and `setAge()` methods?

 - These methods are accessible only within the `Person` class.

 - These are the `public` methods that set the accessibility of the `$name` and `$age` properties in the `Person` class.

 - These methods set the accessibility of the `$name` and `$age` properties only within the `Person` class and its child or parent classes.

 - These are the `public` methods of the `Person` class that allow objects to change the values of their `private` properties `$name` and `$age`.

 - These are the `public` methods specified for objects to use when changing the values of the `private` properties `$name` and `$age` outside of the `Person` class.


/// type=MS, answer=[4,5]

Which statements correctly describe the `getName()` and `getAge()` methods?

 - These methods are accessible only within the `Person` class.

 - These are the `public` methods that set the accessibility of the `$name` and `$age` properties in the `Person` class.

 - These methods set the accessibility of the `$name` and `$age` properties only within the `Person` class and its child or parent classes.

 - These are the `public` methods of the `Person` class that allow objects to access the values of their `private` properties `$name` and `$age`.

 - These are the `public` methods specified for objects to use when accessing the values of the `private` properties `$name` and `$age` outside of the `Person` class.


/// type=MS, answer=[1,2,3,4]

Which statements correctly describe the `checkAge()` method?

 - It is accessible only within the `Person` class.

 - It returns `true` if the value of `$age` is greater than `0`.

 - It is not accessible by any instance of the `Person` class.

 - It returns `false` if the value of `$age` is less than or equal to `0`.

 - It is accessible everywhere from inside and outside of the `Person` class.


/// type=SS, answer=[2]

What does the statement `$personObject->setAge(12);` do?

 - It returns the argument `12` in the `setAge()` method of `$personObject`.

 - It calls the `setAge()` method of `$personObject` passing the argument `12`.

 - It creates the `setAge()` method of `$personObject` with the parameter `12`.

 - It removes the argument `12` from the `setAge()` method of `$personObject`.

 - It accesses the argument `12` from the `setAge()` method of `$personObject`.


/// type=MS, answer=[4,5]

In the `echo` statement on line 40, what does `$personObject->getName()` do?

 - It creates the `getName()` method of the `Person` class.

 - It removes the `getName()` method of the `Person` class.

 - It displays the `getName()` method of the `Person` class.

 - It accesses the value of the private property `$name` outside of the `Person` class.

 - It calls the `getName()` method of `$personObject` to access the value of the `$name` property.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(12);
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=SS, answer=[3]

Replace the statement `$personObject->setAge(12);` on line 39 with `$personObject->age = 12;`. Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `John`.

 - It produces an error.

 - It prints `Anna is 15 years old.`.

 - It prints `John is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->age = 12;
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=MS, answer=[3,4,5]

Why does setting the value of the `$age` property of `$personObject` using the statement `$personObject->age = 12;` produce an error?

 - There is no `$age` property defined in the `Person` class.

 - `$personObject` is not declared as the instance of the `Person` class.

 - The private property `$age` is not accessible outside of the `Person` class.

 - The `$age` property is encapsulated and accessible only inside the `Person` class.

 - `$personObject` is not allowed to directly access the `$age` property of the `Person` class.


/// type=SS, answer=[4]

In the statement `$personObject->age = 12;` on line 39, replace `age = 12` with `setAge(15)`. Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `John`.

 - It produces an error.

 - It prints `Anna is 15 years old.`.

 - It prints `John is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=SS, answer=[5]

Add the statement `$personObject->setName("John");` before the `echo` statement on line 40. Execute the program. What is its output? 

 - It prints `Anna`.

 - It prints `John`.

 - It produces an error.

 - It prints `Anna is 15 years old.`.

 - It prints `John is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName("John");
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=SS, answer=[3]

In the `echo` statement on line 41, replace `$personObject->getName()` with `$personObject->name`. Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName("John");
echo $personObject->name . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=MS, answer=[3,4,5]

Why does accessing the `$name` property of `$personObject` using `$personObject->name` produce an error?

 - There is no `$name` property defined in the `Person` class.

 - `$personObject` is not declared as the instance of the `Person` class.

 - The private property `$name` is not accessible outside of the `Person` class.

 - The `$name` property is encapsulated and accessible only inside the `Person` class.

 - `$personObject` is not allowed to directly access the `$name` property of the `Person` class.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[2,4,5]

Which statements are true about encapsulation?

 - It is a process of creating a new object of a class.

 - It restricts other objects to directly access the properties of a certain class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a way of wrapping the properties and methods of a class together as a single unit.

 - It hides the internal implementation of an object from other objects for protection purposes.


/// type=MS, answer=[3,5]

Which statements are the main purpose of encapsulation?

 - It improves code readability.

 - It removes unnecessary methods.

 - It protects the internal state of an object.

 - It shortens the implementation of the code.

 - It reduces software development complexity.


/// type=SS, answer=[2]

Which visibility keyword is used to encapsulate properties and methods in a class?

 - `public`

 - `private`

 - `default`

 - `friendly`

 - `protected`


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
     $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(12);
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
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

 - Undefined variable: `newName` on line number 9

 - Uncaught Error: Cannot access private property `Person::$age` on line number 39

 - Uncaught Error: Cannot access private property `Person::$name` on line number 41

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - Missing argument `1` for `Person::setName()`, called on line number 40 and defined on line number 7


/// type=MS, answer=[3,4]

Which statements correctly describe the error?

 - There is a dollar sign `$` in the `name` property on line 4.

 - There is no `private` visibility keyword before `$age` on line 5.

 - On line 4, the property definition `$name = "Anna";` is invalid.

 - There is no `private` visibility keyword before `$name` on line 4.

 - There is no assignment operator `=` between `$name` and `Anna` on line 4.

:::


/// type=CR, answer=[tests/Encapsulation/MissingPrivateKeywordTest.php]

Correct the code so that it outputs the string `Anna is 12 years old.`.

```php
<?php
class Person
{
     $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(12);
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->age = 12;
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `newName` on line number 9

 - Uncaught Error: Cannot access private property `Person::$age` on line number 39

 - Uncaught Error: Cannot access private property `Person::$name` on line number 41

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - Missing argument `1` for `Person::setName()`, called on line number 40 and defined on line number 7


/// type=MS, answer=[2,3,4,5]

Which statements correctly describe the error?

 - There is no dollar sign `$` in the `age` property on line 39.

 - On line 39, the statement `$personObject->age = 12;` is invalid.

 - The private property `$age` is not accessible outside of the `Person` class.

 - The `$age` property is encapsulated and accessible only inside the `Person` class.

 - `$personObject` is not allowed to directly access the `$age` property of the `Person` class.

:::


/// type=CR, answer=[tests/Encapsulation/IncorrectAssignmentStatementTest.php]

Correct the code so that it outputs the string `Anna is 12 years old.`.

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->age = 12;
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName("John");
echo $personObject->name . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `newName` on line number 9

 - Uncaught Error: Cannot access private property `Person::$age` on line number 39

 - Uncaught Error: Cannot access private property `Person::$name` on line number 41

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - Missing argument `1` for `Person::setName()`, called on line number 40 and defined on line number 7


/// type=MS, answer=[1,2,3,4]

Which statements correctly describe the error?

 - In the `echo` statement on line 41, `$personObject->name` is invalid.

 - The private property `$name` is not accessible outside of the `Person` class.

 - The `$name` property is encapsulated and accessible only inside the `Person` class.

 - `$personObject` is not allowed to directly access the `$name` property of the `Person` class.

 - There are no parentheses `()` after `$personObject->name` in the `echo` statement on line 41.

:::


/// type=CR, answer=[tests/Encapsulation/IncorrectNamePropertyAccessTest.php]

Correct the code so that it outputs the string `John is 15 years old.`.

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName("John");
echo $personObject->name . " is " . $personObject->getAge() . " years old.";
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName();
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=MS, answer=[1,5]

Execute the program. What are the error messages?

 - Undefined variable: `newName` on line number 9

 - Uncaught Error: Cannot access private property `Person::$age` on line number 39

 - Uncaught Error: Cannot access private property `Person::$name` on line number 41

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - Missing argument `1` for `Person::setName()`, called on line number 40 and defined on line number 7


/// type=MS, answer=[2,3,4]

Which statements correctly describe the error?

 - There is no `setName()` method defined in the `Person` class.

 - On line 40, the statement `$personObject->setName();` is invalid.

 - There is no argument specified in the `setName()` method on line 40.

 - The `setName()` method of the `Person` class requires an argument when called.

 - `$personObject` is not allowed to access the `setName()` method of the `Person` class.

:::


/// type=CR, answer=[tests/Encapsulation/MissingArgumentOnSetNameTest.php]

Correct the code so that it outputs the string `John is 15 years old.`.

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName();
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName("John");
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 15 years old.`.


/// type=SS, answer=[2]

In the `echo` statement on line 41, replace `$personObject->getAge()` with `$personObject->age`. Execute the program. What is the error message?

 - Undefined variable: `newAge` on line number 14

 - Uncaught Error: Cannot access private property `Person::$age` on line number 41

 - Uncaught Error: Cannot access private property `Person::$name` on line number 40

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - Missing argument `1` for `Person::setAge()`, called on line number 39 and defined on line number 12

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->setName("John");
echo $personObject->getName() . " is " . $personObject->age . " years old.";
?>
```
/// type=SS, answer=[3]

In the statement `$personObject->setName("John");` on line 40, replace `setName("John")` with `name = "John"`. Execute the program. What is the error message?

 - Undefined variable: `newAge` on line number 14

 - Uncaught Error: Cannot access private property `Person::$age` on line number 41

 - Uncaught Error: Cannot access private property `Person::$name` on line number 40

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - Missing argument `1` for `Person::setAge()`, called on line number 39 and defined on line number 12

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge(15);
$personObject->name = "John";
echo $personObject->getName() . " is " . $personObject->age . " years old.";
?>
```
/// type=MS, answer=[1,3,5]

In the statement `$personObject->setAge(15);` on line 39, remove the argument `15` from `setAge()`. Execute the program. What are the error messages?

 - Undefined variable: `newAge` on line number 14

 - Uncaught Error: Cannot access private property `Person::$age` on line number 41

 - Uncaught Error: Cannot access private property `Person::$name` on line number 40

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

 - Missing argument `1` for `Person::setAge()`, called on line number 39 and defined on line number 12

:::


/// type=CR, answer=[tests/Encapsulation/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `John is 15 years old.`.

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
}

$personObject = new Person();
$personObject->setAge();
$personObject->name = "John";
echo $personObject->getName() . " is " . $personObject->age . " years old.";
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Encapsulation/CreateClassWithEncapsulatedPropertiesAndMethodTest.php]

Write a program that uses the `private` visibility keyword to encapsulate the properties and methods of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add a property definition of a class property `$type` with the value `Dog` using the `private` visibility keyword. Use the `private` visibility keyword to define another class property named `$age`. Next, add a `public` method named `changeType()` with a parameter `$newType`. Inside the `changeType()` method body, add a statement that assigns the value of `$newType` to the `$type` property of the `Animal` class. Add a `private` method named `isValid()` with a parameter `$value`. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. Add another `public` methods `display()`, `getType()`, `getAge()`, and `setAge()` with a parameter `$newAge`. Inside the `getType()` method body, add a statement that returns the value of the `$type` property. Inside the `getAge()` method body, add a statement that returns the value of the `$age` property. Inside the `display()` method body, add an `echo` statement to display the string `"The " . $this->getType() . " is " . $this->getAge() . " years old."`. Inside the `setAge()` method body, add an `if` statement that evaluates `$newAge` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$newAge` to the `$age` property of the `Animal` class. After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class. Add a statement that calls the `changeType()` method of the `$pet` object passing the argument `Rabbit`. Add a statement that calls the `setAge()` method of the `$pet` object passing the argument `3`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.  

```
<?php



?>
```

+++
