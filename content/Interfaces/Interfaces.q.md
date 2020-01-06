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
/// type=SS, id=fd3a2079-add4-4c68-8523-9fdf6460d290, answer=[5]

Execute the program. What is its output?

 - It prints `12`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is an adolescent human being.`.


/// type=MS, id=93cecc09-8f11-4dfc-af2a-47a595d48134, answer=[2,3]

Which of the following are abstract method definitions?

 - `protected $name;`

 - `public function stage();`

 - `public function species();`

 - `public function species() { return "human"; }`

 - `public function getAge() { return $this->age; }`


/// type=SS, id=9ca888ba-4a9c-48d0-b25a-dee81e55111d, answer=[3]

In the declaration `interface LifeCycle` on line 2 of `LifeCycle.php`, what is `interface`?

 - It is a value.

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is a constructor.


/// type=SS, id=545b361b-e27e-44ec-be9f-0eb0688d00b1, answer=[5]

In the declaration `interface LifeCycle` on line 2 of `LifeCycle.php`, what is `LifeCycle`?

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is a constructor.

 - It is an interface name.


/// type=SS, id=080e2e9c-3b37-4d8d-b9f1-a95943e4560d, answer=[2]

Which statement best describes `interface LifeCycle` on line 2 of `LifeCycle.php`?

 - It creates the `LifeCycle` class. 

 - It defines the `LifeCycle` interface.

 - It removes the `LifeCycle` interface.

 - It accesses the `LifeCycle` interface.

 - It implements the `LifeCycle` interface.


/// type=MS, id=f6a43a97-cedf-425b-b468-becc0a2b538d, answer=[3,4]

Which statements correctly describe `public function species();` on line 4 of `LifeCycle.php`?

 - It removes the `species()` method definition.

 - It hides the `species()` method implementation.

 - It defines the abstract method named `species()`.

 - It declares the `species()` method without a body.

 - It sets the value of the `species()` method to abstract.


/// type=MS, id=502de715-c591-483e-8988-632e7084afe6, answer=[3,4]

Which statements correctly describe `public function stage();` on line 5 of `LifeCycle.php`?

 - It removes the `stage()` method definition.

 - It hides the `stage()` method implementation.

 - It defines the abstract method named `stage()`.

 - It declares the `stage()` method without a body.

 - It sets the value of the `stage()` method to abstract.


/// type=SS, id=d3e81488-880a-4472-9341-3f2c08b8706a, answer=[2]

In the declaration `class Person implements LifeCycle` on line 3 of `Person.php`, what is `implements`?

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is a constructor.

 - It is an interface name.


/// type=MS, id=d20eb73f-1fa5-4209-af06-c90bbf806e4f, answer=[1,5]

In the declaration `class Person implements LifeCycle` on line 3 of `Person.php`, what does the `implements` keyword do?

 - It lets the `Person` class implement the `LifeCycle` interface.

 - It lets the `LifeCycle` interface implement the `Person` class.

 - It defines the `LifeCycle` interface as a child of the `Person` class.

 - It creates the `Person` class as a parent of the `LifeCycle` interface.

 - It specifies the `Person` class to implement all the methods of the `LifeCycle` interface.


/// type=MS, id=ea1aceb5-228c-4d70-ace9-57f99276969c, answer=[3,4]

Which statements correctly describe `class Person implements LifeCycle` on line 3 of `Person.php`?

 - It creates the `LifeCycle` interface as a child of the `Person` class.

 - It defines the `LifeCycle` interface that implements the `Person` class.

 - It defines the `Person` class that implements the `LifeCycle` interface.

 - It creates the `Person` class to implement all the abstract methods of the `LifeCycle` interface.

 - It creates the `LifeCycle` interface to implement all the abstract methods of the `Person` class.


/// type=MS, id=7a2988e0-d539-4467-8fbe-3e12c4b79235, answer=[1,3]

Which methods of the `Person` class are inherited from the `LifeCyle` interface?

 - `stage()`

 - `setAge()`

 - `species()`

 - `display()`

 - `checkAge()`


/// type=MS, id=0bcaa238-a3f9-44e6-a57d-e968f83be671, answer=[2,3,5]

Which of the following are method calls?

 - `$this->name`

 - `$this->stage()`

 - `$this->species()`

 - `function display()`

 - `$personObject->display()`


/// type=MS, id=fa0be19b-233c-42b7-ba29-9aeaa8e8355f, answer=[1,4,5]

Which statements correctly describe the `stage()` method of the `Person` class?

 - It returns the string `adolescent`.

 - It removes the string `adolescent`.

 - It accesses the abstract `stage()` method of the `LifeCycle` interface.

 - It overrides the abstract `stage()` method of the `LifeCycle` interface.

 - It provides the implementation of the abstract `stage()` method in the `LifeCycle` interface.


/// type=MS, id=04010fa7-76c4-418c-91b3-87af729dfb2f, answer=[1,4,5]

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
/// type=SS, id=a8f568f3-839e-4393-877d-2c3f15184bad, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is an adolescent human being.`.


