# Interfaces

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
require_once('./LifeCycle.php');
class Person implements LifeCycle
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$personObject = new Person("Anna", 12);
$personObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `12`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is an adolescent human being.`.


/// type=MS, answer=[2,3]

Which of the following are abstract method definitions?

 - `protected $name;`

 - `public function stage();`

 - `public function species();`

 - `public function species() { return "human"; }`

 - `public function getAge() { return $this->age; }`


/// type=SS, answer=[3]

In the declaration `interface LifeCycle` on line 2 of `LifeCycle.php`, what is `interface`?

 - It is a value.

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is a constructor.


/// type=SS, answer=[5]

In the declaration `interface LifeCycle` on line 2 of `LifeCycle.php`, what is `LifeCycle`?

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is a constructor.

 - It is an interface name.


/// type=SS, answer=[2]

Which statement best describes `interface LifeCycle` on line 2 of `LifeCycle.php`?

 - It creates the `LifeCycle` class. 

 - It defines the `LifeCycle` interface.

 - It removes the `LifeCycle` interface.

 - It accesses the `LifeCycle` interface.

 - It implements the `LifeCycle` interface.


/// type=MS, answer=[3,4]

Which statements correctly describe `public function species();` on line 4 of `LifeCycle.php`?

 - It removes the `species()` method definition.

 - It hides the `species()` method implementation.

 - It defines the abstract method named `species()`.

 - It declares the `species()` method without a body.

 - It sets the value of the `species()` method to abstract.


/// type=MS, answer=[3,4]

Which statements correctly describe `public function stage();` on line 5 of `LifeCycle.php`?

 - It removes the `stage()` method definition.

 - It hides the `stage()` method implementation.

 - It defines the abstract method named `stage()`.

 - It declares the `stage()` method without a body.

 - It sets the value of the `stage()` method to abstract.


/// type=SS, answer=[2]

In the declaration `class Person implements LifeCycle` on line 3 of `Person.php`, what is `implements`?

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is a constructor.

 - It is an interface name.


/// type=MS, answer=[1,5]

In the declaration `class Person implements LifeCycle` on line 3 of `Person.php`, what does the `implements` keyword do?

 - It lets the `Person` class implement the `LifeCycle` interface.

 - It lets the `LifeCycle` interface implement the `Person` class.

 - It defines the `LifeCycle` interface as a child of the `Person` class.

 - It creates the `Person` class as a parent of the `LifeCycle` interface.

 - It specifies the `Person` class to implement all the methods of the `LifeCycle` interface.


/// type=MS, answer=[3,4]

Which statements correctly describe `class Person implements LifeCycle` on line 3 of `Person.php`?

 - It creates the `LifeCycle` interface as a child of the `Person` class.

 - It defines the `LifeCycle` interface that implements the `Person` class.

 - It defines the `Person` class that implements the `LifeCycle` interface.

 - It creates the `Person` class to implement all the abstract methods of the `LifeCycle` interface.

 - It creates the `LifeCycle` interface to implement all the abstract methods of the `Person` class.


/// type=MS, answer=[1,3]

Which methods of the `Person` class are inherited from the `LifeCyle` interface?

 - `stage()`

 - `setAge()`

 - `species()`

 - `display()`

 - `checkAge()`


/// type=MS, answer=[2,3,5]

Which of the following are method calls?

 - `$this->name`

 - `$this->stage()`

 - `$this->species()`

 - `function display()`

 - `$personObject->display()`


/// type=MS, answer=[1,4,5]

Which statements correctly describe the `stage()` method of the `Person` class?

 - It returns the string `adolescent`.

 - It removes the string `adolescent`.

 - It accesses the abstract `stage()` method of the `LifeCycle` interface.

 - It overrides the abstract `stage()` method of the `LifeCycle` interface.

 - It provides the implementation of the abstract `stage()` method in the `LifeCycle` interface.


/// type=MS, answer=[1,4,5]

Which statements correctly describe the `species()` method of the `Person` class?

 - It returns the string `human`.

 - It removes the string `human`.

 - It accesses the abstract `species()` method of the `LifeCycle` interface.

 - It overrides the abstract `species()` method of the `LifeCycle` interface.

 - It provides the implementation of the abstract `species()` method in the `LifeCycle` interface.

:::


:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is an adolescent human being.`.


