# Autoloading Classes

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

```php
<?php
function myAutoloader($className)
{
    $file = __DIR__ . '\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/autoload.php");

$student = new Student("May", 25);
$student->display();
?>
```

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
?>
```
/// type=SS, id=299f7091-97aa-4066-bf7b-d1bf0f3219fe, answer=[5]

Execute the program. What is its output?

 - It prints `25`.

 - It prints `May`.

 - It produces an error.

 - No output is displayed.

 - It prints `May is an adolescent human being.`.


/// type=SS, id=aa97c5fb-e6de-4480-8541-c1997764f9f4, answer=[5]

In the statement `$file = __DIR__ . '\\' . $className . '.php';` on line 4 of `autoload.php`, what is `__DIR__`?

 - It is a value.

 - It is a string.

 - It is a function.

 - It is a keyword.

 - It is a magic constant.


/// type=SS, id=10337975-ce01-47a9-b295-f70ecac28282, answer=[4]

In the statement `$file = __DIR__ . '\\' . $className . '.php';` on line 4 of `autoload.php`, what is `.php`?

 - It is the file path separator.

 - It is the value to search for.

 - It is the name of the class to search for.

 - It is the string that specifies the file extension.

 - It the name of the directory where the class is located.


/// type=SS, id=16f70051-92a0-45a7-8a7e-df9b813c8648, answer=[5]

Which statement best describes `$file = __DIR__ . '\\' . $className . '.php';` on line 4 of `autoload.php`?

 - It returns all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It displays all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It accesses all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It evaluates all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It assigns all the class files in `__DIR__` with the specified `$className` and `.php` extensions to `$file`.


/// type=SS, id=1a18f1ea-32e1-404a-9211-00277d087cfe, answer=[4]

In the statement `$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);` on line 5 of `autoload.php`, what is `str_replace()`?

 - It is a value.

 - It is a string.

 - It is a keyword.

 - It is a built-in function.

 - It is a predefined constant.


/// type=SS, id=8abae603-d481-4d17-9c99-d1fc7ed6a579, answer=[5]

In the statement `$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);` on line 5 of `autoload.php`, what is `DIRECTORY_SEPARATOR`?

 - It is a value.

 - It is a string.

 - It is a keyword.

 - It is a built-in function.

 - It is a predefined constant.


/// type=SS, id=9c6b25c9-ce3d-40c2-a728-6a3e70732e43, answer=[3]

Which statement best describes `str_replace('\\', DIRECTORY_SEPARATOR, $file)` on line 5 of `autoload.php`?

 - It accesses `\` of the predefined constant `DIRECTORY_SEPARATOR` in `$file`.

 - It displays the predefined constant `DIRECTORY_SEPARATOR` with `\` in `$file`.

 - It replaces the predefined constant `DIRECTORY_SEPARATOR` with `\` in `$file`.

 - It evaluates the predefined constant `DIRECTORY_SEPARATOR` and `\` in `$file`.

 - It removes the predefined constant `DIRECTORY_SEPARATOR` and `\` from `$file`.


/// type=MS, id=b9983e6a-10fe-4435-b68b-0db503768c1b, answer=[4,5]

Which statements correctly describe the `myAutoloader()` function of `autoload.php`?

 - It defines the `autoload` class.

 - It accesses several autoload functions.

 - It sets the value of the autoloader class files.

 - It automatically loads the specified class files.

 - It is an autoloader function that accepts an argument.


/// type=SS, id=461df50b-2011-4336-8dee-acf5840d40a4, answer=[1]

In the statement `spl_autoload_register("myAutoloader");` on line 11 of `autoload.php`, what is `myAutoloader`?

 - It is the function that automatically loads the specified class files.

 - It is the parameter that automatically loads the specified class files.

 - It is the keyword that automatically creates the autoload class files.

 - It is the constant that automatically creates the specified class files.

 - It is the command that automatically sets the value of the autoloader class files.


/// type=SS, id=04f51655-80fc-4437-99dd-2d92dd51e840, answer=[5]

In the statement `spl_autoload_register("myAutoloader");` on line 11 of `autoload.php`, what does `spl_autoload_register()` do?

 - It removes the `myAutoloader()` autoload function.

 - It displays the `myAutoloader()` autoload function.

 - It declares the `myAutoloader()` autoload function.

 - It accesses the `myAutoloader()` autoload function.

 - It registers the `myAutoloader()` autoload function.


/// type=SS, id=e48cddc7-550b-430a-a96b-ee5123b4a4c6, answer=[5]

Which statement best describes `spl_autoload_register("myAutoloader");` on line 11 of `autoload.php`?

 - It removes the `myAutoloader()` autoload function.

 - It displays the `myAutoloader()` autoload function.

 - It declares the `myAutoloader()` autoload function.

 - It accesses the `myAutoloader()` autoload function.

 - It registers the `myAutoloader()` autoload function.


/// type=SS, id=27ecfaea-6237-46bb-814c-35343ee0cfac, answer=[3]

Which statement best describes `require_once(__DIR__ . "/autoload.php");` on line 2 of `Main.php`?

- It updates the file `autoload.php`.

- It establishes a relationship between classes.

- It includes the file `autoload.php` in the file `Main.php`.

- It removes the file `autoload.php` in the file `Main.php`.

- It excludes the file `autoload.php` in the file `Main.php`.

:::


:::

/// type=REPL, readonly=true, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
?>
```

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
?>
```
/// type=SS, id=5653da8d-101f-488b-868e-f4c5e16ee988, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `Charles`.

 - It produces an error.

 - No output is displayed.

 - It prints `Charles is an adolescent human being.`.


/// type=SS, id=dee34cae-9590-4eb1-bfe9-2203bfb915b4, answer=[5]

Which of the following is an autoloader?

 - `stage()`

 - `species()`

 - `display()`

 - `__construct()`

 - `myAutoloader()`


/// type=SS, id=08b819c2-3846-4fbd-9d39-097d09130591, answer=[2]

Which of the following is a magic constant?

 - `src`

 - `__DIR__`

 - `dirname()`

 - `$classname`

 - `DIRECTORY_SEPARATOR`


/// type=SS, id=0efb0a00-e5d5-4f43-bbf2-ed9dde04b5dd, answer=[5]

Which of the following is a predefined constant?

 - `src`

 - `__DIR__`

 - `dirname()`

 - `$classname`

 - `DIRECTORY_SEPARATOR`


/// type=SS, id=35f4b530-9fb6-4862-b0f1-9f59fd39a8ac, answer=[1]

In the statement `$file = dirname(__DIR__) . '\\src\\' . $className . '.php';` on line 4 of `autoload.php`, what does `dirname(__DIR__)` do?

 - It returns the path of the parent directory `__DIR__`.

 - It removes the path of the parent directory `__DIR__`.

 - It accesses the path of the parent directory `__DIR__`.

 - It displays the path of the parent directory `__DIR__`.

 - It evaluates the path of the parent directory `__DIR__`.


/// type=SS, id=032544f8-89d9-4941-b008-695528107095, answer=[5]

In the statement `$file = dirname(__DIR__) . '\\src\\' . $className . '.php';` on line 4 of `autoload.php`, what does `\\src\\` indicate?

 - The name of the class file in the directory.

 - The extension of the class file to search for.

 - The root directory of the specified class file.

 - The location where the autoloader function islocated.

 - The specific directory name where the class file is located.


/// type=SS, id=a8d1523e-05d8-4410-b3b4-51a41ef6de31, answer=[5]

Which statement best describes the code on line 4 of `autoload.php`?

 - It returns all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It displays all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It accesses all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It evaluates all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It assigns all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions to `$file`.


/// type=SS, id=cf46bc3f-0fbf-408d-827c-6a4a4386941b, answer=[3]

Which statement best describes `require_once(__DIR__ . "/includes/autoload.php");` on line 2 of `Main.php`?

- It updates the file `autoload.php`.

- It establishes a relationship between classes.

- It includes the file `autoload.php` in the file `Main.php`.

- It removes the file `autoload.php` in the file `Main.php`.

- It excludes the file `autoload.php` in the file `Main.php`.

:::


:::

/// type=REPL, readonly=true, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

function myShapesLoader($shapeClass)
{
    $file = dirname(__DIR__) . '\\Shapes\\' . $shapeClass . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    } 
}

spl_autoload_register("myAutoloader");
spl_autoload_register("myShapesLoader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>
```

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
?>
```

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}
?>
```
/// type=SS, id=c307b1b1-cacd-4897-a056-1e7e62f4a096, answer=[1]

