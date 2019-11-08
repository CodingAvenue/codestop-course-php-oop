# Objects and References

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarA->display();
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a person class.`.

 - It prints `This is a student class.`.

 - It prints `This is a person class.` and `This is a student class.` in separate lines.


/// type=MS, answer=[1,3,4,5]

Which of the following are keywords?

 - `new`

 - `echo`

 - `class`

 - `public`

 - `function`


/// type=SS, answer=[2]

Which of the following is a method?

 - `Student`

 - `display()`

 - `$objectVarB`

 - `$objectVarA`

 - `echo "This is a person class.\n";`


/// type=MS, answer=[1,2]

Which of the following are classes?

 - `Person`

 - `Student`

 - `display()`

 - `$objectVarB`

 - `$objectVarA`


/// type=SS, answer=[2]

Which of the following is a method call?

 - `class Student {...}`

 - `$objectVarA->display();`

 - `$objectVarB = $objectVarA;`

 - `$objectVarA = new Person();`

 - `echo "This is a person class.\n";`


/// type=MS, answer=[3,4,5]

Which statements correctly describe `$objectVarA = new Person();` on line 18?

 - It assigns `Person()` to the variable `$objectVarA`.

 - It displays the value of `$objectVarA` in `Person()`.

 - It creates `$objectVarA` as an instance of the `Person` class.

 - It sets the variable `$objectVarA` to point to the `Person` object.

 - It creates the variable `$objectVarA` and the `Person` object in the memory.


/// type=SS, answer=[4]

In the statement `$objectVarB = $objectVarA;` on line 19, what is `$objectVarB`?

 - It is a class.

 - It is a string.

 - It is an object.

 - It is a variable.

 - it is a property.


/// type=MS, answer=[1,5]

What does `$objectVarB = $objectVarA;` do on line 19?

 - It creates the variable `$objectVarB` in the memory.

 - It assigns the value of `$objectVarA` to `$objectVarB`.

 - It displays the value of `$objectVarA` in `$objectVarB`.

 - It creates the variable `$objectVarB` as an instance of `$objectVarA`.

 - It sets the variable `$objectVarB` to point to the `Person` object that `$objectVarA` is currently pointing.


/// type=SS, answer=[1]

Which object does `$objectVarB` reference or point to?

 - `Person`

 - `Student`

 - `$objectVarC`

 - `$objectVarA`

 - `$objectVarB`


/// type=SS, answer=[2]

In the statement `$objectVarC = &$objectVarA;` on line 20, what does `&` indicate?

 - A pass by value.

 - A pass by reference.

 - A copy of the assigned value.

 - A pass by reference and value.

 - A duplicate of the assigned value.


/// type=SS, answer=[4]

In the statement `$objectVarC = &$objectVarA;` on line 20, what is `$objectVarC`?

 - It is a class.

 - It is a string.

 - It is an object.

 - It is a variable.

 - it is a property.


/// type=MS, answer=[3,5]

Which statements correctly describe `$objectVarC = &$objectVarA;` on line 20?

 - It assigns the value of `$objectVarA` to `$objectVarC`.

 - It displays the value of `$objectVarA` in `$objectVarC`.

 - It creates the variable `$objectVarC` as an alias of `$objectVarA`.

 - It creates the variable `$objectVarC` as an instance of `$objectVarA`.

 - It sets the variable `$objectVarC` to behave exactly the same as `$objectVarA`.


/// type=SS, answer=[1]

Which statement best describes `$objectVarA->display();` on line 21?

 - It calls the `display()` method of `$objectVarA`.

 - It creates the `display()` method of `$objectVarA`.

 - It removes the `display()` method of `$objectVarA`.

 - It returns the `display()` method of `$objectVarA`.

 - It displays the `display()` method of `$objectVarA`.


/// type=SS, answer=[4]

What values is returned by the method call `$objectVarA->display();` on line 21?

 - `Person`

 - `Student`

 - `$objectVarA`

 - `This is a person class.`

 - `This is a student class.`

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarC->display();
$objectVarA = new Student();
$objectVarC->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a person class.`.

 - It prints `This is a student class.`.

 - It prints `This is a person class.` and `This is a student class.` in separate lines.


/// type=SS, answer=[3]

Which of the following is a pass by reference statement?

 - `$objectVarC->display();`

 - `$objectVarB = $objectVarA;`

 - `$objectVarC = &$objectVarA;`

 - `$objectVarA = new Person();`

 - `$objectVarA = new Student();`


/// type=SS, answer=[5]

Which of the following is an alias variable?

 - `Person`

 - `Student`

 - `$objectVarA`

 - `$objectVarB`

 - `$objectVarC`


/// type=SS, answer=[4]

What value is returned by the method call `$objectVarC->display();` on line 21?

 - `Person`

 - `Student`

 - `$objectVarA`

 - `This is a person class.`

 - `This is a student class.`


/// type=MS, answer=[1,4,5]

What does `$objectVarA = new Student();` do on line 22?

 - It creates the `Student` object in the memory.

 - It assigns `Student()` to the variable `$objectVarA`.

 - It displays the value of `$objectVarA` in `Student()`.

 - It creates `$objectVarA` as an instance of the `Student` class.

 - It sets the variable `$objectVarA` to point to the `Student` object.


/// type=SS, answer=[2]

After the statement on line 22, which object does `$objectVarA` reference or point to?

 - `Person`

 - `Student`

 - `$objectVarC`

 - `$objectVarA`

 - `$objectVarB`


/// type=SS, answer=[1]

Which object does `$objectVarB` reference or point to?

 - `Person`

 - `Student`

 - `$objectVarC`

 - `$objectVarA`

 - `$objectVarB`


