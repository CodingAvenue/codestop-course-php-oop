# Static Methods and Properties

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

echo Person::greeting("Hello");
?>
```
/// type=SS, id=37068512-e32a-4b60-a3c4-9b208c0a8a84, answer=[5]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, Anna!`.


/// type=SS, id=ca890178-f179-4e19-a8f0-1d0850b9f940, answer=[2]

In the statement `public static $name = "Anna";` on line 4, what is `static`?

 - It is a method.

 - It is a keyword.

 - It is a property.

 - It is an operator.

 - it is a pseudo-variable.


/// type=SS, id=2f9c68a2-402f-43c8-a865-4d9cd511c13a, answer=[5]

Which statement best describes `public static $name = "Anna";` on line 4?

 - It returns the value `Anna` of the static property `$name`.

 - It defines the `$name` property with the static value `Anna`.

 - It removes the value `Anna` from the static property `$name`.

 - It accesses the value `Anna` from the static property `$name`.

 - It defines the static property `$name` with the default value `Anna`.


/// type=SS, id=68aeab9e-e529-459e-836f-5f5cf614aa0d, answer=[4]

In the declaration `public static function greeting($greet)` on line 6, what is `$greet`?

 - It is a value.

 - It is a method.

 - It is an operator.

 - It is a parameter.

 - It is an argument.


/// type=SS, id=05651723-8679-4454-944c-fecc95ae34d9, answer=[2]

In the declaration `public static function greeting($greet)` on line 6, what is `greeting()`?

 - It is a value.

 - It is a method.

 - It is an operator.

 - It is a parameter.

 - It is an argument.


/// type=SS, id=e6bd4acb-2141-4516-81e4-df6163a06cdd, answer=[4]

In the declaration `public static function greeting($greet)` on line 6, what does the `static` keyword do?

 - It removes the `greeting()` method.

 - It accesses the `greeting()` method.

 - It creates the new `greeting()` method.

 - It defines the static method `greeting()`.

 - It sets the visibility of the `greeting()` method.


/// type=SS, id=a520f961-d5cc-44f0-97ef-277dac880875, answer=[1]

Which statement best describes `public static function greeting($greet)` on line 6?

 - It declares the static method `greeting()` with the parameter `$greet`.

 - It declares the `greeting()` method with the static parameter `$greet`.

 - It assigns the value of the parameter `$greet` to the static method `greeting()`.

 - It creates the value of the parameter `$greet` for the static method `greeting()`.

 - It removes the value of the parameter `$greet` from the static method `greeting()`.


/// type=SS, id=bf563f21-aed9-4b0c-9814-4d0f2377e685, answer=[2]

In the statement `return $greet . ", " . self::$name . "!";` on line 8, what is `self`?

 - It is a method.

 - it is a keyword.

 - It is a property.

 - It is an operator.

 - It is a parameter.


/// type=SS, id=e1d7b257-2ed2-4766-b087-1718e3697213, answer=[5]

In the statement `return $greet . ", " . self::$name . "!";` on line 8, what is `::`?

 - It is a pseudo-variable.

 - It is an object operator.

 - It is a comparison operator.

 - It is an assignment operator.

 - It is a scope resolution operator.


/// type=SS, id=e4df5717-dc2f-4714-a903-2dc37e67ae91, answer=[4]

In the statement `return $greet . ", " . self::$name . "!";` on line 8, what does `self::$name` do?

 - It defines the static property `$name`.

 - It creates the static property `$name`.

 - It removes the static property `$name`.

 - It accesses the static property `$name`.

 - It evaluates the value of the static property `$name`.


/// type=SS, id=dd3b47bf-8e05-4290-aa90-bf930be27438, answer=[3]

Which statement best describes `Person::greeting("Hello")` on line 12?

 - It removes the argument `Hello` from the `greeting()` method of the `Person` class.

 - It removes the static method `greeting()` with the parameter `Hello` of the `Person` class.

 - It calls the static method `greeting()` passing the argument `Hello` outside the `Person` class.

 - It creates the static method `greeting()` with the parameter `Hello` outside the `Person` class.

 - It defines the static method `greeting()` with the parameter `Hello` outside the `Person` class.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person::greeting("Hello");
