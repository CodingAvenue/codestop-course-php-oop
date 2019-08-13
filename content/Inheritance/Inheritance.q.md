# Inheritance

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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
?>
```

```php
<?php 
class Student extends Person
{

}

$studObject = new Student("John", 15);
$studObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - No output is displayed.

 - It prints `John is years old.`.

 - It prints `John is 15 years old.`.


/// type=MS, answer=[1,2]

Which of the following are properties?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `display()`


/// type=MS, answer=[2,4,5]

Which of the following are visibility keywords?

 - `new`

 - `public`

 - `extends`

 - `private`

 - `protected`


/// type=MS, answer=[2,3,5]

Which of the following are methods?

 - `extends`

 - `setAge()`

 - `display()`

 - `Student()`

 - `__construct()`


/// type=MS, answer=[4,5]

Which of the following are classes?

 - `$this`

 - `class`

 - `$name`

 - `Person`

 - `Student`


/// type=SS, answer=[3]

In the class definition `class Student extends Person { }`, what is `extends`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a constructor.


/// type=MS, answer=[1,5]

In the class definition `class Student extends Person { }`, what is `Person`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a child class.

 - It is a parent class.


/// type=MS, answer=[1,4]

In the class definition `class Student extends Person { }`, what is `Student`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a child class.

 - It is a parent class.


/// type=MS, answer=[4,5]

In the class definition `class Student extends Person { }`, what does the `extends` keyword do?

 - It creates the `Student` class with the value `Person`.

 - It sets the `Student` class as the parent of the `Person` class.

 - It accesses the `Student` class as the child of the `Person` class.

 - It specifies the `Person` class as the parent of the `Student` class.

 - It defines the `parent-child` relationships between `Person` and `Student` classes.


/// type=MS, answer=[2,4]

Which statements correctly describe `class Student extends Person { }`?

 - It is a definition of the `Student` class that replaces the `Person` class.

 - It is a definition of the `Student` class as the child class of the `Person` class.

 - It is a definition of the `Person` class as the child class of the `Student` class.

 - It creates the `Student` class that inherits all the `public` and `protected` properties and methods of the `Person` class. 

 - It creates the `Person` class that inherits all the `public` and `protected` properties and methods of the `Student` class. 


/// type=MS, answer=[4,5]

Which statements correctly describe `$studObject = new Student("John", 15);` on line 7 of `Student.php`?

 - It sets the arguments `John` and `15` to the `$studObject` object.

 - It returns the `$studObject` object of the `Student` class with the parameters `John` and `15`.

 - It declares the `$studObject` object of the `Student` class with the parameters `John` and `15`.

 - It initializes the `$name` and `$age` properties of the `$studObject` object inherited from the `Person` class.

 - It creates the `$studObject` object as an instance of the `Student` class passing the arguments `John` and `15`.


/// type=SS, answer=[1]

Which statement best describes `$studObject->display();` on line 8 of `Student.php`?

 - It calls the `display()` method of the `Student` class inherited from the `Person` class.

 - It creates the `display()` method of the `Student` class inherited from the `Person` class.

 - It defines the `display()` method of the `Student` class inherited from the `Person` class.

 - It returns the `display()` method of the `Student` class inherited from the `Person` class.

 - It removes the `display()` method of the `Student` class inherited from the `Person` class.

:::


:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - It prints `BSCS`.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, answer=[4]

Which of the following is a child class?

 - `John`

 - `Person`

 - `extends`

 - `Student`

 - `$studObject`


/// type=SS, answer=[2]

Which of the following is a parent class?

 - `John`

 - `Person`

 - `extends`

 - `Student`

 - `$studObject`


/// type=MS, answer=[1,2]

Which of the following are properties of the `Person` class?

 - `$age`

 - `$name`

 - `$course`

 - `$newAge`

 - `$studObject`


/// type=MS, answer=[1,2,3]

Which of the following are properties of the `Student` class?

 - `$age`

 - `$name`

 - `$course`

 - `$newAge`

 - `$studObject`


/// type=MS, answer=[1,2,3,4]

Which of the following are methods of the `Person` class?

 - `getAge()`

 - `display()`

 - `getName()`

 - `checkAge()`

 - `getCourse()`


/// type=MS, answer=[1,2,3,5]

