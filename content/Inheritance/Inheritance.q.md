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
require_once(__DIR__ . '/Person.php');
class Student extends Person
{

}

$student = new Student("John", 15);
$student->display();
?>
```
/// type=SS, id=6bb99a6b-6500-4df5-85e0-bd6e6b86cea2, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - No output is displayed.

 - It prints `John is years old.`.

 - It prints `John is 15 years old.`.


/// type=MS, id=ffe0507c-5703-4be6-929d-45aee4c6c1fc, answer=[1,2]

Which of the following are properties?

 - `$age`

 - `$name`

 - `$this`

 - `$newAge`

 - `display()`


/// type=MS, id=82e15a4e-10a1-46e3-b1c4-c3890241bc93, answer=[2,4,5]

Which of the following are visibility keywords?

 - `new`

 - `public`

 - `extends`

 - `private`

 - `protected`


/// type=MS, id=0135146b-e92a-40c2-a4e2-b699058cffa2, answer=[2,3,5]

Which of the following are methods?

 - `extends`

 - `setAge()`

 - `display()`

 - `Student()`

 - `__construct()`


/// type=MS, id=26ef4766-1cd4-4780-83e1-64a49622ee4b, answer=[4,5]

Which of the following are classes?

 - `$this`

 - `class`

 - `$name`

 - `Person`

 - `Student`


/// type=SS, id=a310bb36-4ad5-4eb9-ab0d-6c963e1d9f0d, answer=[3]

In the class definition `class Student extends Person { }`, what is `extends`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a constructor.


/// type=MS, id=52a57bd6-94b2-4144-ad53-1698e50ca9cc, answer=[1,5]

In the class definition `class Student extends Person { }`, what is `Person`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a child class.

 - It is a parent class.


/// type=MS, id=c4265767-a4fe-49b0-acaf-7a14b0cbc352, answer=[1,4]

In the class definition `class Student extends Person { }`, what is `Student`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a child class.

 - It is a parent class.


/// type=MS, id=c9f89ac5-bccb-4ddc-8ec0-9af689c2f64d, answer=[4,5]

In the class definition `class Student extends Person { }`, what does the `extends` keyword do?

 - It creates the `Student` class with the value `Person`.

 - It sets the `Student` class as the parent of the `Person` class.

 - It accesses the `Student` class as the child of the `Person` class.

 - It specifies the `Person` class as the parent of the `Student` class.

 - It defines the `parent-child` relationships between `Person` and `Student` classes.


/// type=MS, id=4ae5f3fa-1e35-4b68-a71c-467a38412e7e, answer=[2,4]

Which statements correctly describe `class Student extends Person { }`?

 - It is a definition of the `Student` class that replaces the `Person` class.

 - It is a definition of the `Student` class as the child class of the `Person` class.

 - It is a definition of the `Person` class as the child class of the `Student` class.

 - It creates the `Student` class that inherits all the `public` and `protected` properties and methods of the `Person` class. 

 - It creates the `Person` class that inherits all the `public` and `protected` properties and methods of the `Student` class. 


/// type=MS, id=3d8bb1a2-503a-427f-8859-3198fa982fc0, answer=[4,5]

Which statements correctly describe `$student = new Student("John", 15);` on line 8 of `Student.php`?

 - It sets the arguments `John` and `15` to the `$student` object.

 - It returns the `$student` object of the `Student` class with the parameters `John` and `15`.

 - It declares the `$student` object of the `Student` class with the parameters `John` and `15`.

 - It initializes the `$name` and `$age` properties of the `$student` object inherited from the `Person` class.

 - It creates the `$student` object as an instance of the `Student` class passing the arguments `John` and `15`.


/// type=SS, id=db65f364-0c91-4168-bd53-e0b609c5520f, answer=[1]

Which statement best describes `$student->display();` on line 9 of `Student.php`?

 - It calls the `display()` method of the `Student` class inherited from the `Person` class.

 - It creates the `display()` method of the `Student` class inherited from the `Person` class.

 - It defines the `display()` method of the `Student` class inherited from the `Person` class.

 - It returns the `display()` method of the `Student` class inherited from the `Person` class.

 - It removes the `display()` method of the `Student` class inherited from the `Person` class.


/// type=SS, id=97380759-3e66-4ebb-93f8-7e746176e6af, answer=[3]

Which statement best describes `require_once(__DIR__ . '/Person.php');` on line 2 of `Student.php`?

- It updates the file `Person.php`.

- It establishes a relationship between classes.

- It includes the file `Person.php` in the file `Student.php`.

- It removes the file `Person.php` in the file `Student.php`.

- It excludes the file `Person.php` in the file `Student.php`.

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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```
/// type=SS, id=3a7a0c10-5750-4019-9c93-96d287a82be9, answer=[5]

Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - It prints `BSCS`.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, id=a486a167-3aa5-47b6-a974-1faf21450943, answer=[4]

