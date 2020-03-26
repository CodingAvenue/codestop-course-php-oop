### Facts for Encapsulation lesson:

`Encapsulation` is a way of wrapping the properties and methods of a class together as a single unit. It hides the internal implementation of an object from other objects for protection purposes.

The main purpose of encapsulation is to reduce software development complexity and to protect the internal state of an object.
 
`Encapsulation` is achieved by keeping each object state `private` inside a class that restricts other objects to directly access this state.

`Accessors` and `Mutators` are used in accessing and changing the values of the class properties defined as `private` or `protected`.

An object is not allowed to directly access and change its properties. It can only access and change the values of its properties through `public` methods.

Code:

```php
<?php
class Person
{
    private $name = "Anna";
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
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
echo $personObject->getName() . " is " . $personObject->getAge() . " years old.";
?>
```

Output:

```
Anna is 12 years old.
```

The `checkAge()` method and the `$age` and `$name` properties are only accessible within the `Person` class.

The `setName()` and `setAge()` mutator methods are used to change the values of the `$name` and `$age` properties outside of the `Person` class.

The `getName()` and `getAge()` accessor methods are used to access the values of the `$name` and `$age` properties outside of the `Person` class.