Which of the following are methods of the `Student` class?

 - `getAge()`

 - `display()`

 - `getName()`

 - `checkAge()`

 - `getCourse()`


/// type=MS, answer=[2,4]

Which statements correctly describe `private $course;` on line 4 of `Student.php`?

 - It calls the `$course` property of the `Student` class.

 - It declares the `$course` property of the `Student` class.

 - It accesses the `$course` property of the `Student` class.

 - It sets the accessibility of the `$course` property only within the `Student` class.

 - It sets the accessibility of the `$course` property only within the `Student` class and its child or parent classes.


/// type=SS, answer=[3]

In the statement `parent::__construct($name, $age);` on line 8 of `Student.php`, what is `parent`?

 - It is a value.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a scope resolution operator.


/// type=SS, answer=[5]

In the statement `parent::__construct($name, $age);` on line 8 of `Student.php`, what is `::`?

 - It is a value.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a scope resolution operator.


/// type=SS, answer=[2]

Which statement best describes `parent::__construct($name, $age);`?

 - It creates the `__construct()` method of the parent class `Person` with the parameters `$name` and `$age` inside the child class `Student`.

 - It calls the `__construct()` method of the parent class `Person` passing the arguments `$name` and `$age` inside the child class `Student`.

 - It returns the arguments `$name` and `$age` from the `__construct()` method of the parent class `Person` inside the child class `Student`.

 - It defines the `__construct()` method of the parent class `Person` with the parameters `$name` and `$age` inside the child class `Student`.

 - It removes the arguments `$name` and `$age` from the `__construct()` method of the parent class `Person` inside the child class `Student`.


/// type=SS, answer=[1]

In the `echo` statement on line 19 of `Student.php`, what does `parent::getName()` do?

 - It calls the `getName()` method of the parent class `Person` inside the child class `Student`.

 - It removes the `getName()` method of the parent class `Person` from the child class `Student`.

 - It returns the `getName()` method of the parent class `Person` inside the child class `Student`.

 - It creates the `getName()` method of the parent class `Person` inside the child class `Student`.

 - It defines the `getName()` method of the parent class `Person` inside the child class `Student`.


/// type=MS, answer=[3,5]

Which statements correctly describe the `display()` method of the `Student` class?

 - It removes the implementation of the `display()` method in the parent class `Person`.

 - It accesses the implementation of the `display()` method in the parent class `Person`.

 - It overrides the implementation of the `display()` method in the parent class `Person`.

 - It is a method definition that duplicates the `display()` method in the parent class `Person`.

 - It is a method definition that changes the behavior of the `display()` method in the parent class `Person`.


/// type=MS, answer=[2,5]

Which statements correctly describe the code on line 23 of `Student.php`?

 - It sets the arguments `John`, `20`, and `BSCS` to the `$studObject` object.

 - It initializes the `$name`, `$age`, and `$course` properties of the `$studObject` object.

 - It returns the `$studObject` object of the `Student` class with the parameters `John`, `20`, and `BSCS`.

 - It declares the `$studObject` object of the `Student` class with the parameters `John`, `20`, and `BSCS`.

 - It creates the `$studObject` object as an instance of the `Student` class passing the arguments `John`, `20`, and `BSCS`.


/// type=MS, answer=[1,2]

Which statements correctly describe the code on line 24 of `Student.php`?

 - It displays the string `John is taking up BSCS.`.

 - It calls the `display()` method of the `Student` class that overrides its parent class method.

 - It creates the `display()` method of the `Student` class that overrides its parent class method.

 - It defines the `display()` method of the `Student` class that overrides its parent class method.

 - It returns the `display()` method of the `Student` class that overrides its parent class method.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[5]

In the `echo` statement on line 19 of `Student.php`, replace `parent::getName()` with `$this->name`. Execute the program? What is its output?

 - It prints `20`.

 - It prints `John`.

 - It prints `BSCS`.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=MS, answer=[4,5]

What makes the `$name` property of the `Person` class accessible inside the `Student` class?

 - The `$name` property of the `Person` class is accessible everywhere.

 - On line 4 of `Person.php`, the `$name` property is defined using the `public` visibility keyword.

 - On line 4 of `Person.php`, the `$name` property is defined using the `private` visibility keyword.

 - On line 4 of `Person.php`, the `$name` property is defined using the `protected` visibility keyword.

 - The `protected` visibility keyword allows the child class `Student` to access the `$name` property of the parent class `Person`. 