Execute the program. What is printed on line 2?

 - `Radius: 2.5`

 - `Area: 19.635`

 - `Diameter: 6.25`

 - `Circumference: 15.708`

 - `Charles is an adolescent human being.`


/// type=MS, id=cc0f9644-cbb9-4544-a20d-bff785304b3e, answer=[3,5]

Which of the following are autoloaders?

 - `area()`

 - `getRadius()`

 - `myAutoloader()`

 - `circumference()`

 - `myShapesAutoloader()`


/// type=MS, id=228c1db3-c755-4a50-8c97-af7fc220aee9, answer=[4,5]

Which statements correctly describe the `myShapesLoader()` function of `autoload.php`?

 - It defines the `autoload` class.

 - It accesses several autoload functions.

 - It sets the value of the autoloader class files.

 - It is an autoloader function that accepts an argument.

 - It automatically loads the specified class files in `Shapes` directory.


/// type=SS, id=5aa56660-76b8-4d2d-b75f-f209eebd9d09, answer=[5]

Which statement best describes the code on line 20 of `autoload.php`?

 - It displays the `myAutoloader()` autoload function.

 - It removes the `myAutoloader()` autoload function.

 - It declares the `myAutoloader()` autoload function.

 - It accesses the `myAutoloader()` autoload function.

 - It registers the `myAutoloader()` autoload function.