Which of the following is a child class?

 - `John`

 - `Person`

 - `extends`

 - `Student`

 - `$student`


/// type=SS, id=bbfc4e3a-6992-4b90-aec9-5275a8c45a78, answer=[2]

Which of the following is a parent class?

 - `John`

 - `Person`

 - `extends`

 - `Student`

 - `$student`


/// type=MS, id=49b639a8-9738-4626-9bb2-4fd4d778e5b6, answer=[1,2]

Which of the following are properties of the `Person` class?

 - `$age`

 - `$name`

 - `$course`

 - `$newAge`

 - `$student`


/// type=MS, id=3bdf7394-03db-4e8d-b622-37ef21e04a67, answer=[1,2,3]

Which of the following are properties of the `Student` class?

 - `$age`

 - `$name`

 - `$course`

 - `$newAge`

 - `$student`


/// type=MS, id=26c48363-fa3e-4e0d-be5b-f603ed86f4bf, answer=[1,2,3,4]

Which of the following are methods of the `Person` class?

 - `getAge()`

 - `display()`

 - `getName()`

 - `checkAge()`

 - `getCourse()`


/// type=MS, id=3b9282b1-73cb-4aea-b96a-c8c3ce612516, answer=[1,2,3,5]

Which of the following are methods of the `Student` class?

 - `getAge()`

 - `display()`

 - `getName()`

 - `checkAge()`

 - `getCourse()`


/// type=MS, id=219d9888-94a3-4271-b1fd-ab15207478f4, answer=[2,4]

Which statements correctly describe `private $course;` on line 5 of `Student.php`?

 - It calls the `$course` property of the `Student` class.

 - It declares the `$course` property of the `Student` class.

 - It accesses the `$course` property of the `Student` class.

 - It sets the accessibility of the `$course` property only within the `Student` class.

 - It sets the accessibility of the `$course` property only within the `Student` class and its child or parent classes.


/// type=SS, id=54590ba6-7fc8-42b6-b250-4828edc624a0, answer=[3]

In the statement `parent::__construct($name, $age);` on line 9 of `Student.php`, what is `parent`?

 - It is a value.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a scope resolution operator.


/// type=SS, id=69867fda-2a91-46aa-ab2e-2d5358149c8b, answer=[5]

In the statement `parent::__construct($name, $age);` on line 9 of `Student.php`, what is `::`?

 - It is a value.

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a scope resolution operator.


/// type=SS, id=4a287adf-5fcc-4fb1-965d-3d636f4089f6, answer=[2]

Which statement best describes `parent::__construct($name, $age);`?

 - It creates the `__construct()` method of the parent class `Person` with the parameters `$name` and `$age` inside the child class `Student`.

 - It calls the `__construct()` method of the parent class `Person` passing the arguments `$name` and `$age` inside the child class `Student`.

 - It returns the arguments `$name` and `$age` from the `__construct()` method of the parent class `Person` inside the child class `Student`.

 - It defines the `__construct()` method of the parent class `Person` with the parameters `$name` and `$age` inside the child class `Student`.

 - It removes the arguments `$name` and `$age` from the `__construct()` method of the parent class `Person` inside the child class `Student`.


/// type=MS, id=83c43e46-3ab5-40ae-a662-0fc4dbaf39ff, answer=[3,5]