/// type=SS, id=8fc78beb-056a-4fb8-a952-b5dda0330b0b, answer=[2]

Which of the following is an abstract class?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=MS, id=70eca6be-eec5-4eeb-9195-f5ee10be78e6, answer=[1,2,3]

Which of the following are abstract methods?

 - `public function stage();`

 - `public function species();`

 - `abstract public function display();`

 - `public function species() { return "human"; }`

 - `public function getAge() { return $this->age; }`


/// type=SS, id=bcde6925-c823-43fd-be80-3b41da800900, answer=[4]

Which of the following is an interface?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, id=c8e0d9d9-cf81-41ae-83bd-73a5986d7955, answer=[3]

Which of the following is a child class?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, id=4b27f81d-a58e-43d5-836e-797075ae2ffe, answer=[2]

Which of the following is a parent class?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, id=9dad320f-3a4c-4240-8a06-b7dc79257bdd, answer=[1]

Which of the following is an interface declaration?

 - `interface LifeCycle {...}`

 - `abstract class Person {...}`

 - `abstract public function display();`

 - `public function species() { return "human"; }`

 - `class Student extends Person implements LifeCycle {...}`


/// type=SS, id=69510c26-6c0b-46d4-9781-a0bdf3e027be, answer=[3]

Which class implements the `LifeCycle` interface?

 - `John`

 - `Person`

 - `Student`

 - `LifeCycle`

 - `$studentObject`


/// type=SS, id=79478e5a-4391-4b42-a4a6-f11001d11106, answer=[2]

In the declaration `interface LifeCycle` on line 2 of `LifeCycle.php`, what does the `interface` keyword do?

 - It creates the `LifeCycle` class. 

 - It defines the `LifeCycle` interface.

 - It removes the `LifeCycle` interface.

 - It accesses the `LifeCycle` interface.

 - It implements the `LifeCycle` interface.


/// type=SS, id=33a535e6-360b-4e48-8765-3225640ad471, answer=[4]

In the declaration `abstract class Person` on line 2 of `Person.php`, what does the `abstract` keyword do?

 - It removes the `Person` class definition.

 - It hides the `Person` class implementation.

 - It creates an instance of the `Person` class.

 - It defines the abstract class named `Person`.

 - It sets the value of the `Person` class to abstract.


/// type=MS, id=945a3a94-81f5-4ae1-8156-18ebddc44611, answer=[4,5]

In the declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`, what does the `extends` keyword do?

 - It creates the `Student` class with the value `Person`.

 - It sets the `Student` class as the parent of the `Person` class.

 - It accesses the `Student` class as the child of the `Person` class.

 - It specifies the `Person` class as the parent of the `Student` class.

 - It defines the `parent-child` relationships between `Person` and `Student` classes.


/// type=MS, id=280827d1-b5a7-4f8d-bc05-0fba1a961cd3, answer=[1,5]

In the declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`, what does the `implements` keyword do?

 - It lets the `Student` class implement the `LifeCycle` interface.

 - It lets the `LifeCycle` interface implement the `Student` class.

 - It defines the `LifeCycle` interface as a child of the `Student` class.

 - It creates the `Student` class as a parent of the `LifeCycle` interface.

 - It specifies the `Student` class to implement all the methods of the `LifeCycle` interface.


/// type=SS, id=974db045-0646-41df-80f8-b0774e80a23d, answer=[3]

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

/// type=MS, id=c770ac07-4367-4941-9082-24889438af5e, answer=[1,2,4,5]

Which statements are true about an interface?

 - It cannot be instantiated.

 - A class can implement several interfaces.

 - It is a class that does not have an implementation.

 - It is a program that only contains public methods that do not have a method body or implementation.

 - It requires the implementing class to provide a method body or implementation to all its abstract methods.


