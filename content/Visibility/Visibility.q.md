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
$person = new Person();
$person->setAge(15);
$person->display();
?>
```
/// type=SS, id=a597fbec-e128-4d34-8058-d46c5bb14434, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `Anna`.

 - No output is displayed.

 - It prints `Anna is years old.`.

 - It prints `Anna is 15 years old.`.


/// type=MS, id=50eabd46-aa1d-431c-a118-96390cfba23f, answer=[1,2]

Which of the following are properties?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `$person`


/// type=MS, id=836b5830-1489-440e-9218-2fc7162bf248, answer=[2,3,4,5]

Which of the following are methods?

 - `Person()`

 - `getAge()`

 - `setAge()`

 - `display()`

 - `checkAge()`


/// type=SS, id=0d59ca29-0652-42cc-bc00-fd6972821408, answer=[2]

Which of the following is an accessor method?

 - `Person()`

 - `getAge()`

 - `setAge()`

 - `display()`

 - `checkAge()`


/// type=SS, id=36f05975-62d3-4af5-b837-82209bf5ffaf, answer=[3]

Which of the following is a mutator method?

 - `Person()`

 - `getAge()`

 - `setAge()`

 - `display()`

 - `checkAge()`


/// type=SS, id=0476fe74-92b4-48f7-8143-2ae2effc6411, answer=[3]

Which of the following is a pseudo-variable?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `$person`


/// type=MS, id=4156e0cf-92dd-4f14-a2d0-479ba59f0494, answer=[2,4]

Which of the following are visibility keywords?

 - `$this`

 - `public`

 - `Person`

 - `private`

 - `$person`


/// type=SS, id=eb8bee64-d186-4d29-90dd-a9ba1ca58c92, answer=[4]

In the property definition `private $age;` on line 5, what does `private` do?

 - It accesses the `$age` property of the `Person` class.

 - It sets the accessibility of the `$age` property everywhere.

 - It declares and initializes the `$age` property of the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class and its child or parent classes.


/// type=MS, id=a1b01be7-f27e-40ee-8642-60c5c614a761, answer=[2,4]

Which statements correctly describe the code on line 5?

 - It calls the `$age` property of the `Person` class.

 - It declares the `$age` property of the `Person` class.

 - It accesses the `$age` property of the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class.

 - It sets the accessibility of the `$age` property only within the `Person` class and its child or parent classes.


/// type=SS, id=3c6ffd0a-e5f9-4c65-a644-a7defe5530e3, answer=[4]

In the statement `if ($this->checkAge($newAge))` on line 9, what is `$newAge`?

 - It is a property.

 - It is a parameter.

 - It is an operator.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, id=27dc9384-8d67-46bf-a759-a54bc63534e0, answer=[1]

In the statement `if ($this->checkAge($newAge))` on line 9, what is `checkAge()`?

 - It is a method.

 - It is a property.

 - It is a parameter.

 - It is an argument.

 - It is a pseudo-variable.


/// type=SS, id=54ecbfd6-d59e-4cdc-a45f-50c872bf94a8, answer=[2]

Which statement best describes `$this->checkAge($newAge)` on line 9?

 - It returns the argument `$newAge` in the `checkAge()` method of the `Person` class.

 - It calls the `checkAge()` method of the `Person` class passing the argument `$newAge`.

 - It creates the `checkAge()` method of the `Person` class with the parameter `$newAge`.

 - It removes the argument `$newAge` from the `checkAge()` method of the `Person` class.

 - It accesses the argument `$newAge` from the `checkAge()` method of the `Person` class.


/// type=MS, id=25a19119-3b9f-4240-a9fe-ce01a2817507, answer=[1,2,5]

On lines 9, 10, and 11, what does the `if` statement do?

 - It evaluates the truthiness of the method call `$this->checkAge($newAge)` on line 9.

 - It executes the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It executes the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `false`. 

 - It does not execute the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It does not execute the statement `$this->age = $newAge;` if the method call inside the parentheses `()` evaluates to `false`. 


/// type=MS, id=d1ffbd33-3c10-4ac0-a799-ee36495c3f9a, answer=[1,2,3,4]

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
$person = new Person();
$person->setAge(15);
$person->display();
?>
```
/// type=SS, id=73e4efca-445c-4ab4-ba09-d784507ec590, answer=[4]

