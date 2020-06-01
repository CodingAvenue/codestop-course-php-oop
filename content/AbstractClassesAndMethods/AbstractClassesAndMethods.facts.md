### Facts for Abstract Classes and Methods lesson:

Abstraction is a way of hiding the details of implementation to reduce complexity and increase the efficiency of a program.

An abstract class is a class that has an abstract method. 

Instantiation is not allowed for abstract classes.

Abstract methods are methods in a class that do not have a method body or implementation.

The `abstract` keyword defines classes and methods as abstract.

To declare an abstract class, use the `abstract` keyword followed by the `class` keyword; the class name and a pair of curly braces `{}` that enclose the definition of the `properties` and `methods` of a class.

An abstract method is created using the `abstract` keyword followed by the visibility and `function` keywords; the method name; a pair of parentheses `()` which may contain the parameters and a semicolon `;`.

The visibility of an abstract method can be `public` or `protected`. The `private` visibility keyword is not allowed in an abstract method.

A child class is required to override or provide implementation to all the abstract methods in its parent class.

Code:

```php
<?php
abstract class TestPerson 
{
    protected $testName;
    
    public function __construct($testName)
    {
        $this->testName = $testName;
    }
	
    public function getTestName()
    {
        return $this->testName;
    }

    abstract public function display();
}

class TestStudent extends TestPerson
{
    private $course;
	
    public function __construct($name, $course)
    {
        parent::__construct($name);
        $this->course = $course;
    }
	
    public function display()
    {
        echo $this->getTestName() . " is taking up " . $this->course . ".";
    }
}
$studentObject = new TestStudent("Anna", "BSIT");
$studentObject->display();
?>
```

Output:

```
Anna is taking up BSIT.
```

In the above example, the code breaks down as follows:

 - `abstract class TestPerson {...}` declares the `TestPerson` class as abstract.

 - `abstract public function display();` is the abstract method definition of the `display()` method in the abstract class `TestPerson`.

 - `public function display() {...}` is the method definition that overrides the abstract `display()` method of the parent class `TestPerson`.