/// type=SS, answer=[2]

Which of the following is an abstract class?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=MS, answer=[1,2,3]

Which of the following are abstract methods?

 - `public function stage();`

 - `public function species();`

 - `abstract public function display();`

 - `public function species() { return "human"; }`

 - `public function getAge() { return $this->age; }`


/// type=SS, answer=[4]

Which of the following is an interface?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, answer=[3]

Which of the following is a child class?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, answer=[2]

Which of the following is a parent class?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, answer=[1]

Which of the following is an interface declaration?

 - `interface LifeCycle {...}`

 - `abstract class Person {...}`

 - `abstract public function display();`

 - `public function species() { return "human"; }`

 - `class Student extends Person implements LifeCycle {...}`


/// type=SS, answer=[3]

Which class implements the `LifeCycle` interface?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, answer=[2]

In the declaration `interface LifeCycle` on line 2 of `LifeCycle.php`, what does the `interface` keyword do?

 - It creates the `LifeCycle` class. 

 - It defines the `LifeCycle` interface.

 - It removes the `LifeCycle` interface.

 - It accesses the `LifeCycle` interface.

 - It implements the `LifeCycle` interface.


/// type=SS, answer=[4]

In the declaration `abstract class Person` on line 2 of `Person.php`, what does the `abstract` keyword do?

 - It removes the `Person` class definition.

 - It hides the `Person` class implementation.

 - It creates an instance of the `Person` class.

 - It defines the abstract class named `Person`.

 - It sets the value of the `Person` class to abstract.


/// type=MS, answer=[4,5]

In the declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`, what does the `extends` keyword do?

 - It creates the `Student` class with the value `Person`.

 - It sets the `Student` class as the parent of the `Person` class.

 - It accesses the `Student` class as the child of the `Person` class.

 - It specifies the `Person` class as the parent of the `Student` class.

 - It defines the `parent-child` relationships between `Person` and `Student` classes.


/// type=MS, answer=[1,5]

In the declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`, what does the `implements` keyword do?

 - It lets the `Student` class implement the `LifeCycle` interface.

 - It lets the `LifeCycle` interface implement the `Student` class.

 - It defines the `LifeCycle` interface as a child of the `Student` class.

 - It creates the `Student` class as a parent of the `LifeCycle` interface.

 - It specifies the `Student` class to implement all the methods of the `LifeCycle` interface.


/// type=SS, answer=[3]

Which statement best describes `class Student extends Person implements LifeCycle`?

 - It defines the `Student` class to replace the `Person` class and implements the `LifeCycle` interface.

 - It defines the `Person` class to replace the `Student` class and implements the `LifeCycle` interface.

 - It declares the `Student` class as the child class of the `Person` class that implements the `LifeCycle` interface.

 - It declares the `Person` class as the child class of the `Student` class that implements the `LifeCycle` interface.

 - It declares the `Person` class as the child class of the `LifeCycle` interface that implements the `Student` class.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[1,2,4,5]

Which statements are true about an interface?

 - It cannot be instantiated.

 - A class can implement several interfaces.

 - It is a class that does not have an implementation.

 - It is a program that only contains public methods that do not have a method body or implementation.

 - It requires the implementing class to provide a method body or implementation to all its abstract methods.


/// type=SS, answer=[2]

Which statement best describes the `interface` keyword?

 - It creates a class. 

 - It defines an interface.

 - It removes an interface.

 - It accesses an interface.

 - It implements an interface.


/// type=MS, answer=[2,5]