Which statements correctly describe the `display()` method of the `Student` class?

 - It removes the implementation of the `display()` method in the parent class `Person`.

 - It accesses the implementation of the `display()` method in the parent class `Person`.

 - It overrides the implementation of the `display()` method in the parent class `Person`.

 - It is a method definition that duplicates the `display()` method in the parent class `Person`.

 - It is a method definition that changes the behavior of the `display()` method in the parent class `Person`.


/// type=MS, id=07435e44-e0f0-414d-a230-223546df23d5, answer=[2,5]

Which statements correctly describe the code on line 24 of `Student.php`?

 - It sets the arguments `John`, `20`, and `BSCS` to the `$student` object.

 - It initializes the `$name`, `$age`, and `$course` properties of the `$student` object.

 - It returns the `$student` object of the `Student` class with the parameters `John`, `20`, and `BSCS`.

 - It declares the `$student` object of the `Student` class with the parameters `John`, `20`, and `BSCS`.

 - It creates the `$student` object as an instance of the `Student` class passing the arguments `John`, `20`, and `BSCS`.


/// type=MS, id=5af20db6-7223-4eff-87b4-075d5e66d2f4, answer=[1,2]

Which statements correctly describe the code on line 25 of `Student.php`?

 - It displays the string `John is taking up BSCS.`.

 - It calls the `display()` method of the `Student` class that overrides its parent class method.

 - It creates the `display()` method of the `Student` class that overrides its parent class method.

 - It defines the `display()` method of the `Student` class that overrides its parent class method.

 - It returns the `display()` method of the `Student` class that overrides its parent class method.

:::


:::

/// type=REPL, readonly=true, filename=[main.php,Person.php,Student.php]

```php
<?php
require_once(__DIR__ . '/Student.php');

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```

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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}
?>
```
/// type=SS, id=d54c3088-24a4-4821-adf2-61998d90c413, answer=[5]

Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - It prints `BSCS`.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, id=632cf959-8ae2-450c-9604-297c4fa6ba0c, answer=[3]

Which statement best describes `require_once(__DIR__ . '/Student.php');` on line 2 of `main.php`?

- It updates the file `Student.php`.

- It establishes a relationship between classes.

- It includes the file `Student.php` in the file `main.php`.

- It removes the file `Student.php` in the file `main.php`.

- It excludes the file `Student.php` in the file `main.php`.


/// type=SS, id=0a8fa28f-7170-4089-8243-b7568cc3927e, answer=[5]

Which statement best describes `$student = new Student("John", 20, "BSCS");` on line 4 of `main.php`?

 - It sets the arguments `John`, `20`, and `BSCS` to the `$student` object.

 - It defines the `$name`, `$age`, and `$course` properties of the `$student` object.

 - It returns the `$student` object of the `Student` class with the parameters `John`, `20`, and `BSCS`.

 - It declares the `$student` object of the `Student` class with the parameters `John`,`20`, and `BSCS`.

 - It creates the `$student` object as an instance of the `Student` class passing the arguments `John`, `20`, and `BSCS`.


/// type=MS, id=7369e982-d7c5-4e79-865c-e3c9773e6c90, answer=[4,5]

Why does the instantiation of the `Student` class separated from the class declaration?

 - It separates the object instantiation to shorten the code of the program.

 - Combining the object instantiation and the class declaration produces an error.

 - Adding the object instantiation in the class declaration is not allowed in PHP.

 - It is a best practice to separate the class declaration from the object instantiation.

 - Separating the class declaration from the object instantiation reduces the complexity and increases the efficiency of the program.

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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```
/// type=SS, id=9b100649-e262-4588-82fa-5160fd683831, answer=[5]

In the `echo` statement on line 20 of `Student.php`, replace `$this->getName()` with `$this->name`. Execute the program. What is its output?

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```
/// type=MS, id=20184ccf-9fb1-44b1-a9db-3c6dd9083cff, answer=[4,5]

What makes the `$name` property of the `Person` class accessible inside the `Student` class?

 - The `$name` property of the `Person` class is accessible everywhere.

 - On line 5 of `Person.php`, the `$name` property is defined using the `public` visibility keyword.

 - On line 5 of `Person.php`, the `$name` property is defined using the `private` visibility keyword.

 - On line 5 of `Person.php`, the `$name` property is defined using the `protected` visibility keyword.

 - The `protected` visibility keyword allows the child class `Student` to access the `$name` property of the parent class `Person`. 


/// type=SS, id=45032c32-44c6-4261-afb5-a39e061c3ce0, answer=[3]

In the statement `$student->display();` on line 25 of `Student.php`, replace `display` with `getName`. Execute the program. What is its output?

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
$student->getName();
?>
```
/// type=SS, id=974e2454-ab45-4d04-a5f5-7ac7e97e2c10, answer=[2]