?>
```
/// type=SS, id=bc114da2-6c44-4052-a8ca-f4b0fc98d6b1, answer=[5]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `Hello`.

 - It prints `James`.

 - It prints `Hello, Anna!`.

 - It prints `Hello, James!`.


/// type=SS, id=2ba655e5-2139-4b1d-97d7-3a494a1c5659, answer=[3]

Which of the following is a static property?

 - `Anna`

 - `self`

 - `$name`

 - `$greet`

 - `greeting()`


/// type=SS, id=692549a3-1ef3-4056-b101-8145222ddde1, answer=[5]

Which of the following is a static method?

 - `Anna`

 - `self`

 - `$name`

 - `$greet`

 - `greeting()`


/// type=MS, id=32ab4f95-3c95-45ac-bf25-9509c9fba4a8, answer=[1,3,5]

Which statements correctly describe the `greeting()` method?
 
 - It is a static method with `public` visibility that returns a value.

 - It is a static method with `public` visibility that does not return a value.

 - It can be called outside the `Person` class without an object instantiation.

 - It is a static method with `protected` visibility that does not return a value.

 - It can be accessed outside the `Person` class using the class name with the scope resolution operator `::`.


/// type=SS, id=c4d6060f-9d33-4d25-a8ab-8fae8d185cd7, answer=[1]

Which statement best describes `Person::$name = "James";` on line 12?

 - It assigns the value `James` to the static property `$name` outside the `Person` class.

 - It displays the value `James` of the static property `$name` outside the `Person` class.

 - It accesses the value `James` of the static property `$name` outside the `Person` class.

 - It evaluates the value `James` of the static property `$name` outside the `Person` class.

 - It removes the value `James` from the static property `$name` outside the `Person` class.


/// type=MS, id=89379105-2eba-4e25-9340-bba7ea294f8c, answer=[1,5]

Which statements correctly describe the code on line 13?

 - It displays the string `Hello, James!`.

 - It removes the static method `greeting()` with the parameter `Hello` of the `Person` class.

 - It creates the static method `greeting()` with the parameter `Hello` outside the `Person` class.

 - It defines the static method `greeting()` with the parameter `Hello` outside the `Person` class.

 - It calls the static method `greeting()` passing the argument `Hello` outside the `Person` class.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject->display();
?>
```
/// type=SS, id=6a7106ed-fba5-45c2-9bf7-f736f1228e6c, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It prints `Hello`.

 - It prints `Hello, John!`.

 - It prints `You are 12 years old.`.

 - It prints `Hello, John! You are 12 years old.`.


/// type=SS, id=a2486f0d-2a9e-4f66-b9cb-f66dab69266c, answer=[3]

Which of the following is a static method?

 - `getAge()`

 - `display()`

 - `greeting()`

 - `checkAge()`

 - `__construct()`


/// type=SS, id=fec47025-5c82-4293-9760-2ec8f390dee5, answer=[2]

Which of the following is a static property?

 - `$age`

 - `$name`

 - `$greet`

 - `$newAge`

 - `$personObject`


/// type=SS, id=6e3b4ed9-7de6-4b65-8b0a-e0f23b1d21a2, answer=[1]

Which statement best describes `self::$name = $name;` on line 9?

 - It assigns the value of `$name` to the static property `$name` of the `Person` class.

 - It displays the value of `$name` in the static property `$name` of the `Person` class.

 - It evaluates the value of `$name` in the static property `$name` of the `Person` class.

 - It removes the value of `$name` from the static property `$name` of the `Person` class.

 - It accesses the value of `$name` from the static property `$name` of the `Person` class.


/// type=SS, id=d073b5a1-ac73-48b2-9e92-4f2ea52f4d30, answer=[3]

Which statement best describes `self::$name` on line 37?

 - It defines the static property `$name` of the `Person` class.

 - It removes the static property `$name` of the `Person` class.

 - It accesses the static property `$name` of the `Person` class.

 - It displays the static property `$name` of the `Person` class.

 - It evaluates the static property `$name` of the `Person` class.


/// type=SS, id=582563ec-a46a-4cf6-90e8-812bf789f622, answer=[3]

Which statement best describes `self::greeting("Hello")` on line 42?

 - It creates the static method `greeting()` with the parameter `Hello` in the `Person` class.

 - It defines the static method `greeting()` with the parameter `Hello` in the `Person` class.

 - It calls the static method `greeting()` passing the argument `Hello` in the `Person` class.

 - It removes the static method `greeting()` with the parameter `Hello` in the `Person` class.

 - It evaluates the static method `greeting()` with the parameter `Hello` in the `Person` class.

:::


:::

/// type=REPL, readonly=true, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php'); 
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, id=f2e0873c-cdb8-4e16-9105-14a18bf1c3e2, answer=[4]

