### Facts for Methods lesson:

A method is a function inside a class that performs a specific action.

A method is created using the `function` keyword followed by the method name; a pair of parentheses `()` which may contain the parameters; and a method body enclosed in curly braces `{}`.

A visibility keyword like `public` indicates the visibility of a method in a class. It can be added in the method definition before the `function` keyword. 

The block of code inside the curly braces `{}` is the instruction that executes when the method is called. The curly braces `{}` may contain more than one statement.

The parentheses `()` after the method name may contain its parameters. Empty parentheses `()` mean that the method has no parameter.

Method names should begin with a letter or an underscore and then followed by any combination of letters, numbers, or underscores.

The `$this` pseudo-variable is used to access the class properties and methods within the class. 

Code:

```php
<?php
class Person 
{
    public $name = "Diana";
    public $age;

    public function setAge($newAge) 
    {
        $this->age = $newAge;
    }
    
    public function getAge()
    {
        return $this->age;
    }

    public function eat()
    {
        echo "This is an eat() method.";
    }
}
$pObject = new Person();
$pObject->setAge(18);
echo $pObject->name . " is " . $pObject->getAge() . " years old.";
?>
```

Output:
```
Diana is 18 years old.
```

In the above example, the code breaks down as follows:

 - `public function setAge($newAge) { }` is the method definition with the parameter `$newAge`.

 - `$this->age = $newAge;` is the statement that assigns the value of `$newAge` to the `$age` property of the `Person` class after the `setAge()` method is called.

 - `public function getAge() { }` is the method definition without a parameter.

 - `return $this->age;` is a statement that returns the value of the `$age` property after the `getAge()` method is called.

 - `$pObject->setAge(18)` and `$pObject->getAge()` are the call to the `setAge()` and `getAge()` methods of the `$pObject` object.
