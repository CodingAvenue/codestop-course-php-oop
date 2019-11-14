# Abstract Classes and Methods

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `20`.

 - It prints `John`.

 - It prints `BSCS`.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, answer=[2]

In the declaration `abstract class Person` on line 2 of `Person.php`, what is `abstract`?

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is a command.

 - It is an operator.


/// type=SS, answer=[4]

In the declaration `abstract class Person` on line 2 of `Person.php`, what does the `abstract` keyword do?

 - It removes the `Person` class definition.

 - It hides the `Person` class implementation.

 - It creates an instance of the `Person` class.

 - It defines the abstract class named `Person`.

 - It sets the value of the `Person` class to abstract.


/// type=MS, answer=[3,4]

In the definition `abstract public function display();` on line 40 of `Person.php`, what does the `abstract` keyword do?

 - It removes the `display()` method definition.

 - It hides the `display()` method implementation.

 - It defines the abstract method named `display()`.

 - It declares the `display()` method without a body.

 - It sets the value of the `display()` method to abstract.


/// type=MS, answer=[2,4]

Which statements correctly describe `class Student extends Person { }` on line 3 of `Student.php`?

 - It is a definition of the `Student` class that replaces the `Person` class.

 - It is a definition of the `Student` class as the child class of the `Person` class.

 - It is a definition of the `Person` class as the child class of the `Student` class.

 - It creates the `Student` class that inherits all the `public` and `protected` properties and methods of the `Person` class. 

 - It creates the `Person` class that inherits all the `public` and `protected` properties and methods of the `Student` class. 


/// type=SS, answer=[2]

Which statement best describes `parent::__construct($name, $age);` on line 9 of `Student.php`?

 - It creates the `__construct()` method of the parent class `Person` with the parameters `$name` and `$age` inside the child class `Student`.

 - It calls the `__construct()` method of the parent class `Person` passing the arguments `$name` and `$age` inside the child class `Student`.

 - It returns the arguments `$name` and `$age` from the `__construct()` method of the parent class `Person` inside the child class `Student`.

 - It defines the `__construct()` method of the parent class `Person` with the parameters `$name` and `$age` inside the child class `Student`.

 - It removes the arguments `$name` and `$age` from the `__construct()` method of the parent class `Person` inside the child class `Student`.


/// type=SS, answer=[1]

In the `echo` statement on line 20 of `Student.php`, what does `parent::getName()` do?

 - It calls the `getName()` method of the parent class `Person` inside the child class `Student`.

 - It removes the `getName()` method of the parent class `Person` from the child class `Student`.

 - It returns the `getName()` method of the parent class `Person` inside the child class `Student`.

 - It creates the `getName()` method of the parent class `Person` inside the child class `Student`.

 - It defines the `getName()` method of the parent class `Person` inside the child class `Student`.


/// type=MS, answer=[3,4]

Which statements correctly describe the `display()` method of the `Student` class?

 - It removes the implementation of the abstract `display()` method in the parent class `Person`.

 - It accesses the implementation of the abstract `display()` method in the parent class `Person`.

 - It provides the implementation of the abstract `display()` method in the parent class `Person`.

 - It is a method definition that overrides the abstract `display()` method in the parent class `Person`.

 - It is a method definition that duplicates the abstract `display()` method in the parent class `Person`.


/// type=MS, answer=[2,5]

Which statements correctly describe `$studentObject = new Student("John", 20, "BSCS");` on line 24 of `Student.php`?

 - It sets the arguments `John`, `20`, and `BSCS` to the `$studentObject` object.

 - It initializes the `$name`, `$age`, and `$course` properties of the `$studentObject` object.

 - It returns the `$studentObject` object of the `Student` class with the parameters `John`, `20`, and `BSCS`.

 - It declares the `$studentObject` object of the `Student` class with the parameters `John`, `20`, and `BSCS`.

 - It creates the `$studentObject` object as an instance of the `Student` class passing the arguments `John`, `20`, and `BSCS`.


/// type=MS, answer=[1,2]

