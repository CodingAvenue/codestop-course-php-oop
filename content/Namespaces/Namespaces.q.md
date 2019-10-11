# Namespaces

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

$user = new App\User();

?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in App namespace.`.

 - It prints `This is a user in App\Model namespace.`.

 - It prints `This is a user in App namespace.` and `This is a user in App\Model namespace.` in separate lines.


/// type=SS, answer=[4]

In the statement `namespace App;` on line 2 of `UserApp.php`, what is `namespace`?

 - It is a value.

 - It is a method.

 - It is a string.

 - It is a keyword.

 - It is a namespace name.


/// type=SS, answer=[5]

In the statement `namespace App;` on line 2 of `UserApp.php`, what is `App`?

 - It is a value.

 - It is a method.

 - It is a string.

 - It is a keyword.

 - It is a namespace name.


/// type=SS, answer=[1]

Which statement best describes `namespace App;`?

 - It defines the `App` namespace.

 - It imports the `App` namespace.

 - It removes the `App` namespace.

 - It includes the `App` namespace.

 - It displays the `App` namespace.


/// type=SS, answer=[4]

In the statement `namespace App\Model;` on line 2 of `UserModel.php`, what is `App\Model`?

 - It is a class.

 - It is a directory.

 - It is an operator.

 - It is a nested namespace.

 - It is a namespace and class.


/// type=SS, answer=[3]

What does the statement `namespace App\Model;` do?

 - It assigns the `Model` namespace to the `App` namespace.

 - It removes the `Model` namespace from the `App` namespace.

 - It defines the `Model` namespace inside the `App` namespace.

 - It imports the `Model` namespace inside the `App` namespace.

 - It accesses the `Model` namespace inside the `App` namespace.


/// type=SS, answer=[3]

Which statement best describes `require_once("./UserApp.php");` on line 2 of `Main.php`?

- It updates the file `UserApp.php`.

- It establishes a relationship between classes.

- It includes the file `UserApp.php` in the file `Main.php`.

- It removes the file `UserApp.php` in the file `Main.php`.

- It excludes the file `UserApp.php` in the file `Main.php`.


/// type=MS, answer=[3,5]

Which statements correctly describe `$user = new App\User();` on line 4 of `Main.php`?

 - It assigns `App\User()` to `$user`.

 - It sets the value of `$user` to `App\User()`.

 - It creates the `$user` instance of the `User` class in the `App` namespace.

 - It evaluates the `$user` object of the `User` class in the `App` namespace.

 - It instantiates the `$user` object of the `User` class in the `App` namespace.

:::


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

use App\User;

$user = new User();

?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in App namespace.`.

 - It prints `This is a user in App\Model namespace.`.

 - It prints `This is a user in App namespace.` and `This is a user in App\Model namespace.` in separate lines.


/// type=MS, answer=[2,4]

Which of the following are namespace definitions?

 - `use App\User;`

 - `namespace App;`

 - `class User {...}`

 - `namespace App\Model;`

 - `require_once("./UserApp.php");`


/// type=SS, answer=[4]

In the statement `use App\User;` on line 4 of `Main.php`, what is `use`?

 - It is a value.

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is an operator.


/// type=SS, answer=[3]

Which statement best describes `use App\User;` on line 4 of `Main.php`?

 - It calls the `User` class in the `App` namespace.

 - It defines the `User` class in the `App` namespace.

 - It imports the `User` class in the `App` namespace.

 - It removes the `User` class in the `App` namespace.

 - It displays the `User` class in the `App` namespace.

:::


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserModel.php");

use App\Model\User as newUser;

$user = new newUser();

?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in App namespace.`.

 - It prints `This is a user in App\Model namespace.`.

 - It prints `This is a user in App namespace.` and `This is a user in App\Model namespace.` in separate lines.


/// type=MS, answer=[1,3]

Which of the following are namespaces?

 - `App`

 - `User`

 - `Model`

 - `NewUser`

 - `UserModel`


/// type=SS, answer=[4]

In the statement `use App\Model\User as newUser;` on line 4 of `Main.php`, what is `as`?

 - It is a value.

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is an operator.


/// type=SS, answer=[5]

In the statement `use App\Model\User as newUser;` on line 4 of `Main.php`, what is `newUser`?

 - It is a class.

 - It is a method.

 - It is an object.

 - It is a namespace.

 - It is an alias of the imported class `User`.


/// type=SS, answer=[3]

Which statement best describes `use App\Model\User as newUser;` on line 4 of `Main.php`?

 - It calls the `User` class in the `App\Model` namespace with the alias `newUser`.

 - It defines the `User` class in the `App\Model` namespace with the alias `newUser`.

 - It imports the `User` class in the `App\Model` namespace with the alias `newUser`.

 - It removes the `User` class in the `App\Model` namespace with the alias `newUser`.

 - It displays the `User` class in the `App\Model` namespace with the alias `newUser`.

:::


:::

/// type=REPL, readonly=true, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

use Math\Constants;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Math.php');

use Math\Geometry;

echo "The area of the circle is: " . Geometry::getCircleArea(10);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `314`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314`.