In the method call `$person->setAge(15);` on line 33, replace the argument `15` with `-15`. Execute the program. What is its output?

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
$person = new Person();
$person->setAge(-15);
$person->display();
?>
```
/// type=MS, id=49c29bba-420b-4a1a-95e0-cc4bccadc787, answer=[1,4,5]

Why is there no value of the `$age` property displayed?

 - There is no value assigned to the `$age` property of `$person`.

 - There is no semicolon `;` at the end of the statement on line 33.

 - The `setAge()` method is accessible only within the `Person` class.

 - On line 33, the argument `-15` in the `setAge()` method is less than `0`.

 - The `setAge()` method only assigns values greater than `0` to the `$age` property of `$person`.


/// type=SS, id=18de9f00-2e5a-44ad-8c57-b9c1f1ac9a75, answer=[1]

Which property is accessible only within the `Person` class?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `$person`


/// type=SS, id=500ed813-e9bb-4cf6-9dbc-ddf71bd0c8fb, answer=[5]

Which method is accessible only within the `Person` class?

 - `Person()`

 - `getAge()`

 - `setAge()`

 - `display()`

 - `checkAge()`


/// type=SS, id=65d55d70-873d-45fe-8b8d-b10ddc49f7e5, answer=[4]

In the method call `$person->setAge(-15);` on line 33, replace the argument `-15` with `45`. Execute the program. What is its output?

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
$person = new Person();
$person->setAge(45);
$person->display();
?>
```
/// type=SS, id=7a06eb9f-cd8b-41c8-84c0-fc767ca8787e, answer=[1]

On line 34, replace the method call `$person->display();` with `echo $person->getAge();`. Execute the program. What is its output?

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
$person = new Person();
$person->setAge(45);
echo $person->getAge();
?>
```
/// type=SS, id=e9a625ae-d49b-43d7-9401-66669113bc47, answer=[2]

In the statement `echo $person->getAge();` on line 34, replace `getAge()` with `name`. Execute the program. What is its output?

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
$person = new Person();
$person->setAge(45);
echo $person->name;
?>
```
/// type=SS, id=98743d80-39d7-49d9-b0b5-9fb18597cd36, answer=[3]

In the statement `echo $person->name;` on line 34, replace `name` with `age`. Execute the program. What is its output?

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
$person = new Person();
$person->setAge(45);
echo $person->age;
?>
```
/// type=SS, id=b30cd497-f7d7-43a3-b967-f4a3817b10b0, answer=[3]

In the method call `$person->setAge(45);` on line 33, replace `setAge` with `checkAge`. Execute the program. What is its output?

 - It prints `45`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=bec11725-3212-47d2-96f5-127f3195fd41, answer=[5]

Which statement is true about visibility?

 - It adds a property or method to a class.

 - It declares a property or method to a class.

 - It creates a new object as an instance of a class.

 - It accesses the properties and methods within a class. 

 - It defines the accessibility of a property or method of a certain class.


/// type=MS, id=2024f978-e48c-40fa-9381-c22d80ec090b, answer=[2,3]

What statements are true about the `public` visibility keyword?

 - It sets the accessibility of the properties and methods only within a class itself.

 - Public properties and methods can be accessed by code outside or inside of a class.

 - It sets the accessibility of the class properties and methods outside and inside of a class.

 - It sets the accessibility of the properties and methods only within a class itself and its child or parent classes.

 - It sets the accessibility of the properties and methods only to the instance of a class and its child or parent classes.


/// type=MS, id=485ed68f-9fb6-4f78-a884-ddce7b1f3b98, answer=[2,3]

Which statements correctly describe the `private` visibility keyword?

 - It sets the accessibility of the class properties and methods everywhere.

 - It sets the accessibility of the properties and methods only within a class itself.

 - Private properties and methods can only be accessed by code defined within the class itself.

 - It sets the accessibility of the properties and methods only within a class itself and its child or parent classes.

 - It sets the accessibility of the properties and methods only to the instance of a class and its child or parent classes.


/// type=SS, id=49d312fd-1313-49e5-947b-5ad45f580deb, answer=[4]

Which statement is true about the `protected` visibility keyword?

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
$person = new Person();
$person->age = 12;
$person->display();
?>
```
/// type=SS, id=836837b9-e0ee-4d33-b43e-35c8a740448d, answer=[3]

