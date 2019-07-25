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
    $pObject = new Person("John");
    echo $pObject->name;
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `John`.

 - It prints `$name`.

 - It produces an error.

 - No output is displayed.


/// type=SS, answer=[3]

Which of the following is a visibility keyword?

 - `new`

 - `class`

 - `public`

 - `function`

 - `__construct()`


/// type=SS, answer=[4,5]

Which of the following is a method?

 - `$name`

 - `Person()`

 - `$pObject`

 - `function`

 - `__construct()`


/// type=SS, answer=[1]

Which of the following is a property?

 - `$name`

 - `Person()`

 - `$pObject`

 - `function`

 - `__construct()`


/// type=SS, answer=[2]

Which of the following is a parameter?

 - `John`

 - `$name`

 - `$this`

 - `Person`

 - `$pObject`


/// type=SS, answer=[1]

Which of the following is an argument?

 - `John`

 - `$name`

 - `$this`

 - `Person`

 - `$pObject`


/// type=SS, answer=[4]

In the method definition `public function __construct($name)` on line 6, what is `$name`?

 - It is a value.

 - It is a string.

 - It is a property.

 - It is a parameter.

 - It is an argument.


/// type=MS, answer=[1,5]

In the method definition `public function __construct($name)` on line 6, what is `__construct()`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a property.

 - It is a constructor.


/// type=SS, answer=[2]

In the method definition `public function __construct($name)` on line 6, what does `public` do?

 - It accesses the `__construct()` method of the `Person` class.

 - It sets the accessibility of the `__construct()` method everywhere.

 - It declares and initializes the `__construct()` method of the `Person` class.

 - It sets the accessibility of the `__construct()` method only within the `Person` class.

 - It sets the accessibility of the `__construct()` method only within the `Person` class and its child or parent classes.


/// type=SS, answer=[1]

On line 8, what does the statement `$this->name = $name;` do?

 - It assigns the value of `$name` to the `$name` property of the `Person` class.

 - It accesses the value of `$name` in the `$name` property of the `Person` class.

 - It retrieves the value of `$name` in the `$name` property of the `Person` class.

 - It evaluates the value of `$name` in the `$name` property of the `Person` class.

 - It removes the value of `$name` from the `$name` property of the `Person` class.


/// type=MS, answer=[1,5]

On lines 6, 7, 8, and 9, what does the `__construct()` method do?

 - It sets the value of the `Person` class property `$name`.

 - It returns the value of the `Person` class property `$name`.

 - It removes the value of the `Person` class property `$name`.

 - It accesses the value of the `Person` class property `$name`.

 - It defines the constructor of the `Person` class with the parameter `$name`.


/// type=MS, answer=[1,5]

Which statements correctly describe `$pObject = new Person("John");` on line 11?

 - It initializes the `$name` property of the `$pObject` object.

 - It removes the argument `John` from the `$pObject` object.

 - It returns the `$pObject` object of the `Person` class with the parameter `John`.

 - It declares the `$pObject` object of the `Person` class with the parameter `John`.

 - It creates the `$pObject` object of the `Person` class passing the argument `John`.

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->display();
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `James`.

 - No output is displayed.

 - It prints `James is years old.`.

 - It prints `James is 15 years old.`.


/// type=MS, answer=[3,4]

Which of the following are visibility keywords?

 - `new`

 - `class`

 - `public`

 - `private`

 - `function`


/// type=SS, answer=[4]

Which method is accessible only within the `Person` class?

 - `setAge()`

 - `getAge()`

 - `display()`

 - `checkAge()`

 - `__construct()`


/// type=SS, answer=[1]

Which property is accessible only within the `Person` class?

 - `$age`

 - `$name`

 - `Person`

 - `$newAge`

 - `$pObject`


/// type=SS, answer=[5]

Which of the following is a method definition of the `Person` class constructor?

 - `public function getAge() { }`

 - `public function display() { }`

 - `private function checkAge($age) { }`

 - `public function setAge($newAge) { }`

 - `public function __construct($name, $age) { }`