Which statements correctly describe `$studentObject->display();` on line 25 of `Student.php`?

 - It displays the string `John is taking up BSCS.`.

 - It calls the `display()` method of the `Student` class that overrides the abstract `display()` method of the parent class `Person`.

 - It creates the `display()` method of the `Student` class that overrides the abstract `display()` method of the parent class `Person`.

 - It defines the `display()` method of the `Student` class that overrides the abstract `display()` method of the parent class `Person`.

 - It returns the `display()` method of the `Student` class that overrides the abstract `display()` method of the parent class `Person`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[5]

In the abstract method definition `abstract public function display();` on line 40 of `Person.php`, replace `public` with `protected`. Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract protected function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[2]

In the method definition `public function display()` on line 18 of `Student.php`, replace `public` with `protected`. Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract protected function display();
}
?>
```

```php
<?php 
require_once('./Person.php');
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[5]

In `Student.php`, remove the `protected` keyword from the method definition `protected function display()` on line 18. Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract protected function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

    function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[2]

In `Person.php`, remove the `abstract` keyword from `abstract class Person` on line 2. Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

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

    abstract protected function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

    function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[2]

In `Person.php`, remove the `abstract` keyword from `abstract protected function display();` on line 40. Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[1]

Which statement best describes the `abstract` keyword?

 - It defines abstract classes and methods.

 - It removes abstract classes and methods.

 - It displays abstract classes and methods.

 - It accesses abstract classes and methods.

 - It evaluates abstract classes and methods.


/// type=MS, answer=[1,4,5]

Which statements are true about an abstract class?

 - It can be inherited.

 - It can be instantiated.

 - It cannot be inherited.

 - It cannot be instantiated.

 - It has an abstract method.


/// type=MS, answer=[1,2,4,5]

Which statements are true about an abstract method?

 - It is a method without a body.

 - Its visibility can either be `public` or `protected`.

 - Its visibility can either be `protected` or `private`.

 - It is a method that does not have an implementation.

 - It requires a child class to provide its implementation.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 20 years old.`.

 - It prints `John is taking up BSCS.`.


/// type=SS, answer=[5]

What is the error message?

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Uncaught Error: Call to protected method `Student::display()` on line number 25

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

 - Class `Student` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 18


/// type=SS, answer=[5]

Which statement best describes the error?

 - There is no semicolon `;` at the end of the statement on line 20 of `Student.php`.

 - There is no `abstract` keyword specified before `Person` on line 3 of `Student.php`.

 - On line 29 of `Student.php`, the method call `$studentObject->display();` is invalid.

 - On line 40 of `Person.php`, the method definition `abstract public function display();` is invalid.

 - There is no `display()` method definition in the `Student` class that overrides the abstract `display()` method of the parent class `Person`.

:::


/// type=CR, answer=[tests/AbstractClassesAndMethods/UnimplementedAbstractMethodTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
abstract class Person
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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract protected function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Uncaught Error: Call to protected method `Student::display()` on line number 25

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

 - Class `Student` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 18


/// type=MS, answer=[1,2]

Which statements correctly describe the error?

 - On line 25 of `Student.php`, the method call `$studentObject->display()` is invalid.

 - `$studentObject` is not allowed to access the protected method `display()` of the `Student` class.
 
 - On line 18 of `Student.php`, the method definition `protected function display()` is invalid.

 - On line 40 of `Person.php`, the method definition `abstract public function display();` is invalid.

 - There is no `display()` method definition in the `Student` class that overrides the abstract `display()` method of the parent class `Person`.

:::


/// type=CR, answer=[tests/AbstractClassesAndMethods/ProtectedMethodCallOnObjectTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
abstract class Person
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

    abstract protected function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Abstract function `Person::display()` cannot be declared private on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

 - Class `Student` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 18


/// type=MS, answer=[1,2,3]

Which statements correctly describe the error?

 - On line 2 of `Person.php`, the class declaration `class Person` is invalid.

 - There is no `abstract` keyword specified before `class Person` on line 2 of `Person.php`.

 - The `Person` class contains the abstract method `display()` and should be declared as abstract.

 - On line 40 of `Person.php`, the method definition `abstract public function display();` is invalid.

 - There is no `display()` method definition in the `Student` class that overrides the abstract `display()` method of the parent class `Person`.

:::


/// type=CR, answer=[tests/AbstractClassesAndMethods/MissingAbstractKeywordInPersonTest.php], filename=[Person.php,Student.php]

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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Abstract function `Person::display()` cannot be declared private on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

 - Class `Student` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 18


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - On line 18 of `Student.php`, the method definition `public function display()` is invalid.

 - On line 40 of `Person.php`, the method definition `public function display();` is invalid.

 - There is a semicolon `;` at the end of `public function display();` on line 40 of `Person.php`.

 - There is no `abstract` keyword specified before `public function display()` on line 18 of `Student.php`.

 - There is no `abstract` keyword specified before `public function display();` on line 40 of `Person.php`.

:::


/// type=CR, answer=[tests/AbstractClassesAndMethods/MissingAbstractKeywordInDisplayMethodTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS.`.