Execute the program. What is its output?

 - It prints `Good day`.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

 - It prints `Good day, John! John is taking up BSCS.`.


/// type=SS, id=2801d358-3e10-4bf8-a98c-d336385ac659, answer=[4]

Which of the following is a static method definition?

 - `public function display() {...}`

 - `public function getCourse() {...}`

 - `private function checkAge($age) {...}`

 - `public static function greeting($greet) {...}`

 - `public function __construct($name, $age) {...}`


/// type=MS, id=9e0475a4-20bc-446a-b258-8b1c8dabbe3b, answer=[3,5]

Which of the following are static method calls?

 - `self::$name`

 - `parent::$name`

 - `self::greeting("Hello")`

 - `$studentObject->display()`

 - `parent::greeting("Good day")`


/// type=SS, id=241ca5e2-e7a5-40a7-af8e-0d25b9776912, answer=[5]

Which of the following is a static property definition?

 - `private $age;`

 - `private $course;`

 - `return $this->course;`

 - `$this->course = $course;`

 - `public static $name = "Anna";`


/// type=SS, id=1714971c-91c1-4639-8f10-9a5cf72778ba, answer=[3]

Which statement best describes `parent::$name` on line 20 of the `Student` class?

 - It defines the static property `$name` of the parent class `Person` in the child class `Student`.

 - It removes the static property `$name` of the parent class `Person` in the child class `Student`.

 - It accesses the static property `$name` of the parent class `Person` in the child class `Student`.

 - It displays the static property `$name` of the parent class `Person` in the child class `Student`.

 - It evaluates the static property `$name` of the parent class `Person` in the child class `Student`.


/// type=SS, id=7ded7fd3-04e0-4e25-83df-ef2f0597092b, answer=[1]

Which statement best describes `parent::greeting("Good day")` on line 20 of the `Student` class?

 - It calls the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It creates the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It defines the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It removes the static method `greeting()` of the parent class `Person` in the child class `Student`.

 - It evaluates the static method `greeting()` of the parent class `Person` in the child class `Student`.


/// type=MS, id=796007cd-35ad-4df8-8e8b-92ad511a0166, answer=[3,5]

Which statements correctly describe the `display()` method of the `Student` class?

 - It removes the implementation of the `display()` method in the parent class `Person`.

 - It accesses the implementation of the `display()` method in the parent class `Person`.

 - It overrides the implementation of the `display()` method in the parent class `Person`.

 - It is a method definition that duplicates the `display()` method in the parent class `Person`.

 - It is a method definition that changes the behavior of the `display()` method in the parent class `Person`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, id=19d948cb-daf5-4866-9b55-b427db40def6, answer=[4]

In the `echo` statement on line 20 of `Student.php`, replace all the `parent` keywords with `self`. Execute the program. What is its output?

 - It prints `Good day`.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

 - It prints `Good day, John! John is taking up BSCS.`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo self::$name . " is taking up " . $this->course . ". " . self::greeting("Good day");
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, id=b56bf8e5-343f-4857-a25b-66b3925afefc, answer=[5]

In the method call `self::greeting("Hello")` on line 42 of `Person.php`, replace `self::` with `$this->`. Execute the program. What is its output?

 - It prints `Good day`.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `Good day, John! John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo $this->greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo self::$name . " is taking up " . $this->course . ". " . self::greeting("Good day");
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, id=f2107647-50aa-4d7a-9847-28209e148fc7, answer=[1]

In the statement `return $greet . ", " . self::$name . "!";` on line 37 of `Person.php`, replace `self::$name` with `$this->name`. Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `John is taking up BSCS.`.

 - It prints `Good day, John! John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.

:::

+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=c0ddc5d6-6596-45ac-ae6f-4162068c61b0, answer=[2,3,4]

Which statements correctly describe a static method?

 - The `$this` pseudo-variable with object operator `->` is required inside a static method.

 - The `$this` pseudo-variable with object operator `->` is not allowed inside a static method. 

 - It can be accessed outside a class without creating an object as an instance of a class itself.

 - All static methods with `public` visibility can be accessed outside a class using the class name with the scope operator `::`. 

 - All static methods with `protected` visibility can be accessed outside a class using the class name with the scope operator `::`. 


/// type=MS, id=6bfb9503-3114-42e8-88a4-3194e3df2281, answer=[2,3,4]