/// type=SS, answer=[2]

Which statement best describes `$this->checkAge($age)` on line 10?

 - It returns the argument `$age` in the `checkAge()` method of the `Person` class.

 - It calls the `checkAge()` method of the `Person` class passing the argument `$age`.

 - It creates the `checkAge()` method of the `Person` class with the parameter `$age`.

 - It removes the argument `$age` from the `checkAge()` method of the `Person` class.

 - It accesses the argument `$age` from the `checkAge()` method of the `Person` class.


/// type=MS, answer=[1,2,5]

On lines 10, 11, and 12, what does the `if` statement do?

 - It evaluates the truthiness of the method call `$this->checkAge($age)` on line 10.

 - It executes the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It executes the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `false`. 

 - It does not execute the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `true`. 

 - It does not execute the statement `$this->age = $age;` if the method call inside the parentheses `()` evaluates to `false`. 


/// type=MS, answer=[1,2,3,4]

Which statements correctly describe the `checkAge()` method of the `Person` class?

 - It is accessible only within the `Person` class.

 - It returns `true` if the value of `$age` is greater than `0`.

 - It is not accessible by any instance of the `Person` class.

 - It returns `false` if the value of `$age` is less than or equal to `0`.

 - It is accessible everywhere from inside and outside of the `Person` class.


/// type=MS, answer=[1,2]

Which statements correctly describe the `__construct()` method of the `Person` class?

 - It sets the values of the `Person` class properties `$name` and `$age`.

 - It defines the constructor of the `Person` class with two parameters.

 - It returns the values of the `Person` class properties `$name` and `$age`.

 - It removes the values of the `Person` class properties `$name` and `$age`.

 - It accesses the values of the `Person` class properties `$name` and `$age`.


/// type=MS, answer=[2,5]

Which statements correctly describe the code on line 40?

 - It sets the arguments `James` and `15` to the `$pObject` object.

 - It initializes the `$name` and `$age` properties of the `$pObject` object.

 - It returns the `$pObject` object of the `Person` class with the parameters `James` and `15`.

 - It declares the `$pObject` object of the `Person` class with the parameters `James` and `15`.

 - It creates the `$pObject` object of the `Person` class passing the arguments `James` and `15`.

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->setAge(45);
$pObject->display();
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `45`.

 - It prints `James`.

 - It prints `James is 45 years old.`.

 - It prints `James is 15 years old.`.


/// type=SS, answer=[5]

In the statement `$pObject->setAge(45);` on line 40, replace the value `45` with `-45`. Execute the program. What is its output?

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->setAge(-45);
$pObject->display();
```
/// type=MS, answer=[4,5]

Why is the value of the `$age` property not set to `-45`?

 - There is no semicolon `;` at the end of the statement on line 41.

 - The `setAge()` method is accessible only within the `Person` class.

 - On line 41, the argument `-45` is not enclosed in double quotes `""`.

 - On line 41, the argument `-45` in the `setAge()` method is less than `0`.

 - The `setAge()` method only assigns values greater than `0` to the `$age` property of `$pObject`.


/// type=SS, answer=[5]

Remove the statement `$pObject->setAge(-45);` on line 40. Execute the program. What is its output?

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);

$pObject->display();
```
/// type=SS, answer=[4]

Add the statement `$pObject->name = "Diana";` on line 40. Execute the program. What is its output?

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->name = "Diana";
$pObject->display();
```
/// type=SS, answer=[2]

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->name = "Diana";
$pObject->display();
```
/// type=SS, answer=[5]

Remove the statement `$pObject->name = "Diana";` on line 40. Execute the program. What is its output?

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->display();
```
/// type=SS, answer=[2]

In the statement `$pObject = new Person("James", 15);` on line 39, replace `Person("James", 15)` with `Person()`. Execute the program. What is its output?

 - It prints `Diana`.

 - It produces an error.

 - No output is displayed.

 - It prints `Diana is 15 years old.`.

 - It prints `James is 15 years old.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[4]

