# Constructor

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }
    $person = new Person("John");
    echo $person->name;
?>
```
/// type=SS, id=9e938768-fa4f-46d9-a99d-6afd9aee6a00, answer=[2]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `John`.

 - It prints `$name`.

 - It produces an error.

 - No output is displayed.


/// type=SS, id=77e16dff-2768-4153-810d-3b019d1403f1, answer=[3]

Which of the following is a visibility keyword?

 - `new`

 - `class`

 - `public`

 - `function`

 - `__construct()`


/// type=SS, id=1451828f-bf07-4514-9937-cfcfe83fd96f, answer=[5]

Which of the following is a method?

 - `$name`

 - `$person`

 - `Person()`

 - `function`

 - `__construct()`


/// type=SS, id=b7f79c89-4dd9-425f-9418-39ac33f4e761, answer=[1]

Which of the following is a property?

 - `$name`

 - `$person`

 - `Person()`

 - `function`

 - `__construct()`


/// type=SS, id=e3b21a7b-53a4-493a-9b8a-3aee7db163a4, answer=[2]

Which of the following is a parameter?

 - `John`

 - `$name`

 - `$this`

 - `Person`

 - `$person`


/// type=SS, id=e26f068d-7563-4162-bdcd-fe930c2a2ff7, answer=[1]

Which of the following is an argument?

 - `John`

 - `$name`

 - `$this`

 - `Person`

 - `$person`


/// type=SS, id=af48baa9-f865-4b95-a163-a88795490b78, answer=[4]

In the method definition `public function __construct($name)` on line 6, what is `$name`?

 - It is a value.

 - It is a string.

 - It is a property.

 - It is a parameter.

 - It is an argument.


/// type=MS, id=fbdf61ef-0c51-4c32-89ad-7e5bcf02c763, answer=[1,5]

In the method definition `public function __construct($name)` on line 6, what is `__construct()`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a property.

 - It is a constructor.


/// type=SS, id=3fc450c2-a9b4-492b-94a2-70ae17b62968, answer=[2]

In the method definition `public function __construct($name)` on line 6, what does `public` do?

 - It accesses the `__construct()` method of the `Person` class.

 - It sets the accessibility of the `__construct()` method everywhere.

 - It declares and initializes the `__construct()` method of the `Person` class.

 - It sets the accessibility of the `__construct()` method only within the `Person` class.

 - It sets the accessibility of the `__construct()` method only within the `Person` class and its child or parent classes.


/// type=SS, id=4bbe0863-62ab-4e58-978f-9c1751adc57c, answer=[1]

On line 8, what does the statement `$this->name = $name;` do?

 - It assigns the value of `$name` to the `$name` property of the `Person` class.

 - It accesses the value of `$name` in the `$name` property of the `Person` class.

 - It retrieves the value of `$name` in the `$name` property of the `Person` class.

 - It evaluates the value of `$name` in the `$name` property of the `Person` class.

 - It removes the value of `$name` from the `$name` property of the `Person` class.


/// type=MS, id=d8565c3c-b6f2-4f87-8996-a16e28291ab7, answer=[1,5]

On lines 6, 7, 8, and 9, what does the `__construct()` method do?

 - It sets the value of the `Person` class property `$name`.

 - It returns the value of the `Person` class property `$name`.

 - It removes the value of the `Person` class property `$name`.

 - It accesses the value of the `Person` class property `$name`.

 - It defines the constructor of the `Person` class with the parameter `$name`.


/// type=MS, id=c04325f4-c3f0-48bb-ad14-a172ee1ee1e9, answer=[1,5]

Which statements correctly describe `$person = new Person("John");` on line 11?

 - It initializes the `$name` property of the `$person` object.

 - It removes the argument `John` from the `$person` object.

 - It returns the `$person` object of the `Person` class with the parameter `John`.

 - It declares the `$person` object of the `Person` class with the parameter `John`.

 - It creates the `$person` object as an instance of the `Person` class passing the argument `John`.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->display();
?>
```
/// type=SS, id=0604c16a-dc45-4d85-b461-53029fda5db4, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `James`.

 - No output is displayed.

 - It prints `James is years old.`.

 - It prints `James is 15 years old.`.


/// type=MS, id=9eeaf370-e349-4194-9216-fb86c3f1d01c, answer=[3,4]

Which of the following are visibility keywords?

 - `new`

 - `class`

 - `public`

 - `private`

 - `function`


