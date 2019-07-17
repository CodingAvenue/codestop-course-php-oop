### Facts for Visibility lesson:

Visibility defines the accessibility of a property and a method of a certain class. 

The visibility keywords are used to set the accessibility of a class property and method. These are as follows:

 - `public` sets the accessibility of a property and a method of a class everywhere.

 - `private` sets the accessibility of a property and a method only within a class itself.

 - `protected` sets the accessibility of a property and a method only within a class itself and its child or parent classes.

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
$pObject = new Person();
$pObject->setAge(12);
echo $pObject->name . " is " . $pObject->getAge() . " years old.";
?>
```
Output:
```
Anna is 12 years old.
```

The `checkAge()` method and the `$age` property with `private` visibility are only accessible within the `Person` class.

`$pObject` is not allowed to directly access the `checkAge()` method and the `$age` property of the `Person` class using the statements `$pObject->age;` and `$pObject->checkAge(12);`. 