Which statement is true about a class constructor?

 - It is a variable defined inside a class.

 - It is a basic building block of a method.

 - It is an actual representation of a function.

 - It is a method that initializes an object of a certain class.

 - It is a blueprint that defines the characteristics and behaviors of all objects of a specific kind.


/// type=SS, answer=[1]

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
    $pObject = new Person();
    echo $pObject->name;
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `John`.

 - It prints `$newName`.

 - It produces an error.

 - No output is displayed.


/// type=MS, answer=[1,5]

What are the error messages?

 - Undefined variable: `name` on line number 8

 - syntax error, unexpected `'='` on line number 11

 - Uncaught Error: Call to undefined function `Person()` on line number 11

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 6

 - Missing argument `1` for `Person::__construct()`, called on line 11 and defined on line number 6


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is no `new` keyword before `Person()` on line 11.

 - There is no semicolon `;` at the end of the statement on line 11.

 - On line 11, the statement `$pObject = new Person();` is invalid.

 - There is no assignment operator `=` between `&pObject` and `new` on line 11.

 - There is no argument specified in the `Person()` class constructor on line 11.

:::


/// type=CR, answer=[tests/Constructor/MissingArgumentOnPersonConstructorTest.php]

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
    $pObject = new Person();
    echo $pObject->name;
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
    $pObject = new Person("John");
    echo $pObject->name;
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - Undefined variable: `name` on line number 8

 - syntax error, unexpected `'='` on line number 11

 - Uncaught Error: Call to private `Person::__construct()` on line number 11

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 6

 - syntax error, unexpected `'__construct'` (T_STRING), expecting variable (T_VARIABLE) on line number 6


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There are no parentheses `()` after `__construct` on line 6.

 - On line 6, the parameter `$name` is not enclosed in double quotes `""`.

 - On line 6, the method definition `public  __construct($name)` is invalid.

 - There is no `public` visibility keyword before `__construct($name)` on line 6.

 - There is no `function` keyword between `public` and `__construct($name)` on line 6.

:::


/// type=CR, answer=[tests/Constructor/MissingFunctionKeywordOnConstructTest.php]

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
    $pObject = new Person("John");
    echo $pObject->name;
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
		if($this->checkAge($age)) {
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
$pObject = new Person("James" 15);
$pObject->display();
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `James`.

 - It produces an error.

 - It prints `James is years old.`.

 - It prints `James is 15 years old.`.


/// type=SS, answer=[5]

What is the error message?

 - syntax error, unexpected `','` on line number 40

 - syntax error, unexpected `')'` on line number 40

 - syntax error, unexpected end of file on line number 41

 - syntax error, unexpected `'"'`, expecting `','` or `')'` on line number 40

 - syntax error, unexpected `'15'` (T_LNUMBER), expecting `','` or `')'` on line number 40


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 40.

 - On line 40, the first argument `James` is enclosed in double quotes `""`. 

 - There is no comma `,` between the arguments `James` and `15` on line 40.

 - On line 40, the second argument `15` is not enclosed in double quotes `""`. 

 - On line 40, the statement `$pObject = new Person("James" 15);` is invalid.

:::


/// type=CR, answer=[tests/Constructor/MissingCommaBetweenArgumentsTest.php]

Correct the code so that it outputs the code `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		if($this->checkAge($age)) {
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
$pObject = new Person("James" 15);
$pObject->display();
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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->display();
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'{'`, expecting `')'` on line number 8

 - syntax error, unexpected `'$age'` (T_VARIABLE), expecting `')'` on line number 7

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) on line number 7

 - syntax error, unexpected `','`, expecting variable (T_VARIABLE) on line number 7

 - syntax error, unexpected `'$name'` (T_VARIABLE), expecting `'('` on line number 7


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no close parenthesis `)` after `$age` on line 7.

 - There is no open parenthesis `(` after `__construct` on line 7.

 - On line 7, the parameter `$age` is not enclosed in double quotes `""`.

 - There is no comma `,` between the parameters `$name` and `$age` on line 7.

 - On line 7, the method definition `public function __construct($name $age)` is invalid.