/// type=SS, id=b058bffb-dd5d-4987-aa3b-20f52751cb27, answer=[4]

Which method is accessible only within the `Person` class?

 - `setAge()`

 - `getAge()`

 - `display()`

 - `checkAge()`

 - `__construct()`


/// type=SS, id=b90ce4ec-24bf-494f-8fd8-731dd3856ea4, answer=[1]

Which property is accessible only within the `Person` class?

 - `$age`

 - `$name`

 - `Person`

 - `$newAge`

 - `$person`


/// type=SS, id=48c79b3c-53a2-4a37-85ef-8622b4b14a5d, answer=[5]

Which of the following is a method definition of the `Person` class constructor?

 - `public function getAge() { }`

 - `public function display() { }`

 - `private function checkAge($age) { }`

 - `public function setAge($newAge) { }`

 - `public function __construct($name, $age) { }`


/// type=SS, id=5f85ba8b-3e1d-41c2-8e9f-6f411247fcf5, answer=[2]

Which statement best describes `$this->checkAge($age)` on line 10?

 - It returns the argument `$age` in the `checkAge()` method of the `Person` class.

 - It calls the `checkAge()` method of the `Person` class passing the argument `$age`.

 - It creates the `checkAge()` method of the `Person` class with the parameter `$age`.

 - It removes the argument `$age` from the `checkAge()` method of the `Person` class.

 - It accesses the argument `$age` from the `checkAge()` method of the `Person` class.


/// type=MS, id=071fe2f4-2d6f-4ddb-9c81-a09b4efb8075, answer=[1,2,5]

On lines 10, 11, and 12, what does the `if` statement do?

 - It evaluates the truthiness of the method call `$this->checkAge($age)` on line 10.

 - It executes the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It executes the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `false`. 

 - It does not execute the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It does not execute the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `false`. 


/// type=MS, id=07e7c9bb-c48e-456e-8694-8344e519c9a7, answer=[1,2,3,4]

Which statements correctly describe the `checkAge()` method of the `Person` class?

 - It is accessible only within the `Person` class.

 - It returns `true` if the value of `$age` is greater than `0`.

 - It is not accessible by any instance of the `Person` class.

 - It returns `false` if the value of `$age` is less than or equal to `0`.

 - It is accessible everywhere from inside and outside of the `Person` class.


/// type=MS, id=488ab342-f97f-487c-9588-e568885c1382, answer=[1,2]

Which statements correctly describe the `__construct()` method of the `Person` class?

 - It sets the values of the `Person` class properties `$name` and `$age`.

 - It defines the constructor of the `Person` class with two parameters.

 - It returns the values of the `Person` class properties `$name` and `$age`.

 - It removes the values of the `Person` class properties `$name` and `$age`.

 - It accesses the values of the `Person` class properties `$name` and `$age`.


/// type=MS, id=1c9e7914-b6e5-4ec3-9aa8-05e811f0df09, answer=[2,5]

Which statements correctly describe the code on line 40?

 - It sets the arguments `James` and `15` to the `$person` object.

 - It initializes the `$name` and `$age` properties of the `$person` object.

 - It returns the `$person` object of the `Person` class with the parameters `James` and `15`.

 - It declares the `$person` object of the `Person` class with the parameters `James` and `15`.

 - It creates the `$person` object as an instance of the `Person` class passing the arguments `James` and `15`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->setAge(45);
$person->display();
?>
```
/// type=SS, id=ce4cf2d9-9cb0-48d2-85c8-f0c7a47b60d3, answer=[4]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `45`.

 - It prints `James`.

 - It prints `James is 45 years old.`.

 - It prints `James is 15 years old.`.


/// type=SS, id=5d801a6d-d1d8-4b78-9e09-bbc18e078a04, answer=[5]

In the statement `$person->setAge(45);` on line 40, replace the value `45` with `-45`. Execute the program. What is its output?

 - It prints `15`.

 - It prints `45`.

 - It prints `James`.

 - It prints `James is 45 years old.`.

 - It prints `James is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->setAge(-45);
