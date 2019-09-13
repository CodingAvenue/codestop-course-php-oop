# Static Methods and Properties

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

echo Person::greeting("Hello");
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, Anna!`.


/// type=SS, answer=[2]

In the statement `public static $name = "Anna";` on line 4, what is `static`?

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is an operator.

 - it is a pseudo-variable.


/// type=SS, answer=[5]

Which statement best describes `public static $name = "Anna";` on line 4?

 - It returns the value `Anna` of the static property `$name`.

 - It defines the `$name` property with the static value `Anna`.

 - It removes the value `Anna` from the static property `$name`.

 - It accesses the value `Anna` from the static property `$name`.

 - It defines the static property `$name` with the default value `Anna`.


/// type=SS, answer=[4]

In the declaration `public static function greeting($greet)` on line 6, what is `$greet`?

 - It is a value.

 - It is a method.

 - It is an operator.

 - It is a parameter.

 - It is an argument.


/// type=SS, answer=[2]

In the declaration `public static function greeting($greet)` on line 6, what is `greeting()`?

 - It is a value.

 - It is a method.

 - It is an operator.

 - It is a parameter.

 - It is an argument.


/// type=SS, answer=[4]

In the declaration `public static function greeting($greet)` on line 6, what does the `static` keyword do?

 - It removes the `greeting()` method.

 - It accesses the `greeting()` method.

 - It creates the new `greeting()` method.

 - It defines the static method `greeting()`.

 - It sets the visibility of the `greeting()` method.


/// type=SS, answer=[1]

Which statement best describes `public static function greeting($greet)` on line 6?

 - It declares the static method `greeting()` with the parameter `$greet`.

 - It declares the `greeting()` method with the static parameter `$greet`.

 - It assigns the value of the parameter `$greet` to the static method `greeting()`.

 - It creates the value of the parameter `$greet` for the static method `greeting()`.

 - It removes the value of the parameter `$greet` from the static method `greeting()`.


/// type=SS, answer=[2]

In the statement `return $greet . ", " . self::$name . "!";` on line 8, what is `self`?

 - It is a method.

 - it is a keyword.

 - It is a property.

 - It is an operator.

 - It is a parameter.


/// type=SS, answer=[5]

In the statement `return $greet . ", " . self::$name . "!";` on line 8, what is `::`?

 - It is a pseudo-variable.

 - It is an object operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a scope resolution operator.


/// type=SS, answer=[4]

In the statement `return $greet . ", " . self::$name . "!";` on line 8, what does `self::$name` do?

 - It defines the static property `$name`.

 - It creates the static property `$name`.

 - It removes the static property `$name`.

 - It accesses the static property `$name`.

 - It evaluates the value of the static property `$name`.


/// type=SS, answer=[3]

Which statement best describes `Person::greeting("Hello")` on line 12?

 - It removes the argument `Hello` from the `greeting()` method of the `Person` class.

 - It removes the static method `greeting()` with the parameter `Hello` of the `Person` class.

 - It calls the static method `greeting()` passing the argument `Hello` outside the `Person` class.

 - It creates the static method `greeting()` with the parameter `Hello` outside the `Person` class.

 - It defines the static method `greeting()` with the parameter `Hello` outside the `Person` class.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person::greeting("Hello");
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `Hello`.

 - It prints `James`.

 - It prints `Hello, Anna!`.

 - It prints `Hello, James!`.


/// type=SS, answer=[3]

Which of the following is a static property?

 - `Anna`

 - `self`

 - `$name`

 - `$greet`

 - `greeting()`


/// type=SS, answer=[5]

Which of the following is a static method?

 - `Anna`

 - `self`

 - `$name`

 - `$greet`

 - `greeting()`


/// type=MS, answer=[1,3,5]

Which statements correctly describe the `greeting()` method?
 
 - It is a static method with `public` visibility that returns a value.

 - It is a static method with `public` visibility that does not return a value.

 - It can be called outside the `Person` class without an object instantiation.

 - It is a static method with `protected` visibility that does not return a value.

 - It can be accessed outside the `Person` class using the class name with the scope resolution operator `::`.


/// type=SS, answer=[1]

Which statement best describes `Person::$name = "James";` on line 12?

 - It assigns the value `James` to the static property `$name` outside the `Person` class.

 - It displays the value `James` of the static property `$name` outside the `Person` class.

 - It accesses the value `James` of the static property `$name` outside the `Person` class.

 - It evaluates the value `James` of the static property `$name` outside the `Person` class.

 - It removes the value `James` from the static property `$name` outside the `Person` class.


/// type=MS, answer=[1,5]

Which statements correctly describe the code on line 13?

 - It displays the string `Hello, James!`.

 - It removes the static method `greeting()` with the parameter `Hello` of the `Person` class.

 - It creates the static method `greeting()` with the parameter `Hello` outside the `Person` class.

 - It defines the static method `greeting()` with the parameter `Hello` outside the `Person` class.

 - It calls the static method `greeting()` passing the argument `Hello` outside the `Person` class.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$pObject = new Person("John", 12);
$pObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It prints `Hello`.

 - It prints `Hello, John!`.

 - It prints `You are 12 years old.`.

 - It prints `Hello, John! You are 12 years old.`.


/// type=SS, answer=[3]

Which of the following is a static method?

 - `getAge()`

 - `display()`

 - `greeting()`

 - `checkAge()`

 - `__construct()`


/// type=SS, answer=[2]

Which of the following is a static property?

 - `$age`

 - `$name`

 - `$greet`

 - `$newAge`

 - `$pObject`


/// type=SS, answer=[1]

Which statement best describes `self::$name = $name;` on line 9?

 - It assigns the value of `$name` to the static property `$name` of the `Person` class.

 - It displays the value of `$name` in the static property `$name` of the `Person` class.

 - It evaluates the value of `$name` in the static property `$name` of the `Person` class.

 - It removes the value of `$name` from the static property `$name` of the `Person` class.

 - It accesses the value of `$name` from the static property `$name` of the `Person` class.


/// type=SS, answer=[3]

Which statement best describes `self::$name` on line 37?

 - It defines the static property `$name` of the `Person` class.

 - It removes the static property `$name` of the `Person` class.

 - It accesses the static property `$name` of the `Person` class.

 - It displays the static property `$name` of the `Person` class.

 - It evaluates the static property `$name` of the `Person` class.


/// type=SS, answer=[3]

Which statement best describes `self::greeting("Hello")` on line 42?

 - It creates the static method `greeting()` with the parameter `Hello` in the `Person` class.

 - It defines the static method `greeting()` with the parameter `Hello` in the `Person` class.

 - It calls the static method `greeting()` passing the argument `Hello` in the `Person` class.

 - It removes the static method `greeting()` with the parameter `Hello` in the `Person` class.

 - It evaluates the static method `greeting()` with the parameter `Hello` in the `Person` class.

:::


:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `Good day`.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

 - It prints `Good day, John! John is taking up BSCS.`.


/// type=SS, answer=[4]

Which of the following is a static method definition?

 - `public function display() {...}`

 - `public function getCourse() {...}`

 - `private function checkAge($age) {...}`

 - `public static function greeting($greet) {...}`

 - `public function __construct($name, $age) {...}`


/// type=MS, answer=[4,5]

Which of the following are static method calls?

 - `self::$name`

 - `parent::$name`

 - `$studObject->display()`

 - `self::greeting("Hello")`

 - `parent::greeting("Good day")`


/// type=SS, answer=[5]

Which of the following is a static property definition?

 - `private $age;`

 - `private $course;`

 - `return $this->course;`

 - `$this->course = $course;`

 - `public static $name = "Anna";`


/// type=SS, answer=[3]

Which statement best describes `parent::$name` on line 19 of the `Student` class?

 - It defines the static property `$name` of the parent class `Person` in the child class `Student`.

 - It removes the static property `$name` of the parent class `Person` in the child class `Student`.

 - It accesses the static property `$name` of the parent class `Person` in the child class `Student`.

 - It displays the static property `$name` of the parent class `Person` in the child class `Student`.

 - It evaluates the static property `$name` of the parent class `Person` in the child class `Student`.


/// type=SS, answer=[1]

Which statement best describes `parent::greeting("Good day")` on line 19 of the `Student` class?

 - It calls the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It creates the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It defines the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It removes the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It evaluates the static method `greeting()` of the parent class `Person` in the child class `Student`.


/// type=MS, answer=[3,5]

Which statements correctly describe the `display()` method of the `Student` class?

 - It removes the implementation of the `display()` method in the parent class `Person`.

 - It accesses the implementation of the `display()` method in the parent class `Person`.

 - It overrides the implementation of the `display()` method in the parent class `Person`.

 - It is a method definition that duplicates the `display()` method in the parent class `Person`.

 - It is a method definition that changes the behavior of the `display()` method in the parent class `Person`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[4]

In the `echo` statement on line 19 of `Student.php`, replace all the `parent` keywords with `self`. Execute the program. What is its output?

 - It prints `Good day`.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

 - It prints `Good day, John! John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo self::$name . " is taking up " . $this->course . ". " . self::greeting("Good day");
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[5]