Execute the program. What is its output?

 - It prints `12`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 12 years old.`.


/// type=SS, id=7dace2a8-e96b-4753-9460-f821d271c940, answer=[4]

What is the error message?

 - Undefined variable: `age` on line number 33

 - Uncaught Error: Cannot access empty property on line number 33

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 33

 - Uncaught Error: Cannot access private property `Person::$age` on line number 33

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 33


/// type=MS, id=3055bafa-d5a5-423b-86bf-84b22fd2a371, answer=[1,3,5]

Which statements correctly describe the error?

 - The private property `$age` is not accessible outside of the `Person` class.

 - There is no object operator `->` between `$person` and `age` on line 33.

 - On line 33, the assignment statement `$person->age = 12;` is invalid.

 - There is no semicolon `;` at the end of the statement `$person->age = 12` on line 33.

 - `$person` is not allowed to access and assign the value `12` to the private property `$age` of the `Person` class.

:::


/// type=CR, id=6e24e44a-276f-435a-9792-103ba1dd9ae2, answer=[tests/Visibility/IncorrectAccessToPrivatePropertyTest.php]

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
$person = new Person();
$person->age = 12;
$person->display();
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
$person = new Person();
$person->setAge(12);
$person->age;
?>
```
/// type=SS, id=2569ae58-52ba-44d3-aa35-56fe6c913cef, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `newAge` on line number 9

 - Use of undefined constant `age` - assumed `'age'` on line number 34

 - syntax error, unexpected `'$person'` (T_VARIABLE) on line number 34

 - Uncaught Error: Cannot access private property `Person::$age` on line number 34

 - Missing argument `1` for `Person::setAge()`, called on line 33 and defined on line number 7


/// type=MS, id=63756910-2934-4865-a81a-b67214fdab32, answer=[1,3,5]

Which statements correctly describe the error?

 - On line 34, the statement `$person->age;` is invalid.

 - There is no object operator `->` between `$person` and `age` on line 34.

 - The private property `$age` is not accessible outside of the `Person` class.

 - There is no semicolon `;` at the end of the statement `$person->age` on line 34.

 - `$person` is not allowed to access the private property `$age` of the `Person` class.

:::


/// type=CR, id=929d22d2-8998-4fe5-ab99-d0cb42c5ef05, answer=[tests/Visibility/IncorrectAccessToAgePropertyTest.php]

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
$person = new Person();
$person->setAge(12);
$person->age;
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
$person = new Person();
$person->checkAge(12);
$person->display();
?>
```
/// type=SS, id=0e13a046-cbf8-4a34-909c-4cafb1858008, answer=[3]

Execute the program. What is the error message?

 - Use of undefined constant `age` - assumed `'age'` on line number 34

 - Uncaught Error: Call to private method `Person::display()` on line number 34

 - Uncaught Error: Call to private method `Person::checkAge()` on line number 33

 - Uncaught Error: Cannot access private property `Person::$age` on line number 34

 - Missing argument `1` for `Person::setAge()`, called on line 33 and defined on line number 7


/// type=MS, id=dd7aedb8-f578-41f4-a2b2-1216f2ea082d, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 33, the method call `$person->checkAge(12);` is invalid.

 - There are no parentheses `()` after the `checkAge` method call on line 33.

 - There is no object operator `->` between `$person` and `checkAge()` on line 33.

 - The private method `checkAge()` is not accessible outside of the `Person` class.

 - `$person` is not allowed to access the private method `checkAge()` of the `Person` class.

:::


/// type=CR, id=f1ecfba2-c407-44e4-9c00-9089d60b98ab, answer=[tests/Visibility/IncorrectAccessToCheckAgePrivateMethodTest.php]

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
$person = new Person();
$person->checkAge(12);
$person->display();
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
$person = new Person();
$person->setAge();
$person->display();
?>
```
/// type=MS, id=d6c547e4-020f-437d-93e9-274273ccfc11, answer=[1,5]

Execute the program. What are the error messages?

 - Undefined variable: `newAge` on line number 9

 - Uncaught Error: Call to private method `Person::display()` on line number 34

 - Uncaught Error: Call to private method `Person::checkAge()` on line number 33

 - Uncaught Error: Cannot access private property `Person::$age` on line number 34

 - Missing argument `1` for `Person::setAge()`, called on line 33 and defined on line number 7