$person->display();
?>
```
/// type=MS, id=23bb93b6-e79b-4210-a725-5cf43f906d7e, answer=[4,5]

Why is the value of the `$age` property not set to `-45`?

 - There is no semicolon `;` at the end of the statement on line 41.

 - The `setAge()` method is accessible only within the `Person` class.

 - On line 41, the argument `-45` is not enclosed in double quotes `""`.

 - On line 41, the argument `-45` in the `setAge()` method is less than `0`.

 - The `setAge()` method only assigns values greater than `0` to the `$age` property of `$person`.


/// type=SS, id=1d8eafab-eb9c-4dab-a692-05727b5cb073, answer=[5]

Remove the statement `$person->setAge(-45);` on line 40. Execute the program. What is its output?

 - It prints `15`.

 - It prints `45`.

 - It prints `James`.

 - It prints `James is 45 years old.`.

 - It prints `James is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);

$person->display();
?>
```
/// type=SS, id=7b857252-5516-4a6c-895e-90d0a0439111, answer=[4]

Add the statement `$person->name = "Diana";` on line 40. Execute the program. What is its output?

 - It prints `15`.

 - It prints `Diana`.

 - It prints `James`.

 - It prints `Diana is 15 years old.`.

 - It prints `James is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->name = "Diana";
$person->display();
?>
```
/// type=SS, id=71c89445-96b4-40c7-902f-327354727f49, answer=[2]

In the statement `public $name;` on line 4, replace the `public` keyword with `private`. Execute the program. What is its output?

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `Diana is 15 years old.`.

 - It prints `James is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->name = "Diana";
$person->display();
?>
```
/// type=SS, id=7c0befd0-f56a-49dc-8f09-1b9f836433bd, answer=[5]

Remove the statement `$person->name = "Diana";` on line 40. Execute the program. What is its output?

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `Diana is 15 years old.`.

 - It prints `James is 15 years old.`.

:::


:::

/// type=REPL

```php
<?php
class Person
{
    private $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->display();
?>
```
/// type=SS, id=3c61aa94-3035-4ed9-80ec-4f0ed2dab694, answer=[2]

In the statement `$person = new Person("James", 15);` on line 39, replace `Person("James", 15)` with `Person()`. Execute the program. What is its output?

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `Diana is 15 years old.`.

 - It prints `James is 15 years old.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=756735b0-4810-45ce-bbd8-1758f404d2f2, answer=[4]

Which statement is true about a class constructor?

 - It is a variable defined inside a class.

 - It is a basic building block of a method.

 - It is an actual representation of a function.

 - It is a method that initializes an object of a certain class.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, id=a86c1250-1688-441d-9075-6769e5b44367, answer=[1]

Which statement best describes the `__construct()` method?

 - It defines a constructor of a certain class.

 - It creates a new object as an instance of a class.

 - It accesses the properties and methods within a class. 

 - It sets the accessibility of the class properties and methods everywhere.

 - It defines the accessibility of a property and a method of a certain class.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
    class Person 
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }
    $person = new Person();
    echo $person->name;
?>
```
/// type=SS, id=5599d867-d418-4a5a-918a-bab867c15bfe, answer=[4]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `John`.

 - It prints `$newName`.

 - It produces an error.

 - No output is displayed.


/// type=MS, id=2618df4c-84e2-4d46-9dd9-ddc2a52fd714, answer=[1,5]

What are the error messages?

 - Undefined variable: `name` on line number 8

 - syntax error, unexpected `'='` on line number 11

 - Uncaught Error: Call to undefined function `Person()` on line number 11

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 6

 - Missing argument `1` for `Person::__construct()`, called on line 11 and defined on line number 6


/// type=MS, id=1f5d4d63-43ba-4a66-a26b-5608291967f2, answer=[3,5]

Which statements correctly describe the error?

 - There is no `new` keyword before `Person()` on line 11.

 - There is no semicolon `;` at the end of the statement on line 11.

 - On line 11, the statement `$person = new Person();` is invalid.

 - There is no assignment operator `=` between `&person` and `new` on line 11.

 - There is no argument specified in the `Person()` class constructor on line 11.

:::


/// type=CR, id=c9155a5e-7f86-4299-af7f-b85c639f1a30, answer=[tests/Constructor/c9155a5e-7f86-4299-af7f-b85c639f1a30]

Correct the code so that it outputs the string `John`.

```php
<?php
    class Person 
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
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
        public $name;

        public  __construct($name)
        {
            $this->name = $name;
        }
    }
    $person = new Person("John");
    echo $person->name;
