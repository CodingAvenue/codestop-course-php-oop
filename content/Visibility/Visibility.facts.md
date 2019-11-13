### Facts for Visibility lesson:

Visibility defines the accessibility of a property and a method of a certain class. 

Visibility keywords are defined as the following:

 - `public` sets the accessibility of a property or method of a class everywhere.

 - `private` sets the accessibility of a property or method only within a class itself.

 - `protected` sets the accessibility of a property or method only within a class itself and its child or parent classes.

Class properties and methods can be declared as `public`, `private`, and `protected`. Declaring a method without a visibility keyword is defined as `public`.

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