/// type=SS, id=4f08410b-aec7-4e4a-bec8-b6e4a90119d6, answer=[2]

Which statement best describes the `interface` keyword?

 - It creates a class. 

 - It defines an interface.

 - It removes an interface.

 - It accesses an interface.

 - It implements an interface.


/// type=MS, id=d1f24c04-aba6-4e67-994a-c26af91a6fab, answer=[2,5]

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
/// type=SS, id=a90155a6-655e-4cde-a7f4-9cb38fe281c7, answer=[3]

Execute the program. What is its output?

 - It prints `12`.

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `Anna is an adolescent human being.`.


/// type=SS, id=806eb544-5124-4ec7-9113-c96b2f42e8d8, answer=[2]

What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 41

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 3

 - Class Person contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 2


/// type=MS, id=70f14d14-a410-4530-a764-ab26f75218bb, answer=[1,2,4]

Which statements correctly describe the error?

 - Non-abstract methods are not allowed in an interface. 

 - There are curly braces `{}` after `public function species()` on line 4 of `LifeCycle.php`.

 - There is no parameter specified in `public function species()` on line 4 of `LifeCycle.php`.

 - On line 4 of `LifeCycle.php`, the method definition `public function species(){}` is invalid.

 - There is no `abstract` keyword before `public function species()` on line 4 of `LifeCycle.php`.

:::


/// type=CR, id=800c09ed-7b06-4976-9b88-97859aa64b49, answer=[tests/Interfaces/IncorrectInterfaceMethodDefinitionTest.php], filename=[LifeCycle.php,Person.php]

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
/// type=SS, id=effce7e6-d55b-48d0-b46f-d9691e038d21, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 41

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 3

 - Class Person contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 2


/// type=MS, id=1f8a0485-bb20-47cf-953e-7f39e57f0241, answer=[1,3]

Which statements correctly describe the error?

 - On line 2 of `LifeCycle.php`, the declaration `interfaces LifeCycle` is invalid.

 - There is no semicolon `;` at the end of the statement on line 2 of `LifeCycle.php`.

 - The `interface` keyword is misspelled as `interfaces` on line 2 of `LifeCycle.php`.

 - There are no parentheses `()` after `interfaces LifeCycle` on line 2 of `LifeCycle.php`.

 - There is no open curly brace `{` after `interfaces LifeCycle` on line 2 of `LifeCycle.php`.

:::


/// type=CR, id=44cfdb2a-8270-46b5-84fb-7e435fd7ad57, answer=[tests/Interfaces/MisspelledInterfaceKeywordTest.php], filename=[LifeCycle.php,Person.php]

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
/// type=SS, id=4ebc1c62-66b7-43df-83a1-3a68302a4213, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 41

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 3

 - Class Person contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 2


/// type=MS, id=70bf2861-a5d7-4072-9f2e-c2db6210bbdc, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 41 of `Person.php`, the method declaration `public function species();` is invalid.

 - There is no open curly brace `{` after `public function species();` on line 41 of `Person.php`.

 - There is no `abstract` keyword before `public function species();` on line 41 of `Person.php`.

 - On line 41 of `Person.php`, the semicolon `;` at the end of `public function species();` is not allowed.

 - There is a semicolon `;` at the end of the method declaration `public function species();` on line 41 of `Person.php`.

:::


/// type=CR, id=07a05435-b0c0-40f8-b108-95eed4ae71b2, answer=[tests/Interfaces/RemoveUnwantedSemicolonOnMethodTest.php], filename=[LifeCycle.php,Person.php]

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
/// type=SS, id=3a1b4505-cbbd-41cf-a148-ee9aedb89e5f, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 40

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 4

 - Class Student contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 4


/// type=MS, id=9e6f547c-797d-4a5b-83d4-ef5fd2b206da, answer=[2,3]

Which statements correctly describe the error?

 - In the class declaration on line 4 of `Student.php`, the `extend` keyword is misspelled as `extends`.

 - In the class declaration on line 4 of `Student.php`, the `implements` keyword is misspelled as `implement`. 

 - On line 4 of `Student.php`, the class declaration `class Student extends Person implement LifeCycle` is invalid.

 - There is no open curly brace `{` after `class Student extends Person implement LifeCycle` on line 4 of `Student.php`.

 - There is a semicolon `;` at the end of the class declaration `class Student extends Person implement LifeCycle` on line 4 of `Student.php`.