Add the `echo` construct at the beginning of the statement `$student->getName();` on line 25 of `Student.php`. Execute the program. What is its output?

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
echo $student->getName();
?>
```
/// type=SS, id=245fc4f4-b6c5-42d8-95dd-803ac0674f6d, answer=[1]

In the statement `echo $student->getName();` on line 25 of `Student.php`, replace `getName()` with `getAge()`. Execute the program. What is its output?

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
echo $student->getAge();
?>
```
/// type=SS, id=a4a85891-4150-45fd-b0e0-41c15194fa0a, answer=[3]

In the statement `echo $student->getAge();` on line 25 of `Student.php`, replace `getAge()` with `checkAge()`. Execute the program. What is its output?

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
echo $student->checkAge();
?>
```
/// type=SS, id=792266f4-8325-46af-ab68-ab5b72dea635, answer=[5]

On line 25 of `Student.php`, replace the statement `echo $student->checkAge();` with `$student->display();`. Execute the program. What is its output?

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```
/// type=SS, id=2a360f89-4f41-48bb-9241-9808847332d8, answer=[4]

Remove the `display()` method definition on lines 18, 19, 20, and 21 of `Student.php`. Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::

+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=4aa7c250-3b5a-43c2-803f-f53ac2e20a04, answer=[4,5]

Which statements are true about method overriding?

 - It accesses a parent class method in a child class.

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a process of defining a method in a child class with the same name and parameter of a parent class method.


/// type=SS, id=7858d760-f5ad-49ef-8b47-33765678b672, answer=[2]

Which statement best describes the `extends` keyword?

 - It accesses a parent class method in a child class.

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a process of defining a method in a child class with the same name and parameter of a parent class method.


/// type=SS, id=f7d20ece-f523-4766-9c09-c5167b292039, answer=[1]

What does the `parent` keyword with the scope resolution operator `::` do?

 - It accesses a parent class method in a child class.

 - It defines a relationship between a child class and its parent class.

 - It allows a child class to access the properties and methods of a parent class.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a process of defining a method in a child class with the same name and parameter of a parent class method.


/// type=SS, id=059f93a9-c3e8-4ffb-9430-4213faf2cb05, answer=[3]

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
require_once(__DIR__ . '/Person.php');
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
        echo $this-getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```
/// type=SS, id=b9a013fa-917a-4ca2-b2a4-3ecbf824c5d6, answer=[2]

Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, id=628e48d4-da82-474b-8db9-d4a03695b5f4, answer=[3]

What is the error message?

 - Undefined variable: `course` on line number 10

 - Uncaught Error: Call to private method `Person::checkAge()` on line 24

 - Uncaught Error: Call to undefined function `getName()` in `Student.php` on line 20

 - Missing argument `3` for `Student::__construct()` on line 24 and defined on line number 7

 - Access level to `Student::display()` must be public (as in class Person) on line number 18


/// type=MS, id=0f9b4faa-944b-4191-bc25-d1fdad85e2d9, answer=[1,4]

Which statements correctly describe the error?

 - On line 20 of `Student.php`, the method call `$this-getName()` is invalid.

 - There are no parentheses `()` after `$this-getName()` on line 20 of `Student.php`.

 - There is no semicolon `;` at the end of the `echo` statement on line 20 of `Student.php`.

 - On line 20 of `Student.php`, the object operator `->` after `$this` is replaced with a dash `-`. 

 - There is no concatenation operator `.` between `$this-getName()` and `" is taking up "` on line 20 of `Student.php`.

:::


/// type=CR, id=91b33c9d-8c7d-4a40-ba1d-fc1b16a641eb, answer=[tests/Inheritance/MissingOneColonInParentMethodCallTest.php], filename=[Person.php,Student.php]

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
require_once(__DIR__ . '/Person.php');
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
        echo $this-getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20, "BSCS");
$student->display();
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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20);
$student->display();
?>
```
/// type=MS, id=6edaff14-0120-4ee3-b8b7-83ef7fe65d02, answer=[1,4]