Which statements are true about a static property?

 - It can be accessed using the `$this` pseudo-variable with object operator `->`. 

 - It cannot be accessed using the `$this` pseudo-variable with object operator `->`. 

 - It can be accessed outside a class without creating an object as an instance of a class itself.

 - All static properties with `public` visibility can be accessed outside a class using the class name with the scope operator `::`. 

 - All static properties with `protected` visibility can be accessed outside a class using the class name with the scope operator `::`. 


/// type=SS, id=0b0f94a5-db98-412d-95e0-f52d0065c29e, answer=[1]

Which statement best describes the `static` keyword?

 - It defines a static method and property.

 - It displays a static method and property.

 - It removes a static method and property.

 - It accesses a static method and property.

 - It evaluates a static method and property.


/// type=SS, id=47bbfa11-e79e-465f-b352-feb4805af481, answer=[5]

Which statement is true about the `self` keyword?

 - It defines static methods and properties within a class itself.

 - It returns static methods and properties within a class itself.

 - It creates static methods and properties within a class itself.

 - It removes static methods and properties within a class itself.

 - It accesses static methods and properties within a class itself.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
}

echo Person::greeting("Hello");
?>
```
/// type=SS, id=eefc9946-efa8-428a-816a-ee94fad93d61, answer=[3]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, Anna!`.


/// type=SS, id=5ddad075-1765-4a06-bc30-42f01e459109, answer=[5]

What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, id=4302340f-4032-4337-8192-091cec8a2405, answer=[2,3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the `return` statement on line 8.

 - On line 8, the statement `return $greet . ", " . $this->name . "!";` is invalid.

 - The `$this` pseudo-variable is not allowed inside the static method `greeting()` on line 8.

 - On line 8, the expression `$this->name` that accesses the static property `$name` is incorrect.

 - The static method `greeting()` does not accept the `$this` pseudo-variable in accessing the static property `$name`.

:::


/// type=CR, id=37f3e1d7-2535-4d05-9868-2d9cec8e9ba3, answer=[tests/StaticMethodsAndProperties/IncorrectThisKeywordTest.php]

Correct the code so that it outputs the string `Hello, Anna!`.

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
}

echo Person::greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    protected static function greeting($greet)
    {
		return $greet . ", " . self::$name . "!";
    }
}

echo Person::greeting("Hello");
?>
```
/// type=SS, id=19fd215d-0474-4f00-8cfb-6053591ba582, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, id=a18513f1-5b53-4e3a-84fa-28ee598d36bb, answer=[1,4]

Which statements correctly describe the error?

 - On line 12, the method call `Person::greeting("Hello")` is invalid.

 - There is no semicolon `;` at the end of the `return` statement on line 8.

 - There is no argument specified in the method call `Person::greeting("Hello")` on line 12.

 - The static method `greeting()` with `protected` visibility is not accessible outside the `Person` class.

 - On line 12, the scope resolution operator `::` between `Person` and `greeting("Hello")` is incorrect.

:::


/// type=CR, id=150808ea-de53-426b-920d-15d04406dcfd, answer=[tests/StaticMethodsAndProperties/IncorrectCallToProtectedMethodTest.php]

Correct the code so that it outputs the string `Hello, Anna!`.

```php
<?php
class Person
{
    public static $name = "Anna";

    protected static function greeting($greet)
    {
		return $greet . ", " . self::$name . "!";
    }
}

echo Person::greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person->greeting("Hello");
?>
```
/// type=SS, id=9c5423af-747e-472f-ae98-0bd1e4432d39, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, id=6e696feb-c062-4751-8f0d-de8a11a37638, answer=[2,3,5]

Which statements correctly describe the error?

 - On line 12, the statement `Person::$name = "James";` is invalid.

 - On line 13, the statement `echo Person->greeting("Hello");` is invalid.

 - On line 13, the object operator `->` between `Person` and `greeting("Hello")` is incorrect.

 - There is no argument specified in the method call `Person::greeting("Hello")` on line 13.

 - The scope resolution operator `::` is replaced with the object operator `->` in `Person->greeting("Hello")` on line 13.

:::


/// type=CR, id=a191ecbc-609e-4cdf-9cdc-01e170c241ba, answer=[tests/StaticMethodsAndProperties/IncorrectOperatorUsedInMethodCallTest.php]

Correct the code so that it outputs the string `Hello, James!`.

```php
<?php
class Person
{
    public static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person->greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    private static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person::greeting("Hello");
?>
```
/// type=SS, id=4a6bb508-c61b-4875-92f4-e11002edae9f, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 6

 - Uncaught Error: Cannot access `private` property `Person::$name` thrown on line number 12

 - syntax error, unexpected `'->'` (T_OBJECT_OPERATOR), expecting `','` or `';'` on line number 13

 - Uncaught Error: Call to `protected` method `Person::greeting()` from context thrown on line number 12

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting('Hello')` thrown on line number 8


/// type=MS, id=d1e2cbf3-f9d7-4049-981e-0208d7f5a61f, answer=[2,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 12.

