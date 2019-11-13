### Facts for Constructor lesson:

A constructor is a method that initializes an object.

The `__construct()` method defines a constructor of a class. It executed when the `new` keyword is invoked to instantiate an object.

To define a constructor, use the `public` visibility keyword followed by the `function` keyword; the `__construct()` method which may contain the parameters; and a method body enclosed in curly braces `{}`.

Code:

```php
<?php
class TestPerson 
{
    public $testName;
    public $testAge;
	
    public function __construct($testName, $testAge)
    {
        $this->testName = $testName;
        $this->testAge = $testAge;
    }
}
$personObject = new TestPerson("Anna", 12);
echo $personObject->testName . " is " . $personObject->testAge . " years old.";
?>
```

Output:
```
Anna is 12 years old.
```

In the above example, the code breaks down as follows:

 - `public function __construct($testName, $testAge) { }` is the constructor definition of the `TestPerson` class with the parameters `$testName` and `$testAge`. It is automatically called when a new object is created.

 - `$this->testName = $testName;` and `$this->testAge = $testAge;` assign the values of the variables `$testName` and `$testAge` to the properties `$testName` and `$testAge` of the `TestPerson` class.

 - `$personObject = new TestPerson("Anna", 12);` creates the `$personObject` object as an instance of the `TestPerson` class passing the arguments `Anna` and `12` and initializes the `$testName` and `$testAge` properties of the `$personObject` object.

 - `$personObject->testName` and `$personObject->testAge` access the values of the `$personObject` object properties `$testName` and `$testAge`.