Which statements correctly describe the `implements` keyword?

 - It defines an interface in a class.

 - It lets a class implement an interface.

 - It lets an interface implement a class.

 - It creates a class as a parent of an interface.

 - It specifies a class to implement all the methods of an interface.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php]

```php
<?php
interface LifeCycle
{
  public function species(){}
  public function stage();
}
?>
```

```php
<?php
require_once('./Person.php');
class Person implements LifeCycle
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$personObject = new Person("Anna", 12);
$personObject->display();
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `12`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is an adolescent human being.`.


/// type=SS, answer=[2]

What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 41

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 3

 - Class Person contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 2


/// type=MS, answer=[1,2,4]

Which statements correctly describe the error?

 - Non-abstract methods are not allowed in an interface. 

 - There are curly braces `{}` after `public function species()` on line 4 of `LifeCycle.php`.

 - There is no parameter specified in `public function species()` on line 4 of `LifeCycle.php`.

 - On line 4 of `LifeCycle.php`, the method definition `public function species(){}` is invalid.

 - There is no `abstract` keyword before `public function species()` on line 4 of `LifeCycle.php`.

:::


/// type=CR, answer=[tests/Interfaces/IncorrectInterfaceMethodDefinitionTest.php], filename=[LifeCycle.php,Person.php]

Correct the code so that it outputs the string `Anna is an adolescent human being.`.

```php
<?php
interface LifeCycle
{
  public function species(){}
  public function stage();
}
?>
```

```php
<?php
require_once('./Person.php');
class Person implements LifeCycle
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$personObject = new Person("Anna", 12);
$personObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php]

```php
<?php
interfaces LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
require_once('./Person.php');
class Person implements LifeCycle
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$personObject = new Person("Anna", 12);
$personObject->display();
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 41

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 3

 - Class Person contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 2


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - On line 2 of `LifeCycle.php`, the declaration `interfaces LifeCycle` is invalid.

 - There is no semicolon `;` at the end of the statement on line 2 of `LifeCycle.php`.

 - The `interface` keyword is misspelled as `interfaces` on line 2 of `LifeCycle.php`.

 - There are no parentheses `()` after `interfaces LifeCycle` on line 2 of `LifeCycle.php`.

 - There is no open curly brace `{` after `interfaces LifeCycle` on line 2 of `LifeCycle.php`.

:::


/// type=CR, answer=[tests/Interfaces/MisspelledInterfaceKeywordTest.php], filename=[LifeCycle.php,Person.php]

Correct the code so that it outputs the string `Anna is an adolescent human being.`.