/// type=SS, answer=[3]

In the statement `$studObject->display();` on line 24 of `Student.php`, replace `display` with `getName`. Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->getName();
?>
```
/// type=SS, answer=[2]

Add the `echo` construct at the beginning of the statement `$studObject->getName();` on line 24 of `Student.php`. Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
echo $studObject->getName();
?>
```
/// type=SS, answer=[1]

In the statement `echo $studObject->getName();` on line 24 of `Student.php`, replace `getName()` with `getAge()`. Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
echo $studObject->getAge();
?>
```
/// type=SS, answer=[3]

In the statement `echo $studObject->getAge();` on line 24 of `Student.php`, replace `getAge()` with `checkAge()`. Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
echo $studObject->checkAge();
?>
```
/// type=SS, answer=[5]

On line 24 of `Student.php`, replace the statement `echo $studObject->checkAge();` with `$studObject->display();`. Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[4]

Remove the `display()` method definition on lines 17, 18, 19, and 20 of `Student.php`. Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::

+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[4,5]

Which statements are true about method overriding?

 - It accesses a parent class method in a child class.

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a process of defining a method in a child class with the same name and parameter of a parent class method.


/// type=SS, answer=[2]

Which statement best describes the `extends` keyword?

 - It accesses a parent class method in a child class.

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a process of defining a method in a child class with the same name and parameter of a parent class method.


/// type=SS, answer=[1]

What does the `parent` keyword with the scope resolution operator `::` do?

 - It accesses a parent class method in a child class.

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a process of defining a method in a child class with the same name and parameter of a parent class method.


/// type=SS, answer=[3]

Which statement best describes the `protected` visibility keyword?

 - It accesses a parent class method in a child class.

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a process of defining a method in a child class with the same name and parameter of a parent class method.

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo parent:getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, answer=[3]

What is the error message?

 - Undefined variable: `course` on line number 9

 - Uncaught Error: Call to private method `Person::checkAge()` on line 24

 - syntax error, unexpected `':'`, expecting `','` or `';'` on line number 19

 - Missing argument `3` for `Student::__construct()` on line 23 and defined on line number 6

 - Access level to `Student::display()` must be public (as in class Person) on line number 17


/// type=MS, answer=[1,4]

Which statements correctly describe the error?

 - On line 19 of `Student.php`, the method call `parent:getName()` is invalid.

 - There are no parentheses `()` after `parent:getName()` on line 19 of `Student.php`.

 - There is no semicolon `;` at the end of the `echo` statement on line 19 of `Student.php`.

 - On line 19 of `Student.php`, the scope resolution operator `::` after `parent` is replaced with a colon `:`. 

 - There is no concatenation operator `.` between `parent:getName()` and `" is taking up "` on line 19 of `Student.php`.

:::


/// type=CR, answer=[tests/Inheritance/MissingOneColonInParentMethodCallTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo parent:getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20);
$studObject->display();
?>
```
/// type=MS, answer=[1,4]

Execute the program. What are the error messages?

 - Undefined variable: `course` on line number 9

 - Uncaught Error: Call to private method `Person::checkAge()` on line 24

 - syntax error, unexpected `':'`, expecting `','` or `';'` on line number 19

 - Missing argument `3` for `Student::__construct()` on line 23 and defined on line number 6

 - Access level to `Student::display()` must be public (as in class Person) on line number 17


/// type=MS, answer=[2,3]

Which statements correctly describe the error?

 - There is no comma `,` between `John` and `20` in the statement on line 23 of `Student.php`.

 - There is no third argument specified in `Student("John", 20)` on line 23 of `Student.php`.

 - On line 23 of `Student.php`, the statement `$studObject = new Student("John", 20);` is invalid.

 - On line 23 of `Student.php`, the argument `John` in `Student("John", 20)` is enclosed in double quotes `""`.

 - On line 23 of `Student.php`, the argument `20` in `Student("John", 20)` is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/Inheritance/MissingOneArgumentOnStudentConstructTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20);
$studObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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

    private function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - Undefined variable: `course` on line number 9

 - Uncaught Error: Call to private method `Person::checkAge()` on line 24

 - syntax error, unexpected `':'`, expecting `','` or `';'` on line number 19

 - Missing argument `3` for `Student::__construct()` on line 23 and defined on line number 6

 - Access level to `Student::display()` must be public (as in class Person) on line number 17


/// type=MS, answer=[2,3,5]

Which statements correctly describe the error?

 - There are no parentheses `()` after `$studObject->display()` on line 17 of `Student.php`.

 - On line 17 of `Student.php`, the method definition `private function display()` is invalid.

 - On line 17 of `Student.php`, the `private` visibility keyword in the method definition is not allowed.

 - There is no semicolon `;` at the end of the statement `$studObject->display()` on line 17 of `Student.php`.

 - Overriding the `display()` method of the parent class `Person` using the `private` visibility keyword is not allowed.

:::


/// type=CR, answer=[tests/Inheritance/IncorrectDisplayMethodVisibilityTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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

    private function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
$studObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, answer=[2]

In the statement `$studObject->display();` on line 24 of `Student.php`, remove the dollar sign `$` from `$studObject`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 2

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 6

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 23

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John", 20, "BSCS");
studObject->display();
?>
```
/// type=SS, answer=[4]