/// type=MS, id=ba4c60eb-3e0d-408c-8681-b0a7b615c6d6, answer=[1,5]

Which statements correctly describe the error?

 - On line 33, the method call `$person->setAge();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 33.

 - There are no parentheses `()` after the `setAge` method call on line 33.

 - There is no object operator `->` between `$person` and `setAge()` on line 33.

 - There is no argument specified in the `setAge()` method call of `$person` on line 33.

:::


/// type=CR, id=6b7f92f6-673d-40e7-a4c2-b575fe27b38f, answer=[tests/Visibility/MissingArgumentOnSetAgeMethodTest.php]

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
$person = new Person();
$person->setAge();
$person->display();
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
$person = new Person();
$person->setAge(45);
$person->display();
?>
```
/// type=SS, id=0d16dd7e-2a98-4f85-937a-fbe199eecae4, answer=[5]

Execute the program. What is its output?

 - It prints `45`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is 45 years old.`.


/// type=SS, id=e99cf65e-0e7e-43eb-832d-2ecd507ebd74, answer=[2]

Remove the `new` keyword from the statement `$person = new Person();` on line 32. Execute the program. What is the error message?

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
$person = Person();
$person->setAge(45);
$person->display();
?>
```
/// type=SS, id=4c97382a-a385-4287-97b6-888928ac628c, answer=[1]

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
$person = Person();
$person->setAge(45);
$person->display();
?>
```
/// type=SS, id=aa45987f-8a3b-4e93-96ab-4dd01cefe9e1, answer=[4]

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
$person = Person();
$person->setAge(45);
$person->display();
?>
```
/// type=SS, id=cbd3d06c-8873-4e99-a5cf-516c4233cc90, answer=[5]

Remove the `private` keyword from the property definition `private $age;` on line 5. Execute the program. What is the error message?

 - syntax error, unexpected `'return'` (T_RETURN) on line number 22

 - Uncaught Error: Call to undefined function `Person()` on line number 32

 - syntax error, unexpected `'$this'` (T_VARIABLE), expecting `'('` on line number 9

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `';'` on line number 16

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

:::


/// type=CR, id=4ac396f3-37cc-4a0b-9730-fd31829941ba, answer=[tests/Visibility/CorrectMultipleErrorsTest.php]

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
$person = Person();
$person->setAge(45);
$person->display();
?>
```


+++


+++

### Part 4: Practice

/// type=CR, id=9fd0ca61-97d0-4fd9-887e-bd12c3d524c5, answer=[tests/Visibility/CreateClassWithPrivatePropertyAndMethodTest.php]

Write a program that adds and manipulates the private properties and methods of a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$type` with the value `Dog` using the `private` visibility keyword. 
 
 2. Use the `private` visibility keyword to define another class property named `$age`. 
 
 3. Create a `public` method named `changeType()` with a parameter `$newType`. Inside the `changeType()` method body, add a statement that assigns the value of `$newType` to the `$type` property of the `Animal` class. 
  
 4. A `private` method named `isValid()` with a parameter `$value`. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. 
 
 5. A `public` method named `display()`. Inside the `display()` method body, add an `echo` statement to display the string `"The " . $this->getType() . " is " . $this->getAge() . " years old."`.
 
 6. A `public` method named  `getType()`. Inside the `getType()` method body, add a statement that returns the value of the `$type` property. 
 
 7. A `public` method named `getAge()`. Inside the `getAge()` method body, add a statement that returns the value of the `$age` property. 
 
 8. A `public` method named `setAge()` with a parameter `$newAge`. Inside the `setAge()` method body, add an `if` statement that evaluates `$newAge` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$newAge` to the `$age` property of the `Animal` class. 
 
After the class declaration, add the following:

 1. A statement that creates the `$pet` object an instance of the `Animal` class. 
 
 2. A statement that calls the `changeType()` method of the `$pet` object passing the argument `Cat`. 
 
 3. A statement that calls the `setAge()` method of the `$pet` object passing the argument `1.5`.
 
 4. A statement that calls the `display()` method of the `$pet` object. 
 
Run the program to view the output.  

```
<?php




?>
```

+++