/// type=SS, answer=[3]

Which of the following is a constant declaration?

 - `namespace Math`

 - `public $radius;`

 - `const PI = 3.14159;`

 - `use Math\Constants;`

 - `namespace Math\Geometry;`


/// type=SS, answer=[4]

Which of the following is a static function?

 - `Math`

 - `$radius`

 - `__construct()`

 - `getCircleArea()`

 - `getCircumference()`


/// type=MS, answer=[4,5]

Which classes are items of the `Math` namespace?

 - `PI`

 - `Circle`

 - `$radius`
 
 - `Geometry`

 - `Constants`


/// type=MS, answer=[1,5]

Which of the following are namespace definitions?

 - `namespace Math`

 - `public $radius;`

 - `const PI = 3.14159;`

 - `use Math\Constants;`

 - `namespace Math\Geometry;`


/// type=SS, answer=[5]

Which of the following is a nested namespace definition?

 - `namespace Math`

 - `public $radius;`

 - `const PI = 3.14159;`

 - `use Math\Constants;`

 - `namespace Math\Geometry;`


/// type=SS, answer=[3]

Which statement best describes `namespace Math\Geometry;`?

 - It assigns the `Geometry` namespace to the `Math` namespace.

 - It removes the `Geometry` namespace from the `Math` namespace.

 - It defines the `Geometry` namespace inside the `Math` namespace.

 - It imports the `Geometry` namespace inside the `Math` namespace.

 - It accesses the `Geometry` namespace inside the `Math` namespace.


/// type=SS, answer=[3]

Which statement best describes `use Math\Constants;`?

 - It calls the `Constants` class in the `Math` namespace.

 - It defines the `Constants` class in the `Math` namespace.

 - It imports the `Constants` class in the `Math` namespace.

 - It removes the `Constants` class in the `Math` namespace.

 - It displays the `Constants` class in the `Math` namespace.


/// type=SS, answer=[3]

Which statement best describes `Geometry::getCircleArea(10)` on line 6 of `Main.php`?

 - It removes the argument `10` from the `getCircleArea()` method of the `Geometry` class.

 - It removes the static method `getCircleArea()` with the parameter `10` of the `Geometry` class.

 - It calls the static method `getCircleArea()` passing the argument `10` outside the `Geometry` class.

 - It creates the static method `getCircleArea()` with the parameter `10` outside the `Geometry` class.

 - It defines the static method `getCircleArea()` with the parameter `10` outside the `Geometry` class.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

use Math\Constants;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Math.php');

use Math\Geometry;

echo "The area of the circle is: " . Geometry::getCircleArea(10);
?>
```
/// type=SS, answer=[3]

Remove the statement `use Math\Geometry;` on line 4 of `Main.php`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `314`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

use Math\Constants;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Math.php');

echo "The area of the circle is: " . Geometry::getCircleArea(10);
?>
```
/// type=SS, answer=[5]

On line 4 of `Main.php`, replace `Geometry::getCircleArea(10)` with `Math\Geometry::getCircleArea(10)`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `314`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