?>
```
/// type=SS, id=f9b98012-0b72-439c-8cf2-9ef5ed2fb502, answer=[5]

Execute the program. What is the error message?

 - Undefined variable: `name` on line number 8

 - syntax error, unexpected `'='` on line number 11

 - Uncaught Error: Call to private `Person::__construct()` on line number 11

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 6

 - syntax error, unexpected `'__construct'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=MS, id=b3877b19-6cd4-4d8f-b7da-511a19aeda4b, answer=[3,5]

Which statements correctly describe the error?

 - There are no parentheses `()` after `__construct` on line 6.

 - On line 6, the parameter `$name` is not enclosed in double quotes `""`.

 - On line 6, the method definition `public  __construct($name)` is invalid.

 - There is no `public` visibility keyword before `__construct($name)` on line 6.

 - There is no `function` keyword between `public` and `__construct($name)` on line 6.

:::


/// type=CR, id=98a55312-4b58-47b9-9670-4ca02f77cf07, answer=[tests/Constructor/98a55312-4b58-47b9-9670-4ca02f77cf07]

Correct the code so that it outputs the string `John`.

```php
<?php
    class Person 
    {
        public $name;

        public  __construct($name)
        {
            $this->name = $name;
        }
    }
    $person = new Person("John");
    echo $person->name;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James" 15);
$person->display();
?>
```
/// type=SS, id=39d6b910-5fe5-42c9-bfc1-fe4a14f4d807, answer=[3]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `James`.

 - It produces an error.

 - It prints `James is years old.`.

 - It prints `James is 15 years old.`.


/// type=SS, id=ecf02a84-550e-48d3-8126-08b5ec106255, answer=[5]

What is the error message?

 - syntax error, unexpected `','` on line number 40

 - syntax error, unexpected `')'` on line number 40

 - syntax error, unexpected end of file on line number 41

 - syntax error, unexpected `'"'`, expecting `','` or `')'` on line number 40

 - syntax error, unexpected `'15'` (T_LNUMBER), expecting `','` or `')'` on line number 40


/// type=MS, id=48e0d834-c911-41aa-9244-c1d2606e51d6, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 40.

 - On line 40, the first argument `James` is enclosed in double quotes `""`. 

 - There is no comma `,` between the arguments `James` and `15` on line 40.

 - On line 40, the second argument `15` is not enclosed in double quotes `""`. 

 - On line 40, the statement `$person = new Person("James" 15);` is invalid.

:::


/// type=CR, id=18d21394-3978-4fba-824a-a308c9c3cbea, answer=[tests/Constructor/18d21394-3978-4fba-824a-a308c9c3cbea]

Correct the code so that it outputs the string `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James" 15);
$person->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->display();
?>
```
/// type=SS, id=7ae6fed3-b6c3-4a68-9ddc-ebe44825735c, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `')'` on line number 8

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting `')'` on line number 7

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 7

 - syntax error, unexpected `','`, expecting variable (T_VARIABLE) on line number 7

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting `'('` on line number 7


/// type=MS, id=c59873ce-f53d-4203-90e7-4aa635799f84, answer=[4,5]

Which statements correctly describe the error?

 - There is no close parenthesis `)` after `$age` on line 7.

 - There is no open parenthesis `(` after `__construct` on line 7.

 - On line 7, the parameter `$age` is not enclosed in double quotes `""`.

 - There is no comma `,` between the parameters `$name` and `$age` on line 7.

 - On line 7, the method definition `public function __construct($name $age)` is invalid.

:::


/// type=CR, id=803cb6e6-3751-4916-98ff-70515ff7d644, answer=[tests/Constructor/803cb6e6-3751-4916-98ff-70515ff7d644]

Correct the code so that it outputs the string `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James");
$person->display();
?>
```
/// type=MS, id=ce6d21cb-f6fe-40b2-960b-74d8b75976bc, answer=[1,5]

Execute the program. What are the error messages?

 - Undefined variable: `age` on line number 10

 - syntax error, unexpected end of file on line number 41

 - syntax error, unexpected `'"'`, expecting `','` or `')'` on line number 40

 - syntax error, unexpected `'James'` (T_LNUMBER), expecting `','` or `')'` on line number 40

 - Missing argument `2` for `Person::__construct()`, called on line 40 and defined on line number 7


/// type=MS, id=da7e04bc-a20d-4eaf-9c85-8fb0e403dc54, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 40.

 - On line 40, the argument `James` is enclosed in double quotes `""`.

 - On line 40, the statement `$person = new Person("James");` is invalid.

 - There is no assignment operator `=` between `$person` and `new` on line 40.

 - There is no second argument specified in the `Person()` class constructor on line 40.