Execute the program. What are the error messages?

 - Undefined variable: `course` on line number 10

 - syntax error, unexpected `':'`, expecting `','` or `';'` on line number 19

 - Uncaught Error: Call to private method `Person::checkAge()` on line 24

 - Missing argument `3` for `Student::__construct()` on line 24 and defined on line number 7

 - Access level to `Student::display()` must be public (as in class Person) on line number 18


/// type=MS, id=8728ffc8-24e3-4901-a23b-b44096a1cb36, answer=[2,3]

Which statements correctly describe the error?

 - There is no comma `,` between `John` and `20` in the statement on line 24 of `Student.php`.

 - There is no third argument specified in `Student("John", 20)` on line 24 of `Student.php`.

 - On line 24 of `Student.php`, the statement `$student = new Student("John", 20);` is invalid.

 - On line 24 of `Student.php`, the argument `John` in `Student("John", 20)` is enclosed in double quotes `""`.

 - On line 24 of `Student.php`, the argument `20` in `Student("John", 20)` is not enclosed in double quotes `""`.

:::


/// type=CR, id=d65919d3-f382-48fa-83b5-72e74755e6ce, answer=[tests/Inheritance/MissingOneArgumentOnStudentConstructTest.php], filename=[Person.php,Student.php]

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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20);
$student->display();
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
require_once(__DIR__ . '/Person.php'); 
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```
/// type=SS, id=9013a588-8bb5-400a-89a0-bebfdc23ab6f, answer=[5]

Execute the program. What is the error message?

 - Undefined variable: `course` on line number 10

 - syntax error, unexpected `':'`, expecting `','` or `';'` on line number 19

 - Uncaught Error: Call to private method `Person::checkAge()` on line 24

 - Missing argument `3` for `Student::__construct()` on line 24 and defined on line number 7

 - Access level to `Student::display()` must be public (as in class Person) on line number 18


/// type=MS, id=0ed8d34b-c8b2-42df-b9d6-16d3e28d209b, answer=[2,3,5]

Which statements correctly describe the error?

 - There are no parentheses `()` after `$student->display()` on line 18 of `Student.php`.

 - On line 18 of `Student.php`, the method definition `private function display()` is invalid.

 - On line 18 of `Student.php`, the `private` visibility keyword in the method definition is not allowed.

 - There is no semicolon `;` at the end of the statement `$student->display()` on line 18 of `Student.php`.

 - Overriding the `display()` method of the parent class `Person` using the `private` visibility keyword is not allowed.

:::


/// type=CR, id=c5a9f7eb-7e5f-44ec-8578-7fd18ca59470, answer=[tests/Inheritance/IncorrectDisplayMethodVisibilityTest.php], filename=[Person.php,Student.php]

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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[main.php,Person.php,Student.php]

```php
<?php
require_once(__DIR__  '/Student.php');

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```

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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}
?>
```
/// type=SS, id=61fb6da3-90f9-466e-bc42-6ee14bd9e9ea, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `':'`, expecting `','` or `';'` on line number 19

 - Uncaught Error: Call to private method `Person::checkAge()` on line 24

 - Missing argument `3` for `Student::__construct()` on line 24 and defined on line number 7

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - syntax error, unexpected `''/Student.php''` (T_CONSTANT_ENCAPSED_STRING) in `/main.php` on line number 2


/// type=MS, id=f3a7e5c2-41ce-4cad-8fd0-6244f05be82a, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2 of `main.php`.

 - On line 2 of `main.php`, the `__DIR__` magic constant is not enclosed in double quotes `""`.

 - On line 2 of `main.php`, the statement `require_once(__DIR__  '/Student.php');` is invalid.

 - There is no comma `,` between `__DIR__` and `'/Student.php'` in the `require_once()` statement on line 2 of `main.php`.

 - There is no concatenation operator `.` between `__DIR__` and `'/Student.php'` in the `require_once()` statement on line 2 of `main.php`.

:::