use Math\Constants;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Constants.php');
require_once('./Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.


/// type=SS, answer=[3]

On line 5 of `Main.php`, remove `as NewCircle` from the statement `use Math\Geometry\Circle as NewCircle;`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

use Math\Constants;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Constants.php');
require_once('./Circle.php');

use Math\Geometry\Circle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, answer=[5]

In the statement `$circle = new NewCircle(10);` on line 7 of `Main.php`, replace `NewCircle(10)` with `Circle(10)`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[2,5]

Which statements correctly describe a namespace?

 - It is a process of creating a new object of a class.

 - It is referred to as a virtual directory for a class in a global space.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a relationship between classes that enables a child class to inherit the properties and methods of its parent class.

 - It is a process of organizing related classes, interfaces, functions, and constants into logical groups to prevent name conflicts.


/// type=SS, answer=[1]

Which statement best describes the `namespace` keyword?

 - It defines a namespace.

 - It creates an alias of the imported class.

 - It creates an object as an instance of a class.

 - It imports namespaces and classes to a current PHP file.

 - It defines a relationship between a child class and its parent class.


/// type=SS, answer=[4]

Which statement is true about the `use` keyword?

 - It defines a namespace.

 - It creates an alias of the imported class.

 - It creates an object as an instance of a class.

 - It imports namespaces and classes to a current PHP file.

 - It defines a relationship between a child class and its parent class.


/// type=SS, answer=[2]

What does the `as` keyword do?

 - It defines a namespace.

 - It creates an alias of the imported class.

 - It creates an object as an instance of a class.

 - It imports namespaces and classes to a current PHP file.

 - It defines a relationship between a child class and its parent class.

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

$user = new User();

?>
```
/// type=SS, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in App namespace.`.

 - It prints `This is a user in App\Model namespace.`.

 - It prints `This is a user in App namespace.` and `This is a user in App\Model namespace.` in separate lines.


/// type=SS, answer=[1]

What is the error message?

 - Uncaught Error: Class `'User'` not found in `Main.php` on line number 4

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `Main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `Main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `Main.php` on line number 4


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 4 of `Main.php`, the statement `$user = new User();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 4 of `Main.php`.

 - On line 2 of `Main.php`, the statement `require_once("./UserApp.php");` is invalid.

 - There is no argument specified in the `require_once()` method on line 2 of `Main.php`.

 - There is no namespace specified in the statement `$user = new User();` on line 4 of `Main.php`.

:::


/// type=CR, answer=[tests/Namespaces/UnspecifiedUserClassNamespaceTest.php], filename=[UserApp.php,UserModel.php,Main.php]

Correct the code so that it outputs the string `This is a user in App namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

$user = new User();

?>
``` 


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

use App;

$user = new User();

?>
```
/// type=MS, answer=[1,5]

Execute the program. What are the error messages?

 - Uncaught Error: Class `'User'` not found in `Main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `Main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `Main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `Main.php` on line number 4


/// type=MS, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 4 of `Main.php`, the statement `use App;` is invalid.

 - There is no `App` namespace defined in the file `UserApp.php`.

 - There is no `as` keyword specified after `App` on line 4 of `Main.php`.

 - On line 4 of `Main.php`, the statement `use App\User;` is miswritten as `use App;`.

 - There is no `User` class specified in the statement `use App;` on line 4 of `Main.php`.

:::


/// type=CR, answer=[tests/Namespaces/IncorrectUseStatementTest.php], filename=[UserApp.php,UserModel.php,Main.php]

Correct the code so that it outputs the string `This is a user in App namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

use App;

$user = new User();

?>
```


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

 App\User;

$user = new User();

?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Uncaught Error: Class `'User'` not found in `Main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `Main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `Main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `Main.php` on line number 4


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 4 of `Main.php`, the statement `App\User;` is invalid.

 - There is no `App` namespace defined in the file `UserApp.php`.

 - There is a backslash `\` between `App` and `User` on line 4 of `Main.php.`

 - There is no `as` keyword specified after `App\User` on line 4 of `Main.php`.

 - There is no `use` keyword specified before `App\User;` on line 4 of `Main.php`.

:::


/// type=CR, answer=[tests/Namespaces/MissingUseKeywordTest.php], filename=[UserApp.php,UserModel.php,Main.php]

Correct the code so that it outputs the string `This is a user in App namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserApp.php");

 App\User;

$user = new User();

?>
```


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserModel.php");

use App\Model\User as NewModel;

$user = new User();

?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Uncaught Error: Class `'User'` not found in `Main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `Main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `Main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `Main.php` on line number 4


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is a backslash `\` between `App` and `Model` on line 4 of `Main.php.`

 - There is no `App\Model` namespace defined in the file `UserModel.php`.

 - On line 6 of `Main.php`, the statement `$user = new User();` is invalid.

 - There is no `as` keyword specified after `App\Model\User` on line 4 of `Main.php`.

 - The `User` class in the `App\Model` namespace is aliased as `NewModel` on line 4 of `Main.php`

:::


/// type=CR, answer=[tests/Namespaces/UnusedUserAliasTest.php], filename=[UserApp.php,UserModel.php,Main.php]

Correct the code so that it outputs the string `This is a user in App\Model namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserModel.php");

use App\Model\User as NewModel;

$user = new User();

?>
```


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,Main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserModel.php");

use App\Model\User  NewModel;

$user = new NewModel();

?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Uncaught Error: Class `'User'` not found in `Main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `Main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `Main.php` on line number 4

 - syntax error, unexpected `'NewModel'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `Main.php` on line number 4


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 4 of `Main.php`.

 - On line 6 of `Main.php`, the statement `$user = new NewModel();` is invalid.

 - There is no `use` keyword specified before `App\Model\User` on line 4 of `Main.php`.

 - On line 4 of `Main.php`, the statement `use App\Model\User  NewModel;` is invalid.

 - There is no `as` keyword specified after `App\Model\User` and `NewModel` on line 4 of `Main.php`.

:::


/// type=CR, answer=[tests/Namespaces/MissingAsKeywordTest.php], filename=[UserApp.php,UserModel.php,Main.php]

Correct the code so that it outputs the string `This is a user in App\Model namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in App namespace.";
    }
}
?>
```

```php
<?php
namespace App\Model;

class User
{
    public function __construct()
    {
        echo "This is a user in App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once("./UserModel.php");

use App\Model\User  NewModel;

$user = new NewModel();

?>
```


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

use Math\Constants;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Constants.php');
require_once('./Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.


/// type=SS, answer=[4]

Remove the statement `use Math\Constants;` on line 4 of `Circle.php`. Execute the program. What is the error message?

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - syntax error, unexpected `'$circle'` (T_VARIABLE) in `Main.php` on line number 7

 - Uncaught Error: Undefined constant `'Math\Geometry'` in `Main.php` on line number 5

 - Uncaught Error: Class `'Math\Geometry\Constants'` not found in `Circle.php` on line number 20

 - syntax error, unexpected `'NewCircle'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 5

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;


class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Constants.php');
require_once('./Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, answer=[1]

In the statement `$circle = new NewCircle(10);` on line 7 of `Main.php`, replace `NewCircle` with `Circle`. Execute the program. What is the error message?

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - syntax error, unexpected `'$circle'` (T_VARIABLE) in `Main.php` on line number 7

 - Uncaught Error: Undefined constant `'Math\Geometry'` in `Main.php` on line number 5

 - Uncaught Error: Class `'Math\Geometry\Constants'` not found in `Circle.php` on line number 20

 - syntax error, unexpected `'NewCircle'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 5

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,Main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Constants.php');
require_once('./Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new Circle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, answer=[5]

Remove `as` from the statement `use Math\Geometry\Circle as NewCircle;` on line 5 of `Main.php`. Execute the program. What is the error message?

 - Uncaught Error: Class `'Circle'` not found in `Main.php` on line number 7

 - syntax error, unexpected `'$circle'` (T_VARIABLE) in `Main.php` on line number 7

 - Uncaught Error: Undefined constant `'Math\Geometry'` in `Main.php` on line number 5

 - Uncaught Error: Class `'Math\Geometry\Constants'` not found in `Circle.php` on line number 20

 - syntax error, unexpected `'NewCircle'` (T_STRING), expecting `','` or `';'` in `Main.php` on line number 5

:::


/// type=CR, answer=[tests/Namespaces/CorrectMultipleErrorsTest.php], filename=[Math.php,Constants.php,Circle.php,Main.php]

Correct the code so that it outputs the string `The circumference of the circle is: 62.8318`.

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        return self::PI * $radius ** 2;
    }
}
?>
```

```php
<?php
namespace Math;

class Constants
{
    const PI = 3.14159;
}
?>
```

```php
<?php
namespace Math\Geometry;

class Circle
{
    public $radius;
	
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
	
    public function getCircumference()
    {
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once('./Constants.php');
require_once('./Circle.php');

use Math\Geometry\Circle  NewCircle;

$circle = new Circle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Namespaces/DefineAndImportNamespacesTest.php], filename=[Constants.php,CircularShape.php,Circle.php,Main.php]

Given the initial implementations of the classes below, add a statement that defines namespaces and assigns each class to a certain namespace. In the `Constants.php` tab, add a statement that defines the `Math` namespace using the `namespace` keyword after the `<?php` opening tag. In the `CircularShape.php` tab, add a statement that defines the `Geometry` namespace inside the `Math` namespace at the first line of the PHP file. In the `Circle.php` tab, add a statement that defines the `Geometry` namespace inside the `Math` namespace. Then, add two statements that import the `Constants` class in the `Math` namespace and the `CircularShape` class in the `Math\Geometry` namespace. In the `Main.php` tab, add a statement that imports the `Circle` class in the `Math\Geometry` namespace and aliased as `MyCircle`. Run the program to view the output.

```php
<?php
// add the required namespace here...

class Constants {
	const PI = 3.14159;
}
?>
```

```php
<?php
// add the required namespace here...

abstract class CircularShape
{
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
// add the required classes and namespaces here..

require_once('./CircularShape.php');

class Circle extends CircularShape
{	
    public function diameter()
    {
        return $this -> getRadius() * 2;
    }

    public function area()
    {
        return Constants::PI * $this -> getRadius() ** 2; 
    }
    
    public function circumference()
    {
        return 2 * Constants::PI * $this -> getRadius();
    }
}
?>
```

```php
<?php
// add the required classes and namespaces here...

require_once('./Constants.php');
require_once('./Circle.php');

$circle = new MyCircle(5.5);
echo "The area of the circle is: " . $circle->area();

?>
```

+++