:::


/// type=CR, id=171aaaf7-d26b-4fcd-8880-b972f862238e, answer=[tests/Constructor/171aaaf7-d26b-4fcd-8880-b972f862238e]

Correct the code so that it outputs the string `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James");
$person->display();
?>
```


:::

/// type=REPL

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
$person = new Person("James", 15);
$person->display();
?>
```
/// type=SS, id=88ee762e-08b6-4207-bb1d-52c9b905c10d, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `James`.

 - It produces an error.

 - It prints `James is years old.`.

 - It prints `James is 15 years old.`.


/// type=SS, id=ed50c666-8a1c-453b-a406-b9e73cc4a6b3, answer=[3]

In the method definition `public function display()` on line 35, replace the `public` keyword with `private`. Execute the program. What is the error message?

 - Undefined variable: `age` on line number 29

 - Uncaught Error: Call to undefined function `Person()` on line number 40

 - Uncaught Error: Call to private method `Person::display()` on line number 41

 - Missing argument `1` for `Person::checkAge()`, called on line 10 and defined on line number 27

 - Missing argument `2` for `Person::__construct()`, called on line 40 and defined on line number 7

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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

    private function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$person = new Person("James", 15);
$person->display();
?>
```
/// type=SS, id=13c10e8a-0b85-410d-9f01-675715c9d7dc, answer=[2]

Remove the `new` keyword from the statement `$person = new Person("James", 15);` on line 40. Execute the program. What is the error message?

 - Undefined variable: `age` on line number 29

 - Uncaught Error: Call to undefined function `Person()` on line number 40

 - Uncaught Error: Call to private method `Person::display()` on line number 41

 - Missing argument `1` for `Person::checkAge()`, called on line 10 and defined on line number 27

 - Missing argument `2` for `Person::__construct()`, called on line 40 and defined on line number 7

:::


:::

/// type=REPL

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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

    private function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$person = Person("James", 15);
$person->display();
?>
```
/// type=MS, id=3a43d24c-4656-4c09-b04c-48925a6d5458, answer=[1,3,4]

Remove the argument `$age` from `if ($this->checkAge($age))` on line 10. Execute the program. What are the error messages?

 - Undefined variable: `age` on line number 29

 - Uncaught Error: Call to undefined function `Person()` on line number 40

 - Uncaught Error: Call to private method `Person::display()` on line number 41

 - Missing argument `1` for `Person::checkAge()`, called on line 10 and defined on line number 27

 - Missing argument `2` for `Person::__construct()`, called on line 40 and defined on line number 7

:::


/// type=CR, id=71242cb0-e2e1-48f1-9dc3-1711f655a72d, answer=[tests/Constructor/71242cb0-e2e1-48f1-9dc3-1711f655a72d]

Correct the code so that it outputs the string `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge()) {
            $this->age = $age;
        }
    }
    
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

    private function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
$person = Person("James", 15);
$person->display();
?>
```


+++


+++

### Part 4: Practice

/// type=CR, id=38e843a8-6af8-42dc-9466-43537aa59b12, answer=[tests/Constructor/38e843a8-6af8-42dc-9466-43537aa59b12]

Write a program that uses a `__construct()` method to add a constructor to a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$type` with the value `Dog` using the `private` visibility keyword. 
 
 2. Use the `private` visibility keyword to define another class property named `$age`. 
 
 3. A `__construct()` method with the parameters `$type` and `$age`. Inside the `__construct()` method body, add a statement that assigns the value of `$type` to the `$type` property of the `Animal` class. Then, add an `if` statement that evaluates `$age` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$age` to the `$age` property of the `Animal` class. 
 
 4. After the `__constuct()` method definition, add a `private` method named `isValid()` with a parameter `$value`. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. 
 
 5. A `public` method named `display()`. Inside the `display()` method body, add an `echo` statement to display the string `"The " . $this->getType() . " is " . $this->getAge() . " years old."`.

 6. A `public` method named `getType()`. Inside the `getType()` method body, add a statement that returns the value of the `$type` property.

 7. A `public` method named `getAge()`. Inside the `getAge()` method body, add a statement that returns the value of the `$age` property.

 8. A `public` method named `setAge()` with a parameter `$newAge`. Inside the `setAge()` method body, add an `if` statement that evaluates `$newAge` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$newAge` to the `$age` property of the `Animal` class.

After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.

```php
<?php



?>
```

+++