In the method call `self::greeting("Hello")` on line 42 of `Person.php`, replace `self::` with `$this->`. Execute the program. What is its output?

 - It prints `Good day`.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `Good day, John! John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo $this->greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo self::$name . " is taking up " . $this->course . ". " . self::greeting("Good day");
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[1]

In the statement `return $greet . ", " . self::$name . "!";` on line 37 of `Person.php`, replace `self::$name` with `$this->name`. Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `John is taking up BSCS.`.

 - It prints `Good day, John! John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

:::

+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[2,3,4]

Which statements correctly describe a static method?

 - The `$this` pseudo-variable with object operator `->` is required inside a static method.

 - The `$this` pseudo-variable with object operator `->` is not allowed inside a static method. 

 - It can be accessed outside a class without creating an object as an instance of a class itself.

 - All static methods with `public` visibility can be accessed outside a class using the class name with the scope operator `::`. 

 - All static methods with `protected` visibility can be accessed outside a class using the class name with the scope operator `::`. 


/// type=MS, answer=[2,3,4]

Which statements are true about a static property?

 - It can be accessed using the `$this` pseudo-variable with object operator `->`. 

 - It cannot be accessed using the `$this` pseudo-variable with object operator `->`. 

 - It can be accessed outside a class without creating an object as an instance of a class itself.

 - All static properties with `public` visibility can be accessed outside a class using the class name with the scope operator `::`. 

 - All static properties with `protected` visibility can be accessed outside a class using the class name with the scope operator `::`. 