```php
<?php
abstract class Person
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

    public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php'); 
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

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[4]

In the method definition `public function display()` on line 18 of `Student.php`, replace `public` with `protected`. Execute the program. What is the error message?

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 3

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Abstract function `Person::display()` cannot be declared private on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[3]

In the method definition `abstract public function display();` on line 40 of `Person.php`, replace `public` with `private`. Execute the program. What is the error message?

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 3

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Abstract function `Person::display()` cannot be declared private on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
abstract class Person
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

    abstract private function display();
}
?>
```

```php
<?php
require_once('./Person.php'); 
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[3]

In `Person.php`, remove the `abstract` keyword from `abstract class Person` on line 2. Execute the program. What is the error message?

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 3

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Abstract function `Person::display()` cannot be declared private on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

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

    abstract private function display();
}
?>
```

```php
<?php
require_once('./Person.php');
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[2]

In `Person.php`, remove the `abstract` keyword from `abstract public function display();` on line 40. Execute the program. What is the error message?

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 3

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Abstract function `Person::display()` cannot be declared private on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

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

    private function display();
}
?>
```

```php
<?php
require_once('./Person.php'); 
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, answer=[1]

In `Student.php`, remove the `extends` keyword from `class Student extends Person` on line 3. Execute the program. What is the error message?

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 3

 - Non-abstract method `Person::display()` must contain body on line number 40

 - Abstract function `Person::display()` cannot be declared private on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 18

 - Class `Person` contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (Person::display) on line number 41

:::


/// type=CR, answer=[tests/AbstractClassesAndMethods/CorrectMultipleErrorsTest.php], filename=[Person.php,Student.php]

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

    private function display();
}
?>
```

```php
<?php
require_once('./Person.php'); 
class Student  Person
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

    protected function display()
    {
        echo parent::getName() . " is taking up " . $this->course . ".";
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/AbstractClassesAndMethods/CreateAbstractClassAndMethodTest.php], filename=[Animal.php,Mammal.php]

Write a program that uses an `abstract` keyword to define an abstract class and method. In the `Animal.php` tab, add the following:

 1. Use the `abstract` keyword to add an abstract method named `display()` with `public` visibility. 
 
 2. Add the `abstract` keyword before `class Animal` to make the `Animal` class abstract. 

In the `Mammal.php` tab, use a `class` keyword to declare a class named `Mammal` that `extends` the abstract class `Animal`. Within the curly braces `{}`, add the following statements:
 
 1. A property definition of a class property `$name` using the `private` visibility keyword. 
 
 2. `__construct()` method with the parameters `$type`, `$age`, and `$name`. Inside the `__construct()` method body, add a statement that calls the parent class constructor `__construct()` passing the arguments `$type` and `$age`. Then, add another statement that assigns the value of `$name` to the `$name` property of the `Mammal` class. 
 
 3. After the `__constuct()` method definition, add a `public` method `display()` that overrides the abstract `display()` method of the parent class `Animal`. Inside the `display()` method body, add an `echo` statement to display the string `"The " . parent::getType() . " named " . $this->getName() . " is a " . parent::getAge() . "-year old mammal."`. Add another `public` method `getName()` that returns the value of the `$name` property of the `Mammal` class. 
 
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

    // add abstract method here...
}
?>
```

```php
<?php
require_once("Animal.php");


?>
```

+++