/// type=CR, id=49dc2595-49d9-460a-9696-138595f2bd68, answer=[tests/Inheritance/MissingConcatOnRequireInMainTest.php], filename=[main.php,Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
require_once(__DIR__  '/Student.php');

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```

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
require_once(__DIR__ . '/Person.php');
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
        echo $this->getName() . " is taking up " . $this->course . ".";
    }
}
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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
$student->display();
?>
```
/// type=SS, id=23af552c-9233-434e-8e16-95705516bab6, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, id=f4bbd7bc-f18d-4919-bf33-50af6c96ccc2, answer=[2]

In the statement `$student->display();` on line 25 of `Student.php`, remove the dollar sign `$` from `$student`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 3

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 25

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 7

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John", 20, "BSCS");
student->display();
?>
```
/// type=SS, id=78dd9c21-5abe-4ec6-b25b-20375c129a14, answer=[4]

In the statement `$student = new Student("John", 20, "BSCS");` on line 24 of `Student.php`, remove the comma `,` between `John` and `20`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 3

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 25

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 7

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John" 20, "BSCS");
student->display();
?>
```
/// type=SS, id=4d877ff3-b741-4899-898f-f180786563d4, answer=[3]

In the method definition `public function __construct($name, $age, $course)` on line 7 of `Student.php`, remove the comma `,` between `$age` and `$course`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 3

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 25

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 7

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John" 20, "BSCS");
student->display();
?>
```
/// type=SS, id=9b3dddcc-c97c-4d60-81f2-7bbe65839166, answer=[5]

Remove the `private` visibility keyword in the property definition `private $course;` on line 5 of `Student.php`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 3

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 25

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 7

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

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
require_once(__DIR__ . '/Person.php'); 
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

$student = new Student("John" 20, "BSCS");
student->display();
?>
```
/// type=SS, id=388d4614-6e07-4606-b5ee-4136a09c50be, answer=[1]

Remove the `class` keyword before `Student` on line 3 of `Student.php`. Execute the program. What is the error message?

 - syntax error, unexpected `'extends'` (T_EXTENDS) on line number 3

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR) on line number 25

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting `')'` on line number 7

 - syntax error, unexpected `'20'` (T_LNUMBER), expecting `','` or `')'` on line number 24

 - syntax error, unexpected `'$course'` (T_VARIABLE), expecting function (T_FUNCTION) on line number 5

:::


/// type=CR, id=b2e0c225-1618-4a5d-af8f-280edd2f61d5, answer=[tests/Inheritance/CorrectMultipleErrorsTest.php], filename=[Person.php,Student.php]

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
require_once(__DIR__ . '/Person.php');
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

$student = new Student("John" 20, "BSCS");
student->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=e24ba8e9-4c60-474c-945c-bd3bed1cc4bd, answer=[tests/Inheritance/CreateChildClassTest.php], filename=[Animal.php,Mammal.php]

Given the parent class `Animal` implementation, write a program that uses the `extends` keyword to establish `parent-child` relationships to classes. In the `Mammal.php` tab, use a `class` keyword to declare a class named `Mammal` that `extends` the parent class `Animal`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$name` using the `private` visibility keyword. 
 
 2. A `__construct()` method with the parameters `$type`, `$age`, and `$name`. Inside the `__construct()` method body, add a statement that calls the parent class constructor `__construct()` passing the arguments `$type` and `$age`. Then, add another statement that assigns the value of `$name` to the `$name` property of the `Mammal` class. 
 
 3. After the `__constuct()` method definition, add a `public` method `display()` that overrides the existing `display()` method of the parent class `Animal`. Inside the `display()` method body, add an `echo` statement to display the string `"The " . $this->getType() . " named " . $this->getName() . " is a " . $this->getAge() . "-year old mammal."`. 
 
 4. Add another `public` method `getName()` that returns the value of the `$name` property of the `Mammal` class. 
 
After the class declaration, add a statement that creates the `$petMammal` object an instance of the `Mammal` class passing the arguments `Cat`, `3`, and `Catsie`. Then, add another statement that calls the `display()` method of the `$petMammal` object. Run the program to view the output.

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
require_once(__DIR__ . "/Animal.php");


?>
```

+++