 - On line 12, the statement `Person::$name = "James";` is invalid.

 - On line 13, the statement `echo Person::greeting("Hello");` is invalid.

 - There is a scope resolution operator `::` between `Person` and `$name` on line 12.

 - The static property `$name` with `private` visibility is not accessible outside the `Person` class.

:::


/// type=CR, id=dc7bacce-fa18-45b6-bb77-f760ab1b186d, answer=[tests/StaticMethodsAndProperties/IncorrectAccessToPrivatePropertyTest.php]

Correct the code so that it outputs the string `Hello, James!`.

```php
<?php
class Person
{
    private static $name = "Anna";

    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
}

Person::$name = "James";
echo Person::greeting("Hello");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject->display();
?>
```
/// type=SS, id=c7cf6020-5dcd-4ab8-81ef-060ce49d1601, answer=[1]

Execute the program. What is the error message?

 - Accessing static property `Person::$name` as non static on line number 9

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Non-static method `Person::display()` should not be called statically on line number 47

 - Uncaught Error: Using `$this` when not in object context `Person::display()` thrown on line number 42
 
 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 42


/// type=MS, id=36c6e44f-ce1e-4112-a0a2-44ca28d1af8b, answer=[1,5]

Which statements correctly describe the error?

 - On line 9, the statement `$this->name = $name;` is invalid.

 - There is no dollar sign `$` before `name` in `$this->name` on line 9.

 - On line 4, the property definition `public static $name = "Anna";` is invalid.

 - There is a `static` keyword specified in `public static $name = "Anna";` on line 4.

 - The `$this` pseudo-variable with the object operator `->` is not allowed in accessing the static property `$name` of the `Person` class.

:::


/// type=CR, id=739ddd29-eba7-4e88-a781-93117f3ef8a9, answer=[tests/StaticMethodsAndProperties/MissingSelfKeywordTest.php]

Correct the code so that it outputs the string `Hello, John! You are 12 years old.`.

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject->display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject::display();
?>
```
/// type=MS, id=8a51d2ee-048d-4d2d-a970-a60dfdbe8fe2, answer=[3,4]

Execute the program. What are the error messages?

 - Accessing static property `Person::$name` as non static on line number 9

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Non-static method `Person::display()` should not be called statically on line number 47

 - Uncaught Error: Using `$this` when not in object context `Person::display()` thrown on line number 42
 
 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 42


/// type=MS, id=ac259054-73fc-4b7d-8c43-47da47e1c755, answer=[2,3,5]

Which statements correctly describe the error?

 - There are no parentheses `()` after `display` on line 47.

 - The method call `$personObject::display()` on line 47 is invalid.

 - The scope resolution operator `::` is not allowed in accessing non-static methods.

 - There is no argument specified in the method call `$personObject::display()` on line 47.

 - There is a scope resolution operator `::` between `$personObject` and `display()` on line 47.

:::


/// type=CR, id=d075d16e-f076-475b-a768-c05e4038017c, answer=[tests/StaticMethodsAndProperties/IncorrectScopeResolutionOperatorTest.php]

Correct the code so that it outputs the string `Hello, John! You are 12 years old.`.

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject::display();
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject->display();
?>
```
/// type=SS, id=619d836c-51dc-40e1-a31f-efab7850fafb, answer=[2]

Execute the program. What is the error message?

 - Accessing static property `Person::$name` as non static on line number 9

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Non-static method `Person::display()` should not be called statically on line number 47

 - Uncaught Error: Using `$this` when not in object context `Person::display()` thrown on line number 42
 
 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 42


/// type=MS, id=9bca00e6-cec9-4640-9d6a-e8aab1e95bfd, answer=[2,3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the `return` statement on line 37.

 - On line 37, the statement `return $greet . ", " . $this->name . "!";` is invalid.

 - The `$this` pseudo-variable is not allowed inside the static method `greeting()` on line 37.

 - On line 37, the expression `$this->name` that accesses the static property `$name` is incorrect.