:::


/// type=CR, answer=[tests/Constructor/MissingCommaBetweenParametersTest.php]

Correct the code so that it outputs the code `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
	public function __construct($name $age)
	{
		$this->name = $name;
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->display();
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
		if($this->checkAge($age)) {
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
$pObject = new Person("James");
$pObject->display();
```
/// type=MS, answer=[1,5]

Execute the program. What are the error messages?

 - Undefined variable: `age` on line number 10

 - syntax error, unexpected end of file on line number 41

 - syntax error, unexpected `'"'`, expecting `','` or `')'` on line number 40

 - syntax error, unexpected `'James'` (T_LNUMBER), expecting `','` or `')'` on line number 40

 - Missing argument `2` for `Person::__construct()`, called on line 40 and defined on line number 7


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 40.

 - On line 40, the argument `James` is enclosed in double quotes `""`.

 - On line 40, the statement `$pObject = new Person("James");` is invalid.

 - There is no assignment operator `=` between `$pObject` and `new` on line 40.

 - There is no second argument specified in the `Person()` class constructor on line 40.

:::


/// type=CR, answer=[tests/Constructor/MissingOneArgumentTest.php]

Correct the code so that it outputs the code `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		if($this->checkAge($age)) {
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
$pObject = new Person("James");
$pObject->display();
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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->display();
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `James`.

 - It produces an error.

 - It prints `James is years old.`.

 - It prints `James is 15 years old.`.


/// type=SS, answer=[3]

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
		if($this->checkAge($age)) {
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
$pObject = new Person("James", 15);
$pObject->display();
```
/// type=SS, answer=[2]

Remove the `new` keyword from the statement `$pObject = new Person("James", 15);` on line 40. Execute the program. What is the error message?

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
		if($this->checkAge($age)) {
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
$pObject = Person("James", 15);
$pObject->display();
```
/// type=MS, answer=[1,3,4]

Remove the argument `$age` from `if ($this->checkAge($age))` on line 10. Execute the program. What are the error messages?

 - Undefined variable: `age` on line number 29

 - Uncaught Error: Call to undefined function `Person()` on line number 40

 - Uncaught Error: Call to private method `Person::display()` on line number 41

 - Missing argument `1` for `Person::checkAge()`, called on line 10 and defined on line number 27

 - Missing argument `2` for `Person::__construct()`, called on line 40 and defined on line number 7

:::


/// type=CR, answer=[tests/Constructor/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the code `James is 15 years old.`.

```php
<?php
class Person
{
    public $name;
    private $age;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		if($this->checkAge()) {
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
$pObject = Person("James", 15);
$pObject->display();
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Constructor/AddConstructorToClassTest.php]

Write a program that uses a `__construct()` method to add a constructor to a certain class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add a property definition of a class property `$type` with the value `Dog` using the `private` visibility keyword. Use the `private` visibility keyword to define another class property named `$age`. Next, add a `__construct()` method with the parameters `$type` and `$age`. Inside the `__construct()` method body, add a statement that assigns the value of `$type` to the `$type` property of the `Animal` class. Then, add an `if` statement that evaluates `$age` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$age` to the `$age` property of the `Animal` class. After the `__constuct()` method definition, add a `private` method named `isValid()` with a parameter `$value`. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. Add another `public` methods `display()`, `getType()`, `getAge()`, and `setAge()` with a parameter `$newAge`. Inside the `getType()` method body, add a statement that returns the value of the `$type` property. Inside the `getAge()` method body, add a statement that returns the value of the `$age` property. Inside the `display()` method body, add an `echo` statement to display the string `"The " . $this->getType() . " is " . $this->getAge() . " years old".`. Inside the `setAge()` method body, add an `if` statement that evaluates `$newAge` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$newAge` to the `$age` property of the `Animal` class. After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.

```php
<?php



?>
```

+++
