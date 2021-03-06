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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$person->display();
?>
```
/// type=SS, id=64ba6376-93b5-4cea-ba67-3c3e376dd8c9, answer=[3]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a person class.`.

 - It prints `This is a student class.`.

 - It prints `This is a person class.` and `This is a student class.` in separate lines.


/// type=MS, id=e370b05a-1ab7-4f8c-9699-9e7c9b431edd, answer=[1,3,4,5]

Which of the following are keywords?

 - `new`

 - `echo`

 - `class`

 - `public`

 - `function`


/// type=SS, id=79b44fe5-8394-4557-bcc7-5f7aa87922c7, answer=[2]

Which of the following is a method?

 - `Student`

 - `display()`

 - `$person`

 - `$personRef`

 - `echo "This is a person class.\n";`


/// type=MS, id=e259ba9f-3590-400c-ab2a-06384da593c0, answer=[1,2]

Which of the following are classes?

 - `Person`

 - `Student`

 - `$person`

 - `display()`

 - `$personRef`


/// type=SS, id=9963321f-7f1e-4fef-88c0-f341fe3e00bc, answer=[2]

Which of the following is a method call?

 - `class Student {...}`

 - `$person->display();`

 - `$personRef = $person;`

 - `$person = new Person();`

 - `echo "This is a person class.\n";`


/// type=MS, id=c73787e6-8834-4c14-b311-4928753ecd2f, answer=[3,4,5]

Which statements correctly describe `$person = new Person();` on line 18?

 - It assigns `Person()` to the variable `$person`.

 - It displays the value of `$person` in `Person()`.

 - It creates `$person` as an instance of the `Person` class.

 - It sets the variable `$person` to point to the `Person` object.

 - It creates the variable `$person` and the `Person` object in the memory.


/// type=SS, id=2388a5d7-6f4f-4243-9c68-2b8e96218ef6, answer=[4]

In the statement `$personRef = $person;` on line 19, what is `$personRef`?

 - It is a class.

 - It is a string.

 - It is an object.

 - It is a variable.

 - it is a property.


/// type=MS, id=2507f800-92e2-42cb-8a62-363272b9204a, answer=[3,5]

What does `$personRef = $person;` do on line 19?

 - It assigns the value of `$person` to `$personRef`.

 - It displays the value of `$person` in `$personRef`.

 - It creates the variable `$personRef` in the memory.

 - It creates the variable `$personRef` as an instance of `$person`.

 - It sets the variable `$personRef` to point to the `Person` object that `$person` is currently pointing.


/// type=SS, id=f3b79249-da3f-44ab-a5d0-32eceef3d87a, answer=[1]

Which object does `$personRef` reference or point to?

 - `Person`

 - `Student`

 - `$person`

 - `$personRef`

 - `$anotherPersonRef`


/// type=SS, id=90fd1cc5-512a-4fd0-ae22-5bc914f472cd, answer=[2]

In the statement `$anotherPersonRef = &$person;` on line 20, what does `&` indicate?

 - A pass by value.

 - A pass by reference.

 - A copy of the assigned value.

 - A pass by reference and value.

 - A duplicate of the assigned value.


/// type=SS, id=39b00737-0c9b-4d62-bf24-5e0f72545c29, answer=[4]

In the statement `$anotherPersonRef = &$person;` on line 20, what is `$anotherPersonRef`?

 - It is a class.

 - It is a string.

 - It is an object.

 - It is a variable.

 - it is a property.


/// type=MS, id=87881980-b48e-4f8d-923c-4e9a6ca12d99, answer=[3,5]

Which statements correctly describe `$anotherPersonRef = &$person;` on line 20?

 - It assigns the value of `$person` to `$anotherPersonRef`.

 - It displays the value of `$person` in `$anotherPersonRef`.

 - It creates the variable `$anotherPersonRef` as an alias of `$person`.

 - It creates the variable `$anotherPersonRef` as an instance of `$person`.

 - It sets the variable `$anotherPersonRef` to behave exactly the same as `$person`.


/// type=SS, id=a8b2ef39-2c6e-478e-83ba-7d914aaad9d0, answer=[1]

Which statement best describes `$person->display();` on line 21?

 - It calls the `display()` method of `$person`.

 - It creates the `display()` method of `$person`.

 - It returns the `display()` method of `$person`.

 - It displays the `display()` method of `$person`.

 - It removes the `display()` method of `$person`.


/// type=SS, id=021e6d5a-6e8b-4f51-90cc-f45ce9d0df50, answer=[4]