 - The static method `greeting()` does not accept the `$this` pseudo-variable in accessing the static property `$name`.

:::


/// type=CR, id=1e2213b9-a96c-4314-8e43-793bcb3c4106, answer=[tests/StaticMethodsAndProperties/NotAllowedThisInStaticMethodTest.php]

Correct the code so that it outputs the string `Hello, John! You are 12 years old.`.

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}

$personObject = new Person("John", 12);
$personObject->display();
?>
```


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . self::$name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, id=bb052a21-d1f6-4c16-beba-488900ee2dd6, answer=[5]

Execute the program. What is its output?

 - It prints `Good day`.

 - It produces an error.

 - It prints `Good day, John!`.

 - It prints `John is taking up BSCS.`.

 - It prints `John is taking up BSCS. Good day, John!`.


/// type=SS, id=6bba0787-8ad3-43c7-b1be-d9fe2026a229, answer=[2]

In the statement `return $greet . ", " . self::$name . "!";` on line 37 of `Person.php`, replace `self::$name` with `$this->name`. Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 37

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Missing argument `1` for `Person::greeting()`, called on line 20 and defined on line number 35

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting()` on line number 37

 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 20

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting("Good day");
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=MS, id=07ffe5d0-7d09-4ee0-80cc-f27c52f72e61, answer=[1,3,4]

Remove the string `"Good day"` from the method call `parent::greeting("Good day")` on line 20 of `Student.php`. Execute the program. What are the error messages?

 - Undefined variable: `greet` on line number 37

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Missing argument `1` for `Person::greeting()`, called on line 20 and defined on line number 35

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting()` on line number 37

 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 20

:::


:::

/// type=REPL, filename=[Person.php,Student.php]

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    public static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting();
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```
/// type=SS, id=40b996ca-815e-42ed-8fa7-1d72720a38be, answer=[5]

In the declaration `public static function greeting($greet)` on line 35 of `Person.php`, replace `public` with `private`. Execute the program. What is the error message?

 - Undefined variable: `greet` on line number 37

 - Uncaught Error: Using `$this` when not in object context thrown on line number 37

 - Missing argument `1` for `Person::greeting()`, called on line 20 and defined on line number 35

 - Uncaught Error: Using `$this` when not in object context in `Person::greeting()` on line number 37

 - Uncaught Error: Call to `private` method `Person::greeting()` from context `'Student'` on line number 20

:::


/// type=CR, id=dd205f65-682c-49bc-87ff-8bfafa4c8cc6, answer=[tests/StaticMethodsAndProperties/CorrectMultipleErrorsTest.php], filename=[Person.php,Student.php]

Correct the code so that it outputs the string `John is taking up BSCS. Good day, John!`.

```php
<?php
class Person
{
    public static $name = "Anna";
    private $age;
	
    public function __construct($name, $age)
    {
        self::$name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    
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
	
    private static function greeting($greet)
    {
        return $greet . ", " . $this->name . "!";
    }
	
    public function display()
    {
        echo self::greeting("Hello") . " You are " . $this->getAge() . " years old.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Person.php');
class Student extends Person
{
    private $course;
    	
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }
    
    public function getCourse()
    {
        return $this->course;
    }

    public function display()
    {
        echo parent::$name . " is taking up " . $this->course . ". " . parent::greeting();
    }
}

$studentObject = new Student("John", 20, "BSCS");
$studentObject->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=93fc08d1-94e6-42ec-b00b-e067d20179f8, answer=[tests/StaticMethodsAndProperties/CreateNewClassWithStaticMethodAndPropertyTest.php]

Write a program that uses `static` and `self` keywords to define and access a static method and property of a class. First, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:

 1. Use a `static` keyword to add a property definition of a class property `$type` with the value `Dog` using the `public` visibility keyword. 
 
 2. Add another static property named `$age` with `public` visibility. 
 
 3. A `__construct()` method with the parameters `$type` and `$age`. Inside the `__construct()` method body, add a statement that assigns the value of `$type` to the static property `$type` of the `Animal` class. Then, add an `if` statement that evaluates `$age` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$age` to the static property `$age` of the `Animal` class. 
 
 4. After the `__constuct()` method definition, add a `private` method named `isValid()` with a parameter `$value`. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. 
 
 5. Use the `static` keyword to add a static method named `display()` with `public` visibility. Inside the `display()` method body, add an `echo` statement to display the string `"The " . self::$type . " is " . self::$age . " years old."`.
 
After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.

```php
<?php



?>
```

+++