/// type=SS, answer=[5]

What value is returned by the method call `$objectVarC->display();` on line 23?

 - `Person`

 - `Student`

 - `$objectVarA`

 - `This is a person class.`

 - `This is a student class.`


/// type=MS, answer=[1,4,5]

Why does the returned value of the method call `$objectVarC->display();` change?

 - The variable `$objectVarC` is an alias of `$objectVarA`.

 - The variable `$objectVarC` points to the `Person` object.

 - The value assigned to the variable `$objectVarC` changes.

 - The object that the variable `$objectVarA` points to changes.

 - The variable `$objectVarC` should behave similar to `$objectVarA`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[4]

Which statement is true about a reference?

 - It is a basic building block of a method.

 - It is an actual representation of a class.

 - It is a function that performs a specific action.

 - It is an `alias` that enables two different variables to access a single value.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, answer=[2]

What does the ampersand `&` symbol indicate?

 - A pass by value.

 - A pass by reference.

 - A copy of the assigned value.

 - A pass by reference and value.

 - A duplicate of the assigned value.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = $&objectVarA;
$objectVarA->display();
?>
```
/// type=SS, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a person class.`.

 - It prints `This is a student class.`.

 - It prints `This is a person class.` and `This is a student class.` in separate lines.


/// type=SS, answer=[5]

What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$objectVarC'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, answer=[3,4]

Which statements correctly describe the error?

 - The variable `$objectVarC` starts with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 20.

 - On line 20, the statement `$objectVarC = $&objectVarA;` is invalid.

 - The ampersand `&` symbol in `$&objectVarA` should come first before the dollar sign `$`.

 - There is no assignment operator `=` between `$objectVarC` and `$&objectVarA` on line 20.

:::


/// type=CR, answer=[tests/ObjectsAndReferences/IncorrectAmperandPositionTest.php]

Correct the code so that it outputs the string `This is a person class.`.

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = $&objectVarA;
$objectVarA->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA
$objectVarC = &$objectVarA;
$objectVarA->display();
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$objectVarC'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=SS, answer=[2]

Which statement best describe the error?

 - The variable `$objectVarC` starts with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 19.

 - On line 20, the statement `$objectVarC = &$objectVarA;` is invalid.

 - The ampersand `&` symbol in `&$objectVarA` should be written after the dollar sign `$`.

 - There is no assignment operator `=` between `$objectVarC` and `$&objectVarA` on line 20.

:::


/// type=CR, answer=[tests/ObjectsAndReferences/MissingSemicolonTest.php]

Correct the code so that it outputs the string `This is a person class.`.

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA
$objectVarC = &$objectVarA;
$objectVarA->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarA-display();
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$objectVarC'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There are parentheses `()` after `display` on line 21.

 - The variable `$objectVarA` starts with a dollar sign `$`.

 - On line 21, the statement `$objectVarA-display();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 21.

 - The object operator `->` between `$objectVarA` and `display()` is miswritten as `-`.


:::


/// type=CR, answer=[tests/ObjectsAndReferences/IncorrectObjectOperatorTest.php]

Correct the code so that it outputs the string `This is a person class.`.

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarA-display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarC->display();
$objectVarA = Student();
$objectVarC->display();
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$objectVarC'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There are parentheses `()` after `Student` on line 22.

 - The variable `$objectVarA` starts with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 21.

 - There is no `new` keyword specified before `Student()` on line 22.

 - On line 22, the statement `$objectVarA = Student();` is invalid.


:::


/// type=CR, answer=[tests/ObjectsAndReferences/MissingNewKeywordTest.php]

Correct the code so that it outputs the strings `This is a person class.` and `This is a student class.` in separate lines.

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarC->display();
$objectVarA = Student();
$objectVarC->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarC->display();
$objectVarA = new Student();
objectVarC->display();
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$objectVarC'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, answer=[2,4]

Which statements correctly describe the error?

 - There are parentheses `()` after `display` on line 23.

 - On line 23, the statement `objectVarC->display();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 23.

 - On line 23, the variable `objectVarC` does not start with a dollar sign `$`.

 - There is no object operator `->` specified between `objectVarC` and `display()` on line 23.

:::


/// type=CR, answer=[tests/ObjectsAndReferences/MissingDollarSignTest.php]

Correct the code so that it outputs the strings `This is a person class.` and `This is a student class.` in separate lines.

```php
<?php
class Person
{
    public function display()
    {
        echo "This is a person class.\n";
    }
}

class Student
{
    public function display()
    {
        echo "This is a student class.\n";
    }
}

$objectVarA = new Person();
$objectVarB = $objectVarA;
$objectVarC = &$objectVarA;
$objectVarC->display();
$objectVarA = new Student();
objectVarC->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/ObjectsAndReferences/CreateAnObjectReferenceTest.php]

Given the initial program implementation below, add a code that creates a reference to a certain class instance. On line 18, add a statement that creates an instance of the `Animal` class and assigns it to the variable `$animalA`. Add another statement that assigns `$animalA` to `$animalB`. Next, add the statement `$animalB->display();` on line 20. On line 21, add a statement that sets the variable `$animalC` an alias of the variable `$animalA`. Then, add another statement `$animalC->display();` on line 22. On line 23, add a statement that creates an instance of the `Mammal` class and assigns it to the variable `$animalA`. On line 24, add the statement `$animalC->display();`. Run the program to view the result.

```php
<?php
class Animal
{
    public function display()
    {
        echo "This is an animal class.\n";
    }
}

class Mammal
{
    public function display()
    {
        echo "This is a mammal class.\n";
    }
}

/// class instantiation and referencing here...



?>
```

+++