What value is returned by the method call `$person->display();` on line 21?

 - `Person`

 - `Student`

 - `$person`

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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$anotherPersonRef->display();
$person = new Student();
$anotherPersonRef->display();
?>
```
/// type=SS, id=2b0e1987-b4ac-4ca9-bc3a-4b96c6f18575, answer=[5]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a person class.`.

 - It prints `This is a student class.`.

 - It prints `This is a person class.` and `This is a student class.` in separate lines.


/// type=SS, id=de7501b3-14f3-4ac5-9e57-51f683611ef9, answer=[4]

Which of the following is a pass by reference statement?

 - `$personRef = $person;`

 - `$person = new Person();`

 - `$person = new Student();`

 - `$anotherPersonRef = &$person;`

 - `$anotherPersonRef->display();`


/// type=SS, id=fbbfe56c-f2d0-43f0-a1ac-a5aba0aa670e, answer=[5]

Which of the following is an alias variable?

 - `Person`

 - `Student`

 - `$person`

 - `$personRef`

 - `$anotherPersonRef`


/// type=SS, id=32d6e32b-efcf-4f73-a9c4-8a7dd892f43c, answer=[4]

What value is returned by the method call `$anotherPersonRef->display();` on line 21?

 - `Person`

 - `Student`

 - `$person`

 - `This is a person class.`

 - `This is a student class.`


/// type=MS, id=bace9a02-b610-434a-a0de-a00283c9e58e, answer=[1,4,5]

What does `$person = new Student();` do on line 22?

 - It creates the `Student` object in the memory.

 - It assigns `Student()` to the variable `$person`.

 - It displays the value of `$person` in `Student()`.

 - It creates `$person` as an instance of the `Student` class.

 - It sets the variable `$person` to point to the `Student` object.


/// type=SS, id=f60a4124-f722-4e8a-b24f-0a624fbd733b, answer=[2]

After the statement on line 22, which object does `$person` reference or point to?

 - `Person`

 - `Student`

 - `$person`

 - `$personRef`

 - `$anotherPersonRef`


/// type=SS, id=0bf8597f-c930-40c8-b2c1-952de3b42076, answer=[1]

Which object does `$personRef` reference or point to?

 - `Person`

 - `Student`

 - `$person`

 - `$personRef`

 - `$anotherPersonRef`


/// type=SS, id=9636ce2e-e6cb-45b7-bdf5-c01d2c51108a, answer=[5]

What value is returned by the method call `$anotherPersonRef->display();` on line 23?

 - `Person`

 - `Student`

 - `$person`

 - `This is a person class.`

 - `This is a student class.`


/// type=MS, id=299628ee-34c1-43a8-ad49-7de9fb3af92f, answer=[1,4,5]

Why does the returned value of the method call `$anotherPersonRef->display();` change?

 - The variable `$anotherPersonRef` is an alias of `$person`.

 - The variable `$anotherPersonRef` points to the `Person` object.

 - The value assigned to the variable `$anotherPersonRef` changes.

 - The object that the variable `$person` points to changes.

 - The variable `$anotherPersonRef` should behave similar to `$person`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=993f6252-0a0c-41e5-9d03-b8ac912c035e, answer=[4]

Which statement is true about a reference?

 - It is a basic building block of a method.

 - It is an actual representation of a class.

 - It is a function that performs a specific action.

 - It is an `alias` that enables two different variables to access a single value.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, id=11f3bc20-a29d-4a50-9677-e7e5f71700f1, answer=[2]

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

$person = new Person();
$personRef = $person;
$anotherPersonRef = $&person;
$person->display();
?>
```
/// type=SS, id=5873b385-b15e-4e67-81a2-adfd3d037fe6, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a person class.`.

 - It prints `This is a student class.`.

 - It prints `This is a person class.` and `This is a student class.` in separate lines.


/// type=SS, id=2ca7ccc2-ca98-484e-bea2-a54f11162e23, answer=[5]

What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$anotherPersonRef'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, id=6b9eb069-1720-4dc7-8119-da469a2c8a6a, answer=[3,4]

Which statements correctly describe the error?

 - The variable `$anotherPersonRef` starts with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 20.

 - On line 20, the statement `$anotherPersonRef = $&person;` is invalid.

 - The ampersand `&` symbol in `$&person` should come first before the dollar sign `$`.

 - There is no assignment operator `=` between `$anotherPersonRef` and `$&person` on line 20.

:::


/// type=CR, id=3e23cbe1-3872-4c7c-abf4-67cf15e395c2, answer=[tests/ObjectsAndReferences/3e23cbe1-3872-4c7c-abf4-67cf15e395c2]

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

$person = new Person();
$personRef = $person;
$anotherPersonRef = $&person;
$person->display();
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