/// type=SS, answer=[1]

Which statement best describes the `static` keyword?

 - It defines a static method and property.

 - It displays a static method and property.

 - It removes a static method and property.

 - It accesses a static method and property.

 - It evaluates a static method and property.


/// type=SS, answer=[5]

Which statement is true about the `self` keyword?

 - It defines static methods and properties within a class itself.

 - It returns static methods and properties within a class itself.

 - It creates static methods and properties within a class itself.

 - It removes static methods and properties within a class itself.

 - It accesses static methods and properties within a class itself.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
}

echo Person::greeting("Hello");
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, Anna!`.


/// type=SS, answer=[5]

What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, answer=[2,3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the `return` statement on line 8.

 - On line 8, the statement `return $greet . ", " . $this->name . "!";` is invalid.

 - The `$this` pseudo-variable is not allowed inside the static method `greeting()` on line 8.

 - On line 8, the expression `$this->name` that accesses the static property `$name` is incorrect.

 - The static method `greeting()` does not accept the `$this` pseudo-variable in accessing the static property `$name`.

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/IncorrectThisKeywordTest.php]

Correct the code so that it outputs the string `Hello, Anna!`.

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
}

echo Person::greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    protected static function greeting($greet)
    {
		return $greet . ", " . self::$name . "!";
    }
}

echo Person::greeting("Hello");
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, answer=[1,4]

Which statements correctly describe the error?

 - On line 12, the method call `Person::greeting("Hello")` is invalid.

 - There is no semicolon `;` at the end of the `return` statement on line 8.

 - There is no argument specified in the method call `Person::greeting("Hello")` on line 12.

 - The static method `greeting()` with `protected` visibility is not accessible outside the `Person` class.

 - On line 12, the scope resolution operator `::` between `Person` and `greeting("Hello")` is incorrect.

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/IncorrectCallToProtectedMethodTest.php]

Correct the code so that it outputs the string `Hello, Anna!`.

```php
<?php
class Person
{
    public static $name = "Anna";

    protected static function greeting($greet)
    {
		return $greet . ", " . self::$name . "!";
    }
}

echo Person::greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person->greeting("Hello");
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, answer=[2,3,5]

Which statements correctly describe the error?

 - On line 12, the statement `Person::$name = "James";` is invalid.

 - On line 13, the statement `echo Person->greeting("Hello");` is invalid.

 - On line 13, the object operator `->` between `Person` and `greeting("Hello")` is incorrect.

 - There is no argument specified in the method call `Person::greeting("Hello")` on line 13.

 - The scope resolution operator `::` is replaced with the object operator `->` in `Person->greeting("Hello")` on line 13.

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/IncorrectOperatorUsedInMethodCallTest.php]

Correct the code so that it outputs the string `Hello, James!`.

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person->greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    private static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person::greeting("Hello");
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 12.

 - On line 12, the statement `Person::$name = "James";` is invalid.

 - On line 13, the statement `echo Person::greeting("Hello");` is invalid.

 - There is a scope resolution operator `::` between `Person` and `$name` on line 12.

 - The static property `$name` with `private` visibility is not accessible outside the `Person` class.

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/IncorrectAccessToPrivatePropertyTest.php]

Correct the code so that it outputs the string `Hello, James!`.