:::


/// type=CR, id=98d362bb-a1be-4dcd-84d1-4ccb3c321591, answer=[tests/Interfaces/MisspelledImplementsKeywordTest.php], filename=[LifeCycle.php,Person.php,Student.php]

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
/// type=SS, id=83123b75-5da1-4968-ae0d-5292c6b1b171, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 40

 - syntax error, unexpected `'implement'` (T_STRING), expecting `'{'` on line number 4

 - Class Student contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 4


/// type=SS, id=1d163164-40f6-449c-bab8-fddcb7b93753, answer=[1]

Which statement best describes the error?

 - There is no `stage()` method implementation provided in the `Student` class.

 - There is no `species()` method implementation provided in the `Student` class.

 - In the class declaration on line 2 of `Student.php`, the `extend` keyword is misspelled as `extends`.

 - On line 4 of `Student.php`, the class declaration `class Student extends Person implements LifeCycle` is invalid.

 - There is a semicolon `;` at the end of the class declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`.

:::


/// type=CR, id=d558d4c1-3fb9-4f31-ae30-a54219bd4b27, answer=[tests/Interfaces/MissingStageMethodImplementationTest.php], filename=[LifeCycle.php,Person.php,Student.php]

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
/// type=SS, id=33d2a39b-2b58-48a3-af7a-041666825dfb, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'LifeCycle'` (T_STRING) on line number 2

 - Interface function `LifeCycle::species()` cannot contain body on line number 4

 - syntax error, unexpected `'{'`, expecting function (T_FUNCTION) on line number 40

 - Access level to `Student::display()` must be public (as in class Person) on line number 2

 - Class Student contains `1` abstract method and must therefore be declared abstract or implement the remaining methods (LifeCycle::stage) on line number 4


/// type=MS, id=0618de0c-51a7-4492-af60-c2b3b5b89c84, answer=[1,3]

Which statements correctly describe the error?

 - On line 16 of `Student.php`, the method declaration `private function display()` is invalid.

 - There is a semicolon `;` at the end of `private function display()` on line 16 of `Student.php`.

 - The `private` visibility keyword is not allowed when overriding the `display()` method of the `Person` class.

 - On line 4 of `Student.php`, the class declaration `class Student extends Person implements LifeCycle` is invalid.

 - There is a semicolon `;` at the end of the class declaration `class Student extends Person implements LifeCycle` on line 4 of `Student.php`.

:::


/// type=CR, id=271294cd-1afd-46b4-9835-de4d6c1f9648, answer=[tests/Interfaces/IncorrectVisibilityKeywordOnDisplayMethodTest.php], filename=[LifeCycle.php,Person.php,Student.php]

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
/// type=SS, id=501e39d3-d998-4914-b77d-2cdcf21bda14, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is an adolescent human being.`.


/// type=SS, id=e192c019-9859-4810-9f43-9286ff3aba24, answer=[1]

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
/// type=SS, id=45162372-6c9f-4b9a-ad52-aea97f2cba71, answer=[4]

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
/// type=SS, id=e0cf514d-e1b4-408e-8c31-3967d1b3e474, answer=[5]

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
/// type=SS, id=4a2ab5d1-cfcf-4bec-9462-538e21cf6811, answer=[3]

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
/// type=SS, id=6bbd8c50-e982-4626-a663-373429dcc706, answer=[2]

In `Student.php`, remove the `extends` keyword from `class Student extends Person LifeCycle` on line 4. Execute the program. What is the error message?

 - Uncaught Error: Cannot instantiate abstract class `Person` on line number 22

 - syntax error, unexpected `'Person'` (T_STRING), expecting `'{'` on line number 4

 - syntax error, unexpected `'LifeCycle'` (T_STRING), expecting `'{'` on line number 4

 - Abstract function `Person::display()` cannot be declared private on line number 46

 - Access type for interface method `LifeCycle::species()` must be omitted on line number 4

:::


/// type=CR, id=f67e7b3c-803d-4215-a8ac-f1a10138731a, answer=[tests/Interfaces/CorrectMultipleErrorsTest.php], filename=[LifeCycle.php,Person.php,Student.php]

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

/// type=CR, id=b447ca5d-c0f2-4664-8e83-ca91f39a71be, answer=[tests/Interfaces/CreateClassThatImplementsAnInterfaceTest.php], filename=[LifeCycle.php,Animal.php,Mammal.php]

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