```php
<?php
interfaces LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
require_once('./Person.php');
class Person implements LifeCycle
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$personObject = new Person("Anna", 12);
$personObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
require_once('./Person.php');
class Person implements LifeCycle
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function species();
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$personObject = new Person("Anna", 12);
$personObject->display();
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 41

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 3

 - Class Person contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 2


/// type=MS, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 41 of `Person.php`, the method declaration `public function species();` is invalid.

 - There is no open curly brace `{` after `public function species();` on line 41 of `Person.php`.

 - There is no `abstract` keyword before `public function species();` on line 41 of `Person.php`.

 - On line 41 of `Person.php`, the semicolon `;` at the end of `public function species();` is not allowed.

 - There is a semicolon `;` at the end of the method declaration `public function species();` on line 41 of `Person.php`.

:::


/// type=CR, answer=[tests/Interfaces/RemoveUnwantedSemicolonOnMethodTest.php], filename=[LifeCycle.php,Person.php]

Correct the code so that it outputs the string `Anna is an adolescent human being.`.

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
require_once('./Person.php');
class Person implements LifeCycle
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function species();
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$personObject = new Person("Anna", 12);
$personObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implement LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 40

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 4

 - Class Student contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 4


/// type=MS, answer=[2,3]

Which statements correctly describe the error?

 - In the class declaration on line 4 of `Student.php`, the `extend` keyword is misspelled as `extends`.

 - In the class declaration on line 4 of `Student.php`, the `implements` keyword is misspelled as `implement`. 

 - On line 4 of `Student.php`, the class declaration `class Student extends Person implement LifeCycle` is invalid.

 - There is no open curly brace `{` after `class Student extends Person implement LifeCycle` on line 4 of `Student.php`.

 - There is a semicolon `;` at the end of the class declaration `class Student extends Person implement LifeCycle` on line 4 of `Student.php`.

:::


/// type=CR, answer=[tests/Interfaces/MisspelledImplementsKeywordTest.php], filename=[LifeCycle.php,Person.php,Student.php]

Correct the code so that it outputs the string `John is an adolescent human being.`.

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implement LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 40

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 4

 - Class Student contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 4


/// type=SS, answer=[1]

Which statement best describes the error?

 - There is no `stage()` method implementation provided in the `Student` class.

 - There is no `species()` method implementation provided in the `Student` class.

 - In the class declaration on line 2 of `Student.php`, the `extend` keyword is misspelled as `extends`.

 - On line 4 of `Student.php`, the class declaration `class Student extends Person implements LifeCycle` is invalid.

 - There is a semicolon `;` at the end of the class declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`.

:::


/// type=CR, answer=[tests/Interfaces/MissingStageMethodImplementationTest.php], filename=[LifeCycle.php,Person.php,Student.php]

Correct the code so that it outputs the string `John is an adolescent human being.`.

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php'); 
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```


:::

/// type=REPL, readonly=true, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php'); 
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    private function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 2

 - Class Student contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 4


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - On line 16 of `Student.php`, the method declaration `private function display()` is invalid.

 - There is a semicolon `;` at the end of `private function display()` on line 16 of `Student.php`.

 - The `private` visibility keyword is not allowed when overriding the `display()` method of the `Person` class.

 - On line 4 of `Student.php`, the class declaration `class Student extends Person implements LifeCycle` is invalid.

 - There is a semicolon `;` at the end of the class declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`.

:::


/// type=CR, answer=[tests/Interfaces/IncorrectVisibilityKeywordOnDisplayMethodTest.php], filename=[LifeCycle.php,Person.php,Student.php]

Correct the code so that it outputs the string `John is an adolescent human being.`.

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    private function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```


:::

/// type=REPL, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Student("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is an adolescent human being.`.


/// type=SS, answer=[1]

In the statement `$studentObject = new Student("John", 15);` on line 22 of `Student.php`, replace `Student` with `Person`. Execute the program. What is the error message?

 - Uncaught Error: Cannot instantiate abstract class `Person` on line number 22

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 4

 - syntax error, unexpected `'LifeCycle'` (T_STRING), expecting `'{'` on line number 4

 - Abstract function `Person::display()` cannot be declared private on line number 46

 - Access type for interface method `LifeCycle::species()` must be omitted on line number 4

:::


:::

/// type=REPL, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract public function display();
}
?>
```

```php
<?php 
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Person("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[4]

In the statement `abstract public function display();` on line 40 of `Person.php`, replace `public` with `private`. Execute the program. What is the error message?

 - Uncaught Error: Cannot instantiate abstract class `Person` on line number 20

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 4

 - syntax error, unexpected `'LifeCycle'` (T_STRING), expecting `'{'` on line number 4

 - Abstract function `Person::display()` cannot be declared private on line number 46

 - Access type for interface method `LifeCycle::species()` must be omitted on line number 4

:::


:::

/// type=REPL, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract private function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Person("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[5]

In the statement `public function species();` on line 4 of `LifeCycle.php`, replace `public` with `protected`. Execute the program. What is the error message?

 - Uncaught Error: Cannot instantiate abstract class `Person` on line number 22

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 4

 - syntax error, unexpected `'LifeCycle'` (T_STRING), expecting `'{'` on line number 4

 - Abstract function `Person::display()` cannot be declared private on line number 46

 - Access type for interface method `LifeCycle::species()` must be omitted on line number 4

:::


:::

/// type=REPL, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  protected function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract private function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person implements LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Person("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[3]

In `Student.php`, remove the `implements` keyword from `class Student extends Person implements LifeCycle` on line 4. Execute the program. What is the error message?

 - Uncaught Error: Cannot instantiate abstract class `Person` on line number 22

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 4

 - syntax error, unexpected `'LifeCycle'` (T_STRING), expecting `'{'` on line number 4

 - Abstract function `Person::display()` cannot be declared private on line number 46

 - Access type for interface method `LifeCycle::species()` must be omitted on line number 4

:::


:::

/// type=REPL, filename=[LifeCycle.php,Person.php,Student.php]

```php
<?php
interface LifeCycle
{
  protected function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract private function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student extends Person LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Person("John", 15);
$studentObject->display();
?>
```
/// type=SS, answer=[2]

In `Student.php`, remove the `extends` keyword from `class Student extends Person LifeCycle` on line 4. Execute the program. What is the error message?

 - Uncaught Error: Cannot instantiate abstract class `Person` on line number 22

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 4

 - syntax error, unexpected `'LifeCycle'` (T_STRING), expecting `'{'` on line number 4

 - Abstract function `Person::display()` cannot be declared private on line number 46

 - Access type for interface method `LifeCycle::species()` must be omitted on line number 4

:::


/// type=CR, answer=[tests/Interfaces/CorrectMultipleErrorsTest.php], filename=[LifeCycle.php,Person.php,Student.php]

Correct the code so that it outputs the string `John is an adolescent human being.`.

```php
<?php
interface LifeCycle
{
  protected function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Person
{
    protected $name;
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

    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    abstract private function display();
}
?>
```

```php
<?php
require_once('./Person.php');
require_once('./LifeCycle.php');
class Student Person LifeCycle
{
    public function species()
    {
        return "human";
    }
	
    public function stage()
    {
        return "adolescent";
    }
	
    public function display()
    {
        echo $this->name . " is an " . $this->stage() . " " . $this->species() . " being.";  
    }
}

$studentObject = new Person("John", 15);
$studentObject->display();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Interfaces/CreateClassThatImplementsAnInterfaceTest.php], filename=[LifeCycle.php,Animal.php,Mammal.php]

Given the `Animal` class and `LifeCycle` interface, write a program that uses an `implements` keyword to implement an interface. In the `Mammal.php` tab, use a `class` keyword to declare a class named `Mammal` that `extends` the `Animal` class and `implements` the `LifeCycle` interface. Within the curly braces `{}`, add an implementation or method body to all abstract methods of the `LifeCycle` interface. Inside the `stage()` method body, add the statement `return "adult";`. Inside the `species()` method body, add a statement that returns the string `animal`. Then, add another `public` method `display()` that overrides the abstract `display()` method of the `Animal` class. Inside the `display()` method body, add an `echo` statement to display the string `"The " . parent::getType() . " is an " . $this->stage() . " " . $this->species() . "."`. After the class declaration, add a statement that creates the `$petMammal` object an instance of the `Mammal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$petMammal` object. Run the program to view the output.

```php
<?php
interface LifeCycle
{
  public function species();
  public function stage();
}
?>
```

```php
<?php
abstract class Animal
{
    private $type = "Dog";
    private $age;
	
    public function __construct($type, $age)
    {
        $this->type = $type;
        if ($this->isValid($age)) {
            $this->age = $age;
        }
    }
	
    private function isValid($value)
    {
        if ($value > 0) {
            return true;
        }
        return false;
    }
	
    public function getType()
    {
        return $this->type;
    }
	
    public function getAge()
    {
        return $this->age;
    }
    
    abstract public function display();
}
?>
```

```php
<?php
require_once('./Animal.php');
require_once('./LifeCycle.php');



?>
```

+++