```php
<?php
class Person
{
    private static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person::greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$pObject = new Person("John", 12);
$pObject->display();
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Accessing static property `Person::$name` as non static on line number 9

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Non-static method `Person::display()` should not be called statically on line number 47

 - Uncaught Error: Using `$this` when not in object context `Person::display()` thrown on line number 42
 
 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 42


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 9, the statement `$this->name = $name;` is invalid.

 - There is no dollar sign `$` before `name` in `$this->name` on line 9.

 - On line 4, the property definition `public static $name = "Anna";` is invalid.

 - There is a `static` keyword specified in `public static $name = "Anna";` on line 4.

 - The `$this` pseudo-variable with the object operator `->` is not allowed in accessing the static property `$name` of the `Person` class.

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/MissingSelfKeywordTest.php]

Correct the code so that it outputs the string `Hello, John! You are 12 years old.`.

```php
<?php
class Person
{
    public static $name = "Anna";
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$pObject = new Person("John", 12);
$pObject->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$pObject = new Person("John", 12);
$pObject::display();
?>
```
/// type=MS, answer=[3,4]

Execute the program. What are the error messages?

 - Accessing static property `Person::$name` as non static on line number 9

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Non-static method `Person::display()` should not be called statically on line number 47

 - Uncaught Error: Using `$this` when not in object context `Person::display()` thrown on line number 42
 
 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 42


/// type=MS, answer=[2,3,5]

Which statements correctly describe the error?

 - There are no parentheses `()` after `display` on line 47.

 - The method call `$pObject::display()` on line 47 is invalid.

 - The scope resolution operator `::` is not allowed in accessing non-static methods.

 - There is no argument specified in the method call `$pObject::display()` on line 47.

 - There is a scope resolution operator `::` between `$pObject` and `display()` on line 47.

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/IncorrectScopeResolutionOperatorTest.php]

Correct the code so that it outputs the string `Hello, John! You are 12 years old.`.

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$pObject = new Person("John", 12);
$pObject::display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$pObject = new Person("John", 12);
$pObject->display();
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Accessing static property `Person::$name` as non static on line number 9

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Non-static method `Person::display()` should not be called statically on line number 47

 - Uncaught Error: Using `$this` when not in object context `Person::display()` thrown on line number 42
 
 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 42


/// type=MS, answer=[2,3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the `return` statement on line 37.

 - On line 37, the statement `return $greet . ", " . $this->name . "!";` is invalid.

 - The `$this` pseudo-variable is not allowed inside the static method `greeting()` on line 37.

 - On line 37, the expression `$this->name` that accesses the static property `$name` is incorrect.

 - The static method `greeting()` does not accept the `$this` pseudo-variable in accessing the static property `$name`.

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/NotAllowedThisInStaticMethodTest.php]

Correct the code so that it outputs the string `Hello, John! You are 12 years old.`.

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$pObject = new Person("John", 12);
$pObject->display();
?>
```


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `Good day`.

 - It produces an error.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.


/// type=SS, answer=[2]

In the statement `return $greet . ", " . self::$name . "!";` on line 37 of `Person.php`, replace `self::$name` with `$this->name`. Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 37

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Missing argument `1` for `Person::greeting()`, called on line 19 and defined on line number 35

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting()` on line number 37

 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 19

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=MS, answer=[1,3,4]

Remove the string `"Good day"` from the method call `parent::greeting("Good day")` on line 19 of `Student.php`. Execute the program. What are the error messages?

 - Undefined variable: `greet` on line number 37

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Missing argument `1` for `Person::greeting()`, called on line 19 and defined on line number 35

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting()` on line number 37

 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 19

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting();
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[5]

In the declaration `public static function greeting($greet)` on line 35 of `Person.php`, replace `public` with `private`. Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 37

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Missing argument `1` for `Person::greeting()`, called on line 19 and defined on line number 35

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting()` on line number 37

 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 19

:::


/// type=CR, answer=[tests/StaticMethodsAndProperties/CorrectMultipleErrorsTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS. Good day, John!`.

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
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
	
    private static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting();
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/StaticMethodsAndProperties/CreateNewClassWithStaticMethodAndPropertyTest.php]

Write a program that uses `static` and `self` keywords to define and access a static method and property of a class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, use a `static` keyword to add a property definition of a class property `$type` with the value `Dog` using the `public` visibility keyword. Then, add another static property named `$age` with `public` visibility. Next, add a `__construct()` method with the parameters `$type` and `$age`. Inside the `__construct()` method body, add a statement that assigns the value of `$type` to the static property `$type` of the `Animal` class. Then, add an `if` statement that evaluates `$age` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$age` to the static property `$age` of the `Animal` class. After the `__constuct()` method definition, add a `private` method named `isValid()` with a parameter `$value`. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. Next, use the `static` keyword to add a static method named `display()` with `public` visibility. Inside the `display()` method body, add an `echo` statement to display the string `"The " . self::$type . " is " . self::$age . " years old."`. After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.

```php
<?php



?>
```

+++