/// type=SS, id=a4defa7c-d24b-4c61-8ee0-f6d0f60d12c8, answer=[3]

Which statement best describes `spl_autoload_register("myShapesLoader");` on line 21 of `autoload.php`?

 - It displays the `myShapesLoader()` autoload function.

 - It removes the `myShapesLoader()` autoload function.

 - It registers the `myShapesLoader()` autoload function.

 - It declares the `myShapesLoader()` autoload function.

 - It accesses the `myShapesLoader()` autoload function.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=ec1592bf-3652-48de-997e-5e15d950eb4d, answer=[5]

Which statement best describes autoloading?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, id=27d12a7b-3a30-4459-bb79-88c7a740ce89, answer=[1]

Which statement best describes the `spl_autoload_register()` function?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, id=004ae2cb-0bdf-4b80-97ce-d050e77df48c, answer=[3]

Which statement is true about an autoloader?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, id=2240ffe1-8441-425f-b284-1fc5edce70f5, answer=[4]

Which statement is true about the `__DIR__` magic constant?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, id=75afece7-04e8-4dfc-b864-36998188c969, answer=[2]

Which statement is true about the `dirname()` function?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

```php
<?php
function myAutoloader($className)
{
    $file = __DIR__ . '\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader()");
?>
```

```php
<?php
require_once(__DIR__ . "/autoload.php");

$student = new Student("May", 25);
$student->display();
?>
```

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
?>
```
/// type=SS, id=cfc0bcc5-4bb4-4949-adfc-c97d7adc52ff, answer=[3]

Execute the program. What is its output?

 - It prints `25`.

 - It prints `May`.

 - It produces an error.

 - No output is displayed.

 - It prints `May is an adolescent human being.`.


/// type=SS, id=bf6acdcb-9b20-44a2-8d9e-dab7cce54550, answer=[5]

What is the error message?

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `autoload.php` on line number 4

 - Warning: `require_once(__DIR__ . /autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2
 
 - Fatal error: `require_once()`: Failed opening required `'/autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2

 - Uncaught LogicException: Function `'myAutoloader()'` not found (function 'myAutoloader()' not found or invalid function name) in `autoload.php` on line number 11


/// type=MS, id=32805955-48f1-45c1-881c-129545a8adcf, answer=[4,5]

Which statements correctly describe the error?

 - There is no argument specified in `myAutoloader()` on line 11 of `autoload.php`.

 - There is no semicolon `;` at the end of the statement on line 11 of `autoload.php`.

 - On line 11 of `autoload.php`, the argument `myAutoloader()` is enclosed in double quotes `""`.

 - On line 11 of `autoload.php`, the statement `spl_autoload_register("myAutoloader()");` is invalid.

 - There are parentheses `()` after `myAutoloader` in the statement `spl_autoload_register("myAutoloader()");` on line 11 of `autoload.php`.

:::


/// type=CR, id=d1a82401-b0f9-4112-8347-1e86fa77f727, answer=[tests/AutoloadingClasses/IncorrectSplRegisterArgumentTest.php], filename=[autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

Correct the code so that it outputs the string `May is an adolescent human being.`.

```php
<?php
function myAutoloader($className)
{
    $file = __DIR__ . '\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader()");
?>
```

```php
<?php
require_once(__DIR__ . "/autoload.php");

$student = new Student("May", 25);
$student->display();
?>
```

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
?>
``` 


:::

/// type=REPL, readonly=true, filename=[autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

```php
<?php
function myAutoloader($className)
{
    $file = __DIR__ . '\\' . $className . '.phph';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/autoload.php");

$student = new Student("May", 25);
$student->display();
?>
```

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
?>
```
/// type=SS, id=53ece4cf-cf8c-4d91-b74e-56f4ab7b6443, answer=[1]

Execute the program. What is the error message?

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `autoload.php` on line number 4

 - Warning: `require_once(__DIR__ . /autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2

 - Uncaught LogicException: Function `'myAutoloader()'` not found (function 'myAutoloader()' not found or invalid function name) in `autoload.php` on line number 11


/// type=MS, id=21a79fa9-a319-49f5-a7b6-7bfb31933277, answer=[2,5]

Which statements correctly describe the error?

 - There is an assignment operator `=` after `$file` on line 4 of `autoload.php`.

 - On line 4 of `autoload.php`, the file extension `.php` is misspelled as `.phph`.

 - There is no semicolon `;` at the end of the statement on line 4 of `autoload.php`.

 - There is no concatenation operator `.` between `$className` and `.phph` on line 4 of `autoload.php`.

 - On line 4 of `autoload.php`, the specified `.phph` file extension in the statement `$file = __DIR__ . '\\' . $className . '.phph';` is invalid.

:::


/// type=CR, id=d15d78b4-0a2f-4fec-a766-d82304f8496f, answer=[tests/AutoloadingClasses/IncorrectFileExtensionTest.php], filename=[autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

Correct the code so that it outputs the string `May is an adolescent human being.`.

```php
<?php
function myAutoloader($className)
{
    $file = __DIR__ . '\\' . $className . '.phph';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/autoload.php");

$student = new Student("May", 25);
$student->display();
?>
```

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
?>
```


:::

/// type=REPL, readonly=true, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

```php
<?php
function myAutoloader($class)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
?>
```

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
?>
```
/// type=MS, id=35888b3a-c585-4e19-a63a-52f71c6d9eb3, answer=[1,2]

Execute the program. What are the error messages?

 - Undefined variable: `className` in `autoload.php` on line number 4

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `autoload.php` on line number 4

 - Warning: `require_once(__DIR__ . /includes/autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./includes/autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2


/// type=MS, id=f49a2d77-f3f7-4742-a9e4-dc9d23185303, answer=[4,5]

Which statements correctly describe the error?

 - There is no parameter specified in the function declaration on line 2 of `autoload.php`. 

 - There is no semicolon `;` specified at the end of the statement on line 2 of `autoload.php`.

 - There is a dollar sign `$` that precedes the variable `className` on line 4 of `autoload.php`.

 - On line 2 of `autoload.php`, the parameter `$classname` in the function declaration `function myAutoloader($class)` is miswritten as `$class`. 

 - On line 4 of `autoload.php`, the variable `$className` in the statement `$file = dirname(__DIR__) . '\\src\\' . $className . '.php';` is not yet defined.

:::


/// type=CR, id=976c6c75-c3ec-42fd-b67a-b20025db12a6, answer=[tests/AutoloadingClasses/IncorrectVariableNameAsParameterTest.php], filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

Correct the code so that it outputs the string `Charles is an adolescent human being.`.

```php
<?php
function myAutoloader($class)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
?>
```

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
?>
```


:::

/// type=REPL, readonly=true, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/autoload.php");

$student = new Student("Charles", 15);
$student->display();
?>
```

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
?>
```
/// type=MS, id=291c332e-3e19-411f-8b3f-c909a76d7492, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `className` in `autoload.php` on line number 4

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `autoload.php` on line number 4

 - Warning: `require_once(./autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2


/// type=MS, id=5e95a810-7f1a-4018-b006-16727f3a05c8, answer=[2,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2 of `Main.php`.

 - On line 2 of `Main.php`, the statement `require_once(__DIR__ . "/autoload.php");` is invalid.

 - There is no argument specified in the `require_once()` function on line 2 of `Main.php`.

 - On line 2 of `Main.php`, the specified file path `./autoload.php` in `require_once(__DIR__ . "/autoload.php");` is incorrect.

 - There is no directory name `includes` specified in the statement `require_once(__DIR__ . "/autoload.php");` on line 2 of `Main.php`.

:::


/// type=CR, id=dc50b2e4-32be-45e3-948f-0a0e9192afea, answer=[tests/AutoloadingClasses/IncorrectDirectorySpecifiedInRequireTest.php], filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php

Correct the code so that it outputs the string `Charles is an adolescent human being.`.

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/autoload.php");

$student = new Student("Charles", 15);
$student->display();
?>
```

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
?>
```


:::

/// type=REPL, readonly=true, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DRI__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
?>
```

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
?>
```
/// type=SS, id=a3ed0fc6-bb4e-4ce4-9c38-306987bec62a, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `className` in `autoload.php` on line number 4

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `autoload.php` on line number 4

 - Warning: `require_once(./autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2


/// type=MS, id=0fb25381-6548-44c8-9015-71108f0858d6, answer=[1,2,5]

Which statements correctly describe the error?

 - On line 4 of `autoload.php`, the `__DIR__` magic constant is misspelled as `__DRI__`.

 - On line 4 of `autoload.php`, the specified argument `__DRI__` in `dirname()` is incorrect.

 - There is no assignment operator `=` between `$file` and `dirname()` on line 4 of `autoload.php`.

 - On line 4 of `autoload.php`, the specified argument `__DRI__` in `dirname()` is not enclosed in double quotes `""`.

 - On line 4 of `autoload.php`, the statement `$file = dirname(__DRI__) . '\\src\\' . $className . '.php';` is invalid.

:::


/// type=CR, id=29ff363f-13a9-491f-a54c-89338baeecd1, answer=[tests/AutoloadingClasses/MisspelledDirConstantTest.php], filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

Correct the code so that it outputs the string `Charles is an adolescent human being.`.

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DRI__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myAutoloader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
?>
```

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
?>
```


:::

/// type=REPL, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

function myShapesLoader($shapeClass)
{
    $file = dirname(__DIR__) . '\\Shapes\\' . $shapeClass . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    } 
}

spl_autoload_register("myAutoloader");
spl_autoload_register("myShapesLoader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>
```

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
?>
```

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}
?>
```
/// type=SS, id=32c415cc-cab8-47bd-a4e4-2ff98c58dca7, answer=[3]

Execute the program. What is printed on line 3?

 - `Radius: 2.5`

 - `Area: 19.635`

 - `Diameter: 6.25`

 - `Circumference: 15.708`

 - `Charles is an adolescent human being.`


/// type=SS, id=34e542fc-5af4-43a7-b195-7fbec376e503, answer=[2]

In the statement `$file = dirname(__DIR__) . '\\Shapes\\' . $shapeClass . '.php';` on line 13 of `autoload.php`, replace `Shapes` with `Circle`. Execute the program. What is the error message?

 - Undefined variable: `className` in `autoload.php` on line number 4

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `myAutoloader` - assumed `'myAutoloader'` in `autoload.php` on line number 20

 - Warning: `require_once(./autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

:::


:::

/// type=REPL, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

```php
<?php
function myAutoloader($className)
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

function myShapesLoader($shapeClass)
{
    $file = dirname(__DIR__) . '\\Circle\\' . $shapeClass . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    } 
}

spl_autoload_register("myAutoloader");
spl_autoload_register("myShapesLoader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>
```

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
?>
```

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}
?>
```
/// type=MS, id=cf3dd233-996e-4567-9f30-0738a3a44686, answer=[1,3]

On line 2 of `autoload.php`, remove the parameter `$className` from `function myAutoloader($className)`. Execute the program. What are the error messages?

 - Undefined variable: `className` in `autoload.php` on line number 4

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `myAutoloader` - assumed `'myAutoloader'` in `autoload.php` on line number 20

 - Warning: `require_once(./autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

:::


:::

/// type=REPL, filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

```php
<?php
function myAutoloader()
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

function myShapesLoader($shapeClass)
{
    $file = dirname(__DIR__) . '\\Circle\\' . $shapeClass . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    } 
}

spl_autoload_register("myAutoloader");
spl_autoload_register("myShapesLoader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>
```

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
?>
```

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}
?>
```
/// type=MS, id=ada6dccc-50ff-494e-a96b-d8ed8541d589, answer=[1,3,4]

Remove the double quotes `""` from the statement `spl_autoload_register("myAutoloader");` on line 20 of `autoload.php`. Execute the program. What are the error messages?

 - Undefined variable: `className` in `autoload.php` on line number 4

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `myAutoloader` - assumed `'myAutoloader'` in `autoload.php` on line number 20

 - Warning: `require_once(./autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

:::


/// type=CR, id=736883b2-7abb-4f89-a14b-65d377aa0484, answer=[tests/AutoloadingClasses/CorrectMultipleErrorsTest.php], filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

Correct the code so that it outputs the strings `Charles is an adolescent human being.`, `Radius: 2.5`, `Diameter: 6.25`, `Area: 19.635`, and `Circumference: 15.708` in separate lines.

```php
<?php
function myAutoloader()
{
    $file = dirname(__DIR__) . '\\src\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

function myShapesLoader($shapeClass)
{
    $file = dirname(__DIR__) . '\\Circle\\' . $shapeClass . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    } 
}

spl_autoload_register(myAutoloader);
spl_autoload_register("myShapesLoader");
?>
```

```php
<?php
require_once(__DIR__ . "/includes/autoload.php");

$student = new Student("Charles", 15);
$student->display();
echo "\n";
$circ = new Circle(2.5);
$circ->display();
?>
```

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
?>
```

```php
<?php
abstract class CircularShape
{
    const PI = 3.1416;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    abstract public function diameter();
    abstract public function area();
    abstract public function circumference();
}
?>
```

```php
<?php
class Circle extends CircularShape
{
    public function area()
    {
        return self::PI * $this->getRadius() * $this->getRadius();
    }
    
    public function diameter()
    {
        return $this->getRadius() * $this->getRadius();
    }
    
    public function circumference()
    {
        return 2 * self::PI * $this->getRadius();
    }
    
    public function display()
    {
        echo "Radius: " . $this->getRadius();
        echo "\nDiameter: " . $this->diameter();
        echo "\nArea: " . $this->area();
        echo "\nCircumference: " . $this->circumference(); 
    }
}
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=18b1416a-678c-4568-a7df-60d12ac41a87, answer=[tests/AutoloadingClasses/CreateAutoloaderFunctionTest.php], filename=[includes/autoload.php,Main.php,src/LifeCycle.php,src/Animal.php,src/Mammal.php]

Given the classes and interface implementations, write a program that uses the `spl_autoload_register()` function to register a certain autoloader. In the `autoload.php` tab, create an autoloader function named `myAnimalAutoloader` with the parameter `$animal`. Inside the `myAnimalAutoloader()` function body, add a statement that assigns `$file = dirname(__DIR__) . '\\src\\' . $animal . '.php';` to the variable `$file`. Then, add another statement that assigns `str_replace('\\', DIRECTORY_SEPARATOR, $file)` to `$file`. Next, add an `if` statement that checks if `$file` exists. Inside the `if` block, add the statement `require_once($file);`. After the `myAnimalAutoloader()` function, add a statement that registers the autoloader function `myAnimalAutoloader` using the `spl_autoload_register()` function. In the `Main.php` tab, add the statement `require_once(__DIR__ . "/includes/autoload.php");`. Then, add a statement that creates the `$petMammal` object an instance of the `Mammal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$petMammal` object. Run the program to view the output.

```php
<?php
// autoload.php code here...


?>
```

```php
<?php
// Main.php code here...


?>
```

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
class Mammal extends Animal implements LifeCycle
{
    public function species()
    {
        return "animal";
    }

    public function stage()
    {
        return "adult";
    }

    public function display()
    {
        echo "The " . parent::getType() . " is an " . $this->stage() . " " . $this->species() . ".";
    }
}
?>
```

+++
