### Facts for Interfaces lesson:

An interface is a program that only contains public methods that do not have a method body or implementation. 

An interface defines methods that a class should implement.

The `interface` keyword defines an interface.

To declare an interface, use the `interface` keyword followed by the interface name, and a pair of curly braces `{}` that enclose the definition of all public abstract methods.

The following is an example of an interface declaration:

```php
interface TestInterface 
{
    public function sayHello();
}
```

The `implements` keyword lets a class implement an interface.

A class can implement several interfaces. 

A class that implements an interface is required to provide a method body or implementation to all the abstract methods specified in an interface.

Code:

```php
<?php
interface TestInterface 
{
    public function sayHello();
}

class TestPerson implements TestInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo "Hello, " . $this->name . "!";
    }
}

$personObject = new TestPerson("Anna");
$personObject->sayHello();
?>
```

Output:

```
Hello, Anna!
```

In the above example, the code breaks down as follows:

 - `interface TestInterface {...}` declares the `TestInterface` interface.

 - `public function sayHello();` is the `sayHello()` method definition that does not have a body in the `TestInterface` interface. 

 - `class TestPerson implements TestInterface` declares the `TestPerson` class that implements the `TestInterface` interface.

 - `public function sayHello() {...}` provides implementation to the abstract `sayHello()` method of the `TestInterface` interface.
