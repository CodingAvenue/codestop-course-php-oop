### Facts for Inheritance lesson:

`inheritance` is a relationship between classes that enables a child class to inherit the properties and methods of a parent class.

The `extends` keyword is used to define this relationship between a child class and its parent class.

A child class can only inherit the `public` and `protected` properties and methods of a parent class. `private` methods and members are not directly accessible to a child.

The `protected` visibility keyword allows a child class to access the properties and methods of a parent class.

A child class can override the methods of its parent class to extend or modify behavior.

Defining a method in a child class with the same name and parameter of a parent class method is called `overriding`.

A process of changing the behavior of a parent class method in a child class is called `method overriding`.

The `parent` keyword with the scope resolution operator `::` is used to access a parent class method in a child class.

Code:

```php
<?php
class TestPerson 
{
    protected $testName;
    private $testAge;
	
    public function __construct($testName, $testAge)
    {
        $this->testName = $testName;
        $this->testAge = $testAge;
    }
	
    public function getTestName()
    {
        return $this->testName;
    }

    public function display()
    {
        echo $this->testName . " is " . $this->testAge . " years old.";
    }
}

class TestStudent extends TestPerson
{
    private $course;
	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
	
    public function display()
    {
        echo parent::getTestName() . " is taking up " . $this->course . ".";
    }
}

$personObject = new TestPerson("Diana", 12);
$personObject->display();
$studentObject = new TestStudent("Anna", 25, "BSIT");
$studentObject->display();
?>
```

Output:
```
Diana is 12 years old.Anna is taking up BSIT.
```

In the `TestStudent` class declaration above, the code breaks down as follows:

 - `class TestStudent extends TestPerson` declares the `TestStudent` class as the child class of the `TestPerson` class.

 - `private $course;` is the definition of the `$course` property without a default value in the `TestStudent` class.

 - `public function __construct($name, $age, $course) { }` is the constructor definition of the `TestStudent` class with the parameters `$name`, `$age`, and `$course`. It is automatically called when a new object is created.

 - `parent::__construct($name, $age);` calls the `__construct()` method of the parent class `TestPerson` passing the arguments `$name` and `$age`.

 - `$this->course = $course;` assigns the value of the variable `$course` to the `$course` property of the `TestStudent` class.

 - `public function display() {...}` is the method definition that overrides the `display()` method of the parent class `TestPerson`. 

 - `parent::getTestName()` accesses the `getTestName()` method of the parent class `TestPerson`.
