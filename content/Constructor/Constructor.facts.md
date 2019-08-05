### Facts for Constructor lesson:

A constructor is a method that initializes an object of a certain class.

The `__construct()` method defines a constructor of a certain class. 

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
$pObject = new TestPerson("Anna", 12);
echo $pObject->testName . " is " . $pObject->testAge . " years old.";
?>
```

Output:
```
Anna is 12 years old.
```

In the above example, the code breaks down as follows:

 - `public function __construct($testName, $testAge) { }` is the constructor definition of the `TestPerson` class with the parameters `$testName` and `$testAge`. It is automatically called when a new object is created.

 - `$this->testName = $testName;` and `$this->testAge = $testAge;` assign the values of the variables `$testName` and `$testAge` to the properties `$testName` and `$testAge` of the `TestPerson` class.

 - `$pObject = new TestPerson("Anna", 12);` creates the `$pObject` object of the `TestPerson` class passing the arguments `Anna` and `12` and initializes the `$testName` and `$testAge` properties of the `$pObject` object.

 - `$pObject->testName` and `$pObject->testAge` access the values of the `$pObject` object properties `$testName` and `$testAge`.
