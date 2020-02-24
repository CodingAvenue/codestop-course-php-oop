### Facts for Visibility lesson:

Visibility defines the accessibility of a property and a method of a certain class. 

Visibility keywords are defined as the following:

 - `public` sets the accessibility of a property or method so that it can be accessed by code inside or outside of a class.

 - `private` sets the accessibility of a property or method only within a class itself. Private properties and methods can only be accessed by code defined within the class itself.

 - `protected` sets the accessibility of a property or method only within a class itself and its child or parent classes.

Class properties and methods can be declared as `public`, `private`, and `protected`. Declaring a method without a visibility keyword is implicitly defined as `public`.

Code:

```php
<?php
class Person
{
    public $name = "Anna";
    private $age;

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
}
$personObject = new Person();
$personObject->setAge(12);
echo $personObject->name . " is " . $personObject->getAge() . " years old.";
?>
```
Output:
```
Anna is 12 years old.
```

The `checkAge()` method and the `$age` property with `private` visibility are only accessible within the `Person` class.

`$personObject` is not allowed to directly access the `checkAge()` method and the `$age` property of the `Person` class using the statements `$personObject->age;` and `$personObject->checkAge(12);`. 

`getAge()` is an accessor method that is used to access the value of the private property `$age` defined in the `Person` class.

`setAge()` is a mutator method that is used to change the value of the private property `$age` defined in the `Person` class.

It is a best practice to use `accessors` and `mutators` for an object to use in accessing and changing the values of the class properties defined as `private` or `protected`.