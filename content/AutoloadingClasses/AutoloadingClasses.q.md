# Autoloading Classes

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[Autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

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
require_once("./Autoload.php");

$sudentObject = new Student("May", 25);
$sudentObject->display();
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
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `25`.

 - It prints `May`.

 - It produces an error.

 - No output is displayed.

 - It prints `May is an adolescent human being.`.


/// type=SS, answer=[5]

In the statement `$file = __DIR__ . '\\' . $className . '.php';` on line 4 of `Autoload.php`, what is `__DIR__`?

 - It is a value.

 - It is a string.

 - It is a function.

 - It is a keyword.

 - It is a magic constant.


/// type=SS, answer=[4]

In the statement `$file = __DIR__ . '\\' . $className . '.php';` on line 4 of `Autoload.php`, what is `.php`?

 - It is the file path separator.

 - It is the value to search for.

 - It is the name of the class to search for.

 - It is the string that specifies the file extension.

 - It the name of the directory where the class is located.


/// type=SS, answer=[5]

Which statement best describes `$file = __DIR__ . '\\' . $className . '.php';` on line 4 of `Autoload.php`?

 - It returns all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It displays all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It accesses all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It evaluates all the class files in `__DIR__` with the specified `$className` and `.php` extensions.

 - It assigns all the class files in `__DIR__` with the specified `$className` and `.php` extensions to `$file`.


/// type=SS, answer=[4]

In the statement `$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);` on line 5 of `Autoload.php`, what is `str_replace()`?

 - It is a value.

 - It is a string.

 - It is a keyword.

 - It is a built-in function.

 - It is a predefined constant.


/// type=SS, answer=[5]

In the statement `$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);` on line 5 of `Autoload.php`, what is `DIRECTORY_SEPARATOR`?

 - It is a value.

 - It is a string.

 - It is a keyword.

 - It is a built-in function.

 - It is a predefined constant.


/// type=SS, answer=[3]

Which statement best describes `str_replace('\\', DIRECTORY_SEPARATOR, $file)` on line 5 of `Autoload.php`?

 - It accesses `\` of the predefined constant `DIRECTORY_SEPARATOR` in `$file`.

 - It displays the predefined constant `DIRECTORY_SEPARATOR` with `\` in `$file`.

 - It replaces the predefined constant `DIRECTORY_SEPARATOR` with `\` in `$file`.

 - It evaluates the predefined constant `DIRECTORY_SEPARATOR` and `\` in `$file`.

 - It removes the predefined constant `DIRECTORY_SEPARATOR` and `\` from `$file`.


/// type=MS, answer=[4,5]

Which statements correctly describe the `myAutoloader()` function of `Autoload.php`?

 - It defines the `Autoload` class.

 - It accesses several autoload functions.

 - It sets the value of the autoloader class files.

 - It automatically loads the specified class files.

 - It is an autoloader function that accepts an argument.


/// type=SS, answer=[1]

In the statement `spl_autoload_register("myAutoloader");` on line 11 of `Autoload.php`, what is `myAutoloader`?

 - It is the function that automatically loads the specified class files.

 - It is the parameter that automatically loads the specified class files.

 - It is the keyword that automatically creates the autoload class files.

 - It is the constant that automatically creates the specified class files.

 - It is the command that automatically sets the value of the autoloader class files.


/// type=SS, answer=[5]

In the statement `spl_autoload_register("myAutoloader");` on line 11 of `Autoload.php`, what does `spl_autoload_register()` do?

 - It removes the `myAutoloader()` autoload function.

 - It displays the `myAutoloader()` autoload function.

 - It declares the `myAutoloader()` autoload function.

 - It accesses the `myAutoloader()` autoload function.

 - It registers the `myAutoloader()` autoload function.


/// type=SS, answer=[5]

Which statement best describes `spl_autoload_register("myAutoloader");` on line 11 of `Autoload.php`?

 - It removes the `myAutoloader()` autoload function.

 - It displays the `myAutoloader()` autoload function.

 - It declares the `myAutoloader()` autoload function.

 - It accesses the `myAutoloader()` autoload function.

 - It registers the `myAutoloader()` autoload function.


/// type=SS, answer=[3]

Which statement best describes `require_once("./Autoload.php");` on line 2 of `Main.php`?

- It updates the file `Autoload.php`.

- It establishes a relationship between classes.

- It includes the file `Autoload.php` in the file `Main.php`.

- It removes the file `Autoload.php` in the file `Main.php`.

- It excludes the file `Autoload.php` in the file `Main.php`.

:::


:::

/// type=REPL, readonly=true, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `Charles`.

 - It produces an error.

 - No output is displayed.

 - It prints `Charles is an adolescent human being.`.


/// type=SS, answer=[5]

Which of the following is an autoloader?

 - `stage()`

 - `species()`

 - `display()`

 - `__construct()`

 - `myAutoloader()`


/// type=SS, answer=[2]

Which of the following is a magic constant?

 - `src`

 - `__DIR__`

 - `dirname()`

 - `$classname`

 - `DIRECTORY_SEPARATOR`


/// type=SS, answer=[5]

Which of the following is a predefined constant?

 - `src`

 - `__DIR__`

 - `dirname()`

 - `$classname`

 - `DIRECTORY_SEPARATOR`


/// type=SS, answer=[1]

In the statement `$file = dirname(__DIR__) . '\\src\\' . $className . '.php';` on line 4 of `Autoload.php`, what does `dirname(__DIR__)` do?

 - It returns the path of the parent directory `__DIR__`.

 - It removes the path of the parent directory `__DIR__`.

 - It accesses the path of the parent directory `__DIR__`.

 - It displays the path of the parent directory `__DIR__`.

 - It evaluates the path of the parent directory `__DIR__`.


/// type=SS, answer=[5]

In the statement `$file = dirname(__DIR__) . '\\src\\' . $className . '.php';` on line 4 of `Autoload.php`, what does `\\src\\` indicate?

 - The name of the class file in the directory.

 - The extension of the class file to search for.

 - The root directory of the specified class file.

 - The location where the autoloader function islocated.

 - The specific directory name where the class file is located.


/// type=SS, answer=[5]

Which statement best describes the code on line 4 of `Autoload.php`?

 - It returns all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It displays all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It accesses all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It evaluates all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions.

 - It assigns all the class files in `__DIR__` with the specified directory name `src`, `$className` and `.php` extensions to `$file`.


/// type=SS, answer=[3]

Which statement best describes `require_once("./autoloader/Autoload.php");` on line 2 of `Main.php`?

- It updates the file `Autoload.php`.

- It establishes a relationship between classes.

- It includes the file `Autoload.php` in the file `Main.php`.

- It removes the file `Autoload.php` in the file `Main.php`.

- It excludes the file `Autoload.php` in the file `Main.php`.

:::


:::

/// type=REPL, readonly=true, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=SS, answer=[1]

Execute the program. What is printed on line 2?

 - `Radius: 2.5`

 - `Area: 19.635`

 - `Diameter: 6.25`

 - `Circumference: 15.708`

 - `Charles is an adolescent human being.`


/// type=MS, answer=[3,5]

Which of the following are autoloaders?

 - `area()`

 - `getRadius()`

 - `myAutoloader()`

 - `circumference()`

 - `myShapesAutoloader()`


/// type=MS, answer=[4,5]

Which statements correctly describe the `myShapesLoader()` function of `Autoload.php`?

 - It defines the `Autoload` class.

 - It accesses several autoload functions.

 - It sets the value of the autoloader class files.

 - It is an autoloader function that accepts an argument.

 - It automatically loads the specified class files in `Shapes` directory.


/// type=SS, answer=[5]

Which statement best describes the code on line 20 of `Autoload.php`?

 - It displays the `myAutoloader()` autoload function.

 - It removes the `myAutoloader()` autoload function.

 - It declares the `myAutoloader()` autoload function.

 - It accesses the `myAutoloader()` autoload function.

 - It registers the `myAutoloader()` autoload function.


/// type=SS, answer=[3]

Which statement best describes `spl_autoload_register("myShapesLoader");` on line 21 of `Autoload.php`?

 - It displays the `myShapesLoader()` autoload function.

 - It removes the `myShapesLoader()` autoload function.

 - It registers the `myShapesLoader()` autoload function.

 - It declares the `myShapesLoader()` autoload function.

 - It accesses the `myShapesLoader()` autoload function.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[5]

Which statement best describes autoloading?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, answer=[1]

Which statement best describes the `spl_autoload_register()` function?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, answer=[3]

Which statement is true about an autoloader?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, answer=[4]

Which statement is true about the `__DIR__` magic constant?

 - It is used to register several autoloader functions.

 - It is used to return the path of a parent directory.

 - It is a function that automatically loads the specified class files.

 - It specifies the path that starts from the directory where the autoloader is located.

 - It is a way of automatically loading classes and interfaces that are currently not defined.


/// type=SS, answer=[2]

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

/// type=REPL, readonly=true, filename=[Autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

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
require_once("./Autoload.php");

$sudentObject = new Student("May", 25);
$sudentObject->display();
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
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `25`.

 - It prints `May`.

 - It produces an error.

 - No output is displayed.

 - It prints `May is an adolescent human being.`.


/// type=SS, answer=[5]

What is the error message?

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `Autoload.php` on line number 4

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./Autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2

 - Uncaught LogicException: Function `'myAutoloader()'` not found (function 'myAutoloader()' not found or invalid function name) in `Autoload.php` on line number 11


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no argument specified in `myAutoloader()` on line 11 of `Autoload.php`.

 - There is no semicolon `;` at the end of the statement on line 11 of `Autoload.php`.

 - On line 11 of `Autoload.php`, the argument `myAutoloader()` is enclosed in double quotes `""`.

 - On line 11 of `Autoload.php`, the statement `spl_autoload_register("myAutoloader()");` is invalid.

 - There are parentheses `()` after `myAutoloader` in the statement `spl_autoload_register("myAutoloader()");` on line 11 of `Autoload.php`.

:::


/// type=CR, answer=[tests/AutoloadingClasses/IncorrectSplRegisterArgumentTest.php], filename=[Autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

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
require_once("./Autoload.php");

$sudentObject = new Student("May", 25);
$sudentObject->display();
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

/// type=REPL, readonly=true, filename=[Autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

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
require_once("./Autoload.php");

$sudentObject = new Student("May", 25);
$sudentObject->display();
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
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `Autoload.php` on line number 4

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./Autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2

 - Uncaught LogicException: Function `'myAutoloader()'` not found (function 'myAutoloader()' not found or invalid function name) in `Autoload.php` on line number 11


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - There is an assignment operator `=` after `$file` on line 4 of `Autoload.php`.

 - On line 4 of `Autoload.php`, the file extension `.php` is misspelled as `.phph`.

 - There is no semicolon `;` at the end of the statement on line 4 of `Autoload.php`.

 - There is no concatenation operator `.` between `$className` and `.phph` on line 4 of `Autoload.php`.

 - On line 4 of `Autoload.php`, the specified `.phph` file extension in the statement `$file = __DIR__ . '\\' . $className . '.phph';` is invalid.

:::


/// type=CR, answer=[tests/AutoloadingClasses/IncorrectFileExtensionTest.php], filename=[Autoload.php,Main.php,LifeCycle.php,Person.php,Student.php]

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
require_once("./Autoload.php");

$sudentObject = new Student("May", 25);
$sudentObject->display();
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

/// type=REPL, readonly=true, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=MS, answer=[1,2]

Execute the program. What are the error messages?

 - Undefined variable: `className` in `Autoload.php` on line number 4

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `Autoload.php` on line number 4

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./Autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no parameter specified in the function declaration on line 2 of `Autoload.php`. 

 - There is no semicolon `;` specified at the end of the statement on line 2 of `Autoload.php`.

 - There is a dollar sign `$` that precedes the variable `className` on line 4 of `Autoload.php`.

 - On line 2 of `Autoload.php`, the parameter `$classname` in the function declaration `function myAutoloader($class)` is miswritten as `$class`. 

 - On line 4 of `Autoload.php`, the variable `$className` in the statement `$file = dirname(__DIR__) . '\\src\\' . $className . '.php';` is not yet defined.

:::


/// type=CR, answer=[tests/AutoloadingClasses/IncorrectVariableNameAsParameterTest.php], filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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

/// type=REPL, readonly=true, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

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
require_once("./Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=MS, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `className` in `Autoload.php` on line number 4

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `Autoload.php` on line number 4

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./Autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2


/// type=MS, answer=[2,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2 of `Main.php`.

 - On line 2 of `Main.php`, the statement `require_once("./Autoload.php");` is invalid.

 - There is no argument specified in the `require_once()` function on line 2 of `Main.php`.

 - On line 2 of `Main.php`, the specified file path `./Autoload.php` in `require_once("./Autoload.php");` is incorrect.

 - There is no directory name `autoloader` specified in the statement `require_once("./Autoload.php");` on line 2 of `Main.php`.

:::


/// type=CR, answer=[tests/AutoloadingClasses/IncorrectDirectorySpecifiedInRequireTest.php], filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

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
require_once("./Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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

/// type=REPL, readonly=true, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `className` in `Autoload.php` on line number 4

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `__DRI__` - assumed `'__DRI__'` in `Autoload.php` on line number 4

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

 - Fatal error: `require_once()`: Failed opening required `'./Autoload.php'` (include_path='C:\xampp\php\PEAR') in `Main.php` on line number 2


/// type=MS, answer=[1,2,5]

Which statements correctly describe the error?

 - On line 4 of `Autoload.php`, the `__DIR__` magic constant is misspelled as `__DRI__`.

 - On line 4 of `Autoload.php`, the specified argument `__DRI__` in `dirname()` is incorrect.

 - There is no assignment operator `=` between `$file` and `dirname()` on line 4 of `Autoload.php`.

 - On line 4 of `Autoload.php`, the specified argument `__DRI__` in `dirname()` is not enclosed in double quotes `""`.

 - On line 4 of `Autoload.php`, the statement `$file = dirname(__DRI__) . '\\src\\' . $className . '.php';` is invalid.

:::


/// type=CR, answer=[tests/AutoloadingClasses/MisspelledDirConstantTest.php], filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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

/// type=REPL, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=SS, answer=[3]

Execute the program. What is printed on line 3?

 - `Radius: 2.5`

 - `Area: 19.635`

 - `Diameter: 6.25`

 - `Circumference: 15.708`

 - `Charles is an adolescent human being.`


/// type=SS, answer=[2]

In the statement `$file = dirname(__DIR__) . '\\Shapes\\' . $shapeClass . '.php';` on line 13 of `Autoload.php`, replace `Shapes` with `Circle`. Execute the program. What is the error message?

 - Undefined variable: `className` in `Autoload.php` on line number 4

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `myAutoloader` - assumed `'myAutoloader'` in `Autoload.php` on line number 20

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

:::


:::

/// type=REPL, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=MS, answer=[1,3]

On line 2 of `Autoload.php`, remove the parameter `$className` from `function myAutoloader($className)`. Execute the program. What are the error messages?

 - Undefined variable: `className` in `Autoload.php` on line number 4

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `myAutoloader` - assumed `'myAutoloader'` in `Autoload.php` on line number 20

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

:::


:::

/// type=REPL, filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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
/// type=MS, answer=[1,3,4]

Remove the double quotes `""` from the statement `spl_autoload_register("myAutoloader");` on line 20 of `Autoload.php`. Execute the program. What are the error messages?

 - Undefined variable: `className` in `Autoload.php` on line number 4

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - Uncaught Error: Class `'Student'` not found in `Main.php` on line number 4

 - Use of undefined constant `myAutoloader` - assumed `'myAutoloader'` in `Autoload.php` on line number 20

 - Warning: `require_once(./Autoload.php)`: failed to open stream: No such file or directory in `Main.php` on line number 2

:::


/// type=CR, answer=[tests/AutoloadingClasses/CorrectMultipleErrorsTest.php], filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Person.php,src/Student.php,Shapes/CircularShape.php,Shapes/Circle.php]

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
require_once("./autoloader/Autoload.php");

$sudentObject = new Student("Charles", 15);
$sudentObject->display();
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

/// type=CR, answer=[tests/AutoloadingClasses/CreateAutoloaderFunctionTest.php], filename=[autoloader/Autoload.php,Main.php,src/LifeCycle.php,src/Animal.php,src/Mammal.php]

Given the classes and interface implementations, write a program that uses the `spl_autoload_register()` function to register a certain autoloader. In the `Autoload.php` tab, create an autoloader function named `myAnimalAutoloader` with the parameter `$animal`. Inside the `myAnimalAutoloader()` function body, add a statement the assigns `$file = dirname(__DIR__) . '\\src\\' . $animal . '.php';` to the variable `$file`. Then, add another statement that assigns `str_replace('\\', DIRECTORY_SEPARATOR, $file)` to `$file`. Next, add an `if` statement that checks if `$file` exists. Inside the `if` block, add the statement `require_once($file);`. After the `myAnimalAutoloader()` function, add a statement that registers the autoloader function `myAnimalAutoloader` using the `spl_autoload_register()` function. In the `Main.php` tab, add the statement `require_once("./autoloader/Autoload.php");`. Then, add a statement that creates the `$petMammal` object an instance of the `Mammal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$petMammal` object. Run the program to view the output.

```php
<?php
// Autoload.php code here...


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