$person = new Person();
$personRef = $person
$anotherPersonRef = &$person;
$person->display();
?>
```
/// type=SS, id=752c5deb-f9b8-4785-a19e-880f89be4d0b, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$anotherPersonRef'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=SS, id=a8c7c9d8-2a00-4b83-989f-a370cc6a0d63, answer=[2]

Which statement best describe the error?

 - The variable `$anotherPersonRef` starts with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 19.

 - On line 20, the statement `$anotherPersonRef = &$person;` is invalid.

 - The ampersand `&` symbol in `&$person` should be written after the dollar sign `$`.

 - There is no assignment operator `=` between `$anotherPersonRef` and `$&person` on line 20.

:::


/// type=CR, id=8966cdec-0047-4deb-87a9-ce6b119402c4, answer=[tests/ObjectsAndReferences/8966cdec-0047-4deb-87a9-ce6b119402c4]

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

$person = new Person();
$personRef = $person
$anotherPersonRef = &$person;
$person->display();
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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$person-display();
?>
```
/// type=SS, id=58d8eda4-e740-4686-9c63-45e241c10ac4, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$anotherPersonRef'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, id=63a59613-aa1c-475d-a189-48301dbe5f28, answer=[3,5]

Which statements correctly describe the error?

 - The variable `$person` starts with a dollar sign `$`.

 - There are parentheses `()` after `display` on line 21.

 - On line 21, the statement `$person-display();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 21.

 - The object operator `->` between `$person` and `display()` is miswritten as `-`.


:::


/// type=CR, id=6a7d9398-bb5b-45f4-a675-534204be8645, answer=[tests/ObjectsAndReferences/6a7d9398-bb5b-45f4-a675-534204be8645]

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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$person-display();
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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$anotherPersonRef->display();
$person = Student();
$anotherPersonRef->display();
?>
```
/// type=SS, id=b5151478-2ebb-4907-97a1-259f7361885b, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$anotherPersonRef'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, id=d7d282b0-0e36-47f8-aa58-f2fe116f6786, answer=[3,5]

Which statements correctly describe the error?

 - The variable `$person` starts with a dollar sign `$`.

 - There are parentheses `()` after `Student` on line 22.

 - On line 22, the statement `$person = Student();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 21.

 - There is no `new` keyword specified before `Student()` on line 22.


:::


/// type=CR, id=28dc6250-a538-4656-9809-c119767c7d0c, answer=[tests/ObjectsAndReferences/28dc6250-a538-4656-9809-c119767c7d0c]

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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$anotherPersonRef->display();
$person = Student();
$anotherPersonRef->display();
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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$anotherPersonRef->display();
$person = new Student();
anotherPersonRef->display();
?>
```
/// type=SS, id=2f20e013-199e-403a-a0fe-d2111e9932a3, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 23

 - Uncaught Error: Call to undefined function `display()` on line number 21

 - Uncaught Error: Call to undefined function `Student()` on line number 22

 - syntax error, unexpected `'$anotherPersonRef'` (T_VARIABLE) on line number 20

 - syntax error, unexpected `'&'`, expecting variable (T_VARIABLE) or `'{'` or `'$'` on line number 20


/// type=MS, id=2cadc349-7dc4-429b-ae9e-5c702b17c963, answer=[3,4]

Which statements correctly describe the error?

 - There are parentheses `()` after `display` on line 23.

 - There is no semicolon `;` at the end of the statement on line 23.

 - On line 23, the statement `anotherPersonRef->display();` is invalid.

 - On line 23, the variable `anotherPersonRef` does not start with a dollar sign `$`.

 - There is no object operator `->` specified between `anotherPersonRef` and `display()` on line 23.

:::


/// type=CR, id=6d2e5aa8-9b8a-4a37-ad2b-e4229e44579f, answer=[tests/ObjectsAndReferences/6d2e5aa8-9b8a-4a37-ad2b-e4229e44579f]

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

$person = new Person();
$personRef = $person;
$anotherPersonRef = &$person;
$anotherPersonRef->display();
$person = new Student();
anotherPersonRef->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=a85d5e58-bb3c-46f7-8633-c4be555054f8, answer=[tests/ObjectsAndReferences/a85d5e58-bb3c-46f7-8633-c4be555054f8]

Given the initial program implementation below, add a code that creates a reference to a certain class instance. On line 18, add a statement that creates an instance of the `Animal` class and assigns it to the variable `$animal`. Add another statement that assigns `$animal` to `$animalRef`. Next, add the statement `$animalRef->display();` on line 20. On line 21, add a statement that sets the variable `$anotherAnimalRef` an alias of the variable `$animal`. Then, add another statement `$anotherAnimalRef->display();` on line 22. On line 23, add a statement that creates an instance of the `Mammal` class and assigns it to the variable `$animal`. On line 24, add the statement `$anotherAnimalRef->display();`. Run the program to view the result.

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