In the statement `$studObject = new Student("John", 20, "BSCS");` on line 23 of `Student.php`, remove the comma `,` between `John` and `20`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 2

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 6

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 23

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John" 20, "BSCS");
studObject->display();
?>
```
/// type=SS, answer=[3]

In the method definition `public function __construct($name, $age, $course)` on line 6 of `Student.php`, remove the comma `,` between `$age` and `$course`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 2

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 6

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 23

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
?>
```

```php
<?php 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age $course)
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John" 20, "BSCS");
studObject->display();
?>
```
/// type=SS, answer=[5]

remove the `private` visibility keyword in the property definition `private $course;` on line 4 of `Student.php`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 2

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 6

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 23

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
?>
```

```php
<?php 
class Student extends Person
{
     $course;
    	
    public function __construct($name, $age $course)
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John" 20, "BSCS");
studObject->display();
?>
```
/// type=SS, answer=[1]

Remove the `class` keyword before `Student` on line 2 of `Student.php`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 2

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 6

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 23

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 4

:::


/// type=CR, answer=[tests/Inheritance/CorrectMultipleErrorsTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
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
?>
```

```php
<?php 
 Student extends Person
{
     $course;
    	
    public function __construct($name, $age $course)
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
        echo $this->name . " is taking up " . $this->course . ".";
    }
}

$studObject = new Student("John" 20, "BSCS");
studObject->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Inheritance/CreateChildClassTest.php], filename=[Animal.php,Mammal.php]

Given the parent class `Animal` implementation, write a program that uses the `extends` keyword to establish `parent-child` relationships to classes. In the `Mammal.php` tab, use a `class` keyword to declare a class named `Mammal` that `extends` the parent class `Animal`. Within the curly braces `{}`, add a property definition of a class property `$name` using the `private` visibility keyword. Next, add a `__construct()` method with the parameters `$type`, `$age`, and `$name`. Inside the `__construct()` method body, add a statement that calls the parent class constructor `__construct()` passing the arguments `$type` and `$age`. Then, add another statement that assigns the value of `$name` to the `$name` property of the `Mammal` class. After the `__constuct()` method definition, add a `public` method `display()` that overrides the existing `display()` method of the parent class `Animal`. Inside the `display()` method body, add an `echo` statement to display the string `"The " . parent::getType() . " named " . $this->getName() . " is a " . parent::getAge() . "-year old mammal."`. Add another `public` method `getName()` that returns the value of the `$name` property of the `Mammal` class. After the class declaration, add a statement that creates the `$petMammal` object an instance of the `Mammal` class passing the arguments `Cat`, `3`, and `Catsie`. Then, add another statement that calls the `display()` method of the `$petMammal` object. Run the program to view the output.

```php
<?php
class Animal
{
    private $type = "Dog";
    private $age;
	
    public function __construct($type, $age)
    {
        $this->type = $type;
        if ($this->isValid($age)) {
            $this->age = $age;
        }
    }
	
    private function isValid($value)
    {
        if ($value > 0) {
            return true;
        }
        return false;
    }
	
    public function getType()
    {
        return $this->type;
    }
	
    public function getAge()
    {
        return $this->age;
    }
	
    public function display()
    {
        echo "The " . $this->getType() . " is " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php



?>
```

+++
