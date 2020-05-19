# Namespaces

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

$user = new App\User();

?>
```
/// type=SS, id=38a8b51a-0bfc-4373-bff7-0330f59ebf5b, answer=[3]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in the App namespace.`.

 - It prints `This is a user in the App\Model namespace.`.

 - It prints `This is a user in the App namespace.` and `This is a user in the App\Model namespace.` in separate lines.


/// type=SS, id=405aac21-0d3c-4889-b548-4eb73876f12f, answer=[4]

In the statement `namespace App;` on line 2 of `UserApp.php`, what is `namespace`?

 - It is a value.

 - It is a method.

 - It is a string.

 - It is a keyword.

 - It is a namespace name.


/// type=SS, id=5d552813-5e1f-4c07-a5e8-8e7d73e27e73, answer=[5]

In the statement `namespace App;` on line 2 of `UserApp.php`, what is `App`?

 - It is a value.

 - It is a method.

 - It is a string.

 - It is a keyword.

 - It is a namespace name.


/// type=SS, id=b54848cc-69f0-4441-bb04-fdb083d9e58b, answer=[1]

Which statement best describes `namespace App;`?

 - It defines the `App` namespace.

 - It imports the `App` namespace.

 - It removes the `App` namespace.

 - It includes the `App` namespace.

 - It displays the `App` namespace.


/// type=SS, id=97b349ba-ee7d-4690-8c54-17fe73a6b79c, answer=[4]

In the statement `namespace App\Model;` on line 2 of `UserModel.php`, what is `App\Model`?

 - It is a class.

 - It is a directory.

 - It is an operator.

 - It is a nested namespace.

 - It is a namespace and class.


/// type=SS, id=19b48815-8e16-4fe0-bc81-c2b5dce3cec3, answer=[3]

What does the statement `namespace App\Model;` do?

 - It assigns the `Model` namespace to the `App` namespace.

 - It removes the `Model` namespace from the `App` namespace.

 - It defines the `Model` namespace inside the `App` namespace.

 - It imports the `Model` namespace inside the `App` namespace.

 - It accesses the `Model` namespace inside the `App` namespace.


/// type=SS, id=8f60fe15-a416-4ce3-b9e1-d9affe3052b2, answer=[3]

Which statement best describes `require_once(__DIR__ . "/UserApp.php");` on line 2 of `main.php`?

- It updates the file `UserApp.php`.

- It establishes a relationship between classes.

- It includes the file `UserApp.php` in the file `main.php`.

- It removes the file `UserApp.php` in the file `main.php`.

- It excludes the file `UserApp.php` in the file `main.php`.


/// type=MS, id=f3c808e9-e8db-4f02-897b-030743ebdc30, answer=[4,5]

Which statements correctly describe `$user = new App\User();` on line 4 of `main.php`?

 - It assigns `App\User()` to `$user`.

 - It sets the value of `$user` to `App\User()`.

 - It displays the value of `$user` in the `App` namespace.

 - It instantiates the `$user` object of the `User` class in the `App` namespace.

 - It creates an instance of the `User` class in the `App` namespace and assigns it to `$user`.

:::


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

use App\User;

$user = new User();

?>
```
/// type=SS, id=8687476b-3a55-4a3b-aefa-f9bbf6ffdd20, answer=[3]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in the App namespace.`.

 - It prints `This is a user in the App\Model namespace.`.

 - It prints `This is a user in the App namespace.` and `This is a user in the App\Model namespace.` in separate lines.


/// type=MS, id=c05ede83-eb94-44e4-87ba-90be0dca5be3, answer=[2,4]

Which of the following are namespace definitions?

 - `use App\User;`

 - `namespace App;`

 - `class User {...}`

 - `namespace App\Model;`

 - `require_once(__DIR__ . "/UserApp.php");`


/// type=SS, id=191f75a7-f13c-4d9a-95a0-7b31941ef4f2, answer=[4]

In the statement `use App\User;` on line 4 of `main.php`, what is `use`?

 - It is a value.

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is an operator.


/// type=SS, id=b5781321-3b03-4304-93c4-2f1b7bbe5273, answer=[3]

Which statement best describes `use App\User;` on line 4 of `main.php`?

 - It calls the `User` class in the `App` namespace.

 - It defines the `User` class in the `App` namespace.

 - It imports the `User` class in the `App` namespace.

 - It removes the `User` class in the `App` namespace.

 - It displays the `User` class in the `App` namespace.

:::


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserModel.php");

use App\Model\User as NewUser;

$user = new NewUser();

?>
```
/// type=SS, id=a33ec8ea-184b-4130-8742-99dcf5870b11, answer=[4]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in the App namespace.`.

 - It prints `This is a user in the App\Model namespace.`.

 - It prints `This is a user in the App namespace.` and `This is a user in the App\Model namespace.` in separate lines.


/// type=MS, id=a357bd4a-1931-4bfe-8100-05ac13ce7901, answer=[1,3]

Which of the following are namespaces?

 - `App`

 - `User`

 - `Model`

 - `NewUser`

 - `UserModel`


/// type=SS, id=25450c81-527c-4b62-a672-206d7a12efbd, answer=[4]

In the statement `use App\Model\User as NewUser;` on line 4 of `main.php`, what is `as`?

 - It is a value.

 - It is a string.

 - It is a method.

 - It is a keyword.

 - It is an operator.


/// type=SS, id=f98a0aad-5664-4f74-baaa-14204800cb72, answer=[5]

In the statement `use App\Model\User as NewUser;` on line 4 of `main.php`, what is `NewUser`?

 - It is a class.

 - It is a method.

 - It is an object.

 - It is a namespace.

 - It is an alias of the imported class `User`.


/// type=SS, id=3d585eb2-f7f5-45da-a8b7-b2fc5d6bec23, answer=[3]

Which statement best describes `use App\Model\User as NewUser;` on line 4 of `main.php`?

 - It calls the `User` class in the `App\Model` namespace with the alias `NewUser`.

 - It defines the `User` class in the `App\Model` namespace with the alias `NewUser`.

 - It imports the `User` class in the `App\Model` namespace with the alias `NewUser`.

 - It removes the `User` class in the `App\Model` namespace with the alias `NewUser`.

 - It displays the `User` class in the `App\Model` namespace with the alias `NewUser`.

:::


:::

/// type=REPL, readonly=true, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Math.php');

use Math\Geometry;

echo "The area of the circle is: " . Geometry::getCircleArea(10);
?>
```
/// type=SS, id=65ea250c-cd8e-463f-ba84-75e3e9627672, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `314`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314`.


/// type=SS, id=7f8ba21d-a4e8-445d-94be-c560670e3c80, answer=[3]

Which of the following is a constant declaration?

 - `namespace Math`

 - `public $radius;`

 - `const PI = 3.14159;`

 - `use Math\Constants;`

 - `namespace Math\Geometry;`


/// type=SS, id=6f3339fb-b2f4-4051-9425-9f19cb091c21, answer=[4]

Which of the following is a static function?

 - `Math`

 - `$radius`

 - `__construct()`

 - `getCircleArea()`

 - `getCircumference()`


/// type=MS, id=23c74e68-35b0-4f19-bca7-8da8482a7d21, answer=[4,5]

Which classes are items of the `Math` namespace?

 - `PI`

 - `Circle`

 - `$radius`
 
 - `Geometry`

 - `Constants`


/// type=MS, id=0867b181-2349-4770-a36c-8dce38b2f012, answer=[1,5]

Which of the following are namespace definitions?

 - `namespace Math`

 - `public $radius;`

 - `const PI = 3.14159;`

 - `use Math\Constants;`

 - `namespace Math\Geometry;`


/// type=SS, id=d62a8e5c-1c15-48d5-bcc6-6822e963c725, answer=[5]

Which of the following is a nested namespace definition?

 - `namespace Math`

 - `public $radius;`

 - `const PI = 3.14159;`

 - `use Math\Constants;`

 - `namespace Math\Geometry;`


/// type=SS, id=b72d0fa5-4bdd-4537-88fd-b9248d45715c, answer=[3]

Which statement best describes `namespace Math\Geometry;`?

 - It assigns the `Geometry` namespace to the `Math` namespace.

 - It removes the `Geometry` namespace from the `Math` namespace.

 - It defines the `Geometry` namespace inside the `Math` namespace.

 - It imports the `Geometry` namespace inside the `Math` namespace.

 - It accesses the `Geometry` namespace inside the `Math` namespace.


/// type=SS, id=a4d6053f-9031-4604-b463-2997308592a0, answer=[3]

Which statement best describes `use Math\Constants;`?

 - It calls the `Constants` class in the `Math` namespace.

 - It defines the `Constants` class in the `Math` namespace.

 - It imports the `Constants` class in the `Math` namespace.

 - It removes the `Constants` class in the `Math` namespace.

 - It displays the `Constants` class in the `Math` namespace.


/// type=SS, id=f0676c1f-0a84-416c-b2c6-708c3b7943ce, answer=[3]

Which statement best describes `Geometry::getCircleArea(10)` on line 6 of `main.php`?

 - It removes the argument `10` from the `getCircleArea()` method of the `Geometry` class.

 - It removes the static method `getCircleArea()` with the parameter `10` of the `Geometry` class.

 - It calls the static method `getCircleArea()` passing the argument `10` outside the `Geometry` class.

 - It creates the static method `getCircleArea()` with the parameter `10` outside the `Geometry` class.

 - It defines the static method `getCircleArea()` with the parameter `10` outside the `Geometry` class.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Math.php');

use Math\Geometry;

echo "The area of the circle is: " . Geometry::getCircleArea(10);
?>
```
/// type=SS, id=e0ba2648-fa49-45b0-b775-47fb6405b601, answer=[3]

Remove the statement `use Math\Geometry;` on line 4 of `main.php`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `314`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Math.php');

echo "The area of the circle is: " . Geometry::getCircleArea(10);
?>
```
/// type=SS, id=7210ca0a-8d60-4f34-afd2-40809aea8b13, answer=[5]

On line 4 of `main.php`, replace `Geometry::getCircleArea(10)` with `Math\Geometry::getCircleArea(10)`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `314`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Constants.php');
require_once(__DIR__ . '/Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, id=9854d033-b35e-43df-8b72-b6b76844e2ae, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.


/// type=SS, id=331437d6-2012-4173-9700-0cdb13ad6268, answer=[3]

On line 5 of `main.php`, remove `as NewCircle` from the statement `use Math\Geometry\Circle as NewCircle;`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Constants.php');
require_once(__DIR__ . '/Circle.php');

use Math\Geometry\Circle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, id=feaabc8d-5b80-4ce4-8f3a-64971a9415e3, answer=[5]

In the statement `$circle = new NewCircle(10);` on line 7 of `main.php`, replace `NewCircle(10)` with `Circle(10)`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.

:::


:::

/// type=REPL, readonly=true, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        if ($radius<=0) {
            throw new \Exception("Invalid value assigned to radius.");
        }
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
namespace Test;

require_once(__DIR__ . '/Math.php');

use Math\Geometry;

try {
    echo "The area of the circle is: " . Geometry::getCircleArea(10);
} catch(\Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
```
/// type=SS, id=a2cddb89-45fd-4169-8e2d-9d521e89abb2, answer=[4]

Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314.159`.

 - It prints `Caught exception: Invalid value assigned to radius.`.


/// type=SS, id=0cd64227-7fab-4e7c-9d8a-9575e447b69e, answer=[4]

In the statement `throw new \Exception("Invalid value assigned to radius.");` on line 11 of `Math.php`, what does `\Exception` do?

 - It creates the `Exception` class in the global namespace from the `Test` namespace.

 - It defines the `Exception` class in the global namespace from the `Test` namespace.

 - It imports the `Exception` class in the global namespace from the `Test` namespace.

 - It accesses the `Exception` class in the global namespace from the `Test` namespace.

 - It creates an alias of the `Exception` class in the global namespace from the `Test` namespace.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        if ($radius<=0) {
            throw new \Exception("Invalid value assigned to radius.");
        }
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
namespace Test;

require_once(__DIR__ . '/Math.php');

use Math\Geometry;

try {
    echo "The area of the circle is: " . Geometry::getCircleArea(10);
} catch(\Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
```
/// type=SS, id=89289d30-1d65-423a-a8c9-c146b5743d04, answer=[5]

In the statement `echo "The area of the circle is: " . Geometry::getCircleArea(10);` on line 9 of `main.php`, replace the argument `10` with `-10`. Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314.159`.

 - It prints `Caught exception: Invalid value assigned to radius.`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        if ($radius<=0) {
            throw new \Exception("Invalid value assigned to radius.");
        }
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
namespace Test;

require_once(__DIR__ . '/Math.php');

use Math\Geometry;

try {
    echo "The area of the circle is: " . Geometry::getCircleArea(-10);
} catch(\Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
```
/// type=SS, id=952d8972-3606-42f0-8931-062fe6c44ecc, answer=[2]

Remove the backslash `\` from `catch(\Exception $e)` on line 10 of `main.php`. Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314.159`.

 - It prints `Caught exception: Invalid value assigned to radius.`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        if ($radius<=0) {
            throw new \Exception("Invalid value assigned to radius.");
        }
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
namespace Test;

require_once(__DIR__ . '/Math.php');

use Math\Geometry;

try {
    echo "The area of the circle is: " . Geometry::getCircleArea(-10);
} catch(Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
```
/// type=MS, id=53b50cd6-b42f-4f7d-b907-e3cd4755072f, answer=[2,4,5]

Why does removing the backslash `\` before `Exception` produce an error?

 - The class name `\Exception` is misspelled as `Exception`.

 - The `Exception` class does not exist in the `Test` namespace.

 - The `Exception` class does not exist in the global namespace. 

 - There is no `use` statement specified in the code that imports the `Exception` class in the global namespace into the `Test` namespace.

 - The backslash `\` is required to access the `Exception` class in the global namespace from the `Test` namespace without the `use` keyword.


/// type=SS, id=c4a58d26-56b8-4cdd-9df3-4553cf54102e, answer=[5]

Add the statement `use Exception;` on line 5 of `main.php`. Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314.159`.

 - It prints `Caught exception: Invalid value assigned to radius.`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        if ($radius<=0) {
            throw new \Exception("Invalid value assigned to radius.");
        }
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
namespace Test;

require_once(__DIR__ . '/Math.php');
use Exception;
use Math\Geometry;

try {
    echo "The area of the circle is: " . Geometry::getCircleArea(-10);
} catch(Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
```
/// type=SS, id=0fc42d08-ffd9-445b-965c-39caee9f60fc, answer=[2]

Remove the statement `use Math\Geometry;` on line 6 of `main.php`. Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314.159`.

 - It prints `Caught exception: Invalid value assigned to radius.`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        if ($radius<=0) {
            throw new \Exception("Invalid value assigned to radius.");
        }
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
namespace Test;

require_once(__DIR__ . '/Math.php');

use Exception;

try {
    echo "The area of the circle is: " . Geometry::getCircleArea(-10);
} catch(Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
```
/// type=MS, id=150d6b10-a308-42e5-b2eb-124196b5388f, answer=[3,4,5]

Why does removing the statement `use Math\Geometry;` from the code produce an error?

 - There is no `Geometry` class found in the `Math` namespace.

 - There is no `getCircleArea()` method found in the `Geometry` class.

 - On line 9 of `main.php`, `Geometry::getCircleArea(-10)` requires the statement `use Math\Geometry;`. 

 - The `Geometry` class in the `Math` namespace is not accessible from the `Test` namespace without the statement `use Math\Geometry;`.

 - Accessing the `getCircleArea()` method of the `Geometry` class in the `Math` namespace from the `Test` namespace requires the statement `use Math\Geometry;`.


/// type=SS, id=85a95ea5-4153-4dfb-9e4b-8b68153014b4, answer=[5]

In the `echo` statement on line 9 of `main.php`, replace `Geometry::getCircleArea(-10)` with `\Math\Geometry::getCircleArea(-10)`. Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314.159`.

 - It prints `Caught exception: Invalid value assigned to radius.`.

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        if ($radius<=0) {
            throw new \Exception("Invalid value assigned to radius.");
        }
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
namespace Test;

require_once(__DIR__ . '/Math.php');

use Exception;

try {
    echo "The area of the circle is: " . \Math\Geometry::getCircleArea(-10);
} catch(Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
```
/// type=SS, id=73455217-aaf9-4281-8263-70a0aa00d994, answer=[2]

Remove the backlash `\` before `Math` from `\Math\Geometry::getCircleArea(-10)` on line 9 of `main.php`. Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `The area of the circle is: 314.159`.

 - It prints `Caught exception: Invalid value assigned to radius.`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=d33bd23c-9d8a-4869-a18b-2611f2862012, answer=[2,5]

Which statements correctly describe a namespace?

 - It is a process of creating a new object of a class.

 - It is referred to as a virtual directory for a class in a global space.

 - It is a process of changing the behavior of a parent class method in a child class.

 - It is a relationship between classes that enables a child class to inherit the properties and methods of its parent class.

 - It is a way of organizing related classes, interfaces, functions, and constants into logical groups to prevent name conflicts.


/// type=SS, id=ce0dc064-8fec-442b-bc8b-f4afdd957b2e, answer=[1]

Which statement best describes the `namespace` keyword?

 - It defines a namespace.

 - It creates an alias of the imported class.

 - It creates an object as an instance of a class.

 - It imports namespaces and classes to a current PHP file.

 - It defines a relationship between a child class and its parent class.


/// type=SS, id=e119606f-4cdb-4db7-a72c-7fc06169396c, answer=[4]

Which statement is true about the `use` keyword?

 - It defines a namespace.

 - It creates an alias of the imported class.

 - It creates an object as an instance of a class.

 - It imports namespaces and classes to a current PHP file.

 - It defines a relationship between a child class and its parent class.


/// type=SS, id=c6eb97c5-13a6-4ca1-863b-13f56f461917, answer=[2]

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

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

$user = new User();

?>
```
/// type=SS, id=b2dbd744-3db0-4bdb-8d4a-265cfe604fad, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `This is a user in the App namespace.`.

 - It prints `This is a user in the App\Model namespace.`.

 - It prints `This is a user in the App namespace.` and `This is a user in the App\Model namespace.` in separate lines.


/// type=SS, id=ec525867-1754-4224-8d4a-52c2837451a9, answer=[1]

What is the error message?

 - Uncaught Error: Class `'User'` not found in `main.php` on line number 4

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `main.php` on line number 4


/// type=MS, id=7921b12b-b7d9-45c3-9a3f-345648fbf5ca, answer=[1,5]

Which statements correctly describe the error?

 - On line 4 of `main.php`, the statement `$user = new User();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 4 of `main.php`.

 - On line 2 of `main.php`, the statement `require_once("./UserApp.php");` is invalid.

 - There is no argument specified in the `require_once()` method on line 2 of `main.php`.

 - There is no namespace specified in the statement `$user = new User();` on line 4 of `main.php`.

:::


/// type=CR, id=3e4e6057-507e-489c-9bfe-9ff0c90838ab, answer=[tests/Namespaces/3e4e6057-507e-489c-9bfe-9ff0c90838ab], filename=[UserApp.php,UserModel.php,main.php]

Correct the code so that it outputs the string `This is a user in the App namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

$user = new User();

?>
``` 


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

use App;

$user = new User();

?>
```
/// type=MS, id=78f0644c-6df2-4551-af0d-d44a841832e8, answer=[1,5]

Execute the program. What are the error messages?

 - Uncaught Error: Class `'User'` not found in `main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `main.php` on line number 4


/// type=MS, id=096d5f08-dab3-4454-8df8-f8fb16f5e9af, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 4 of `main.php`, the statement `use App;` is invalid.

 - There is no `App` namespace defined in the file `UserApp.php`.

 - There is no `as` keyword specified after `App` on line 4 of `main.php`.

 - On line 4 of `main.php`, the statement `use App\User;` is miswritten as `use App;`.

 - There is no `User` class specified in the statement `use App;` on line 4 of `main.php`.

:::


/// type=CR, id=2b901a20-9fc0-4191-b1bc-5fb2820cf71a, answer=[tests/Namespaces/2b901a20-9fc0-4191-b1bc-5fb2820cf71a], filename=[UserApp.php,UserModel.php,main.php]

Correct the code so that it outputs the string `This is a user in the App namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

use App;

$user = new User();

?>
```


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

 App\User;

$user = new User();

?>
```
/// type=SS, id=4be645e0-4a57-4982-a1e3-cf68ecb93749, answer=[3]

Execute the program. What is the error message?

 - Uncaught Error: Class `'User'` not found in `main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `main.php` on line number 4


/// type=MS, id=a092b812-75fa-4b70-8e09-a3db2ad19231, answer=[1,5]

Which statements correctly describe the error?

 - On line 4 of `main.php`, the statement `App\User;` is invalid.

 - There is no `App` namespace defined in the file `UserApp.php`.

 - There is a backslash `\` between `App` and `User` on line 4 of `main.php.`

 - There is no `as` keyword specified after `App\User` on line 4 of `main.php`.

 - There is no `use` keyword specified before `App\User;` on line 4 of `main.php`.

:::


/// type=CR, id=63b29fa1-ceb8-4b85-833b-d54f811ba10b, answer=[tests/Namespaces/63b29fa1-ceb8-4b85-833b-d54f811ba10b], filename=[UserApp.php,UserModel.php,main.php]

Correct the code so that it outputs the string `This is a user in the App namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserApp.php");

 App\User;

$user = new User();

?>
```


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserModel.php");

use App\Model\User as NewModel;

$user = new User();

?>
```
/// type=SS, id=835fe9db-f579-4a14-b069-61c9cc17edb2, answer=[1]

Execute the program. What is the error message?

 - Uncaught Error: Class `'User'` not found in `main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `main.php` on line number 4

 - syntax error, unexpected `'NewUser'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `main.php` on line number 4


/// type=MS, id=7d71befb-542c-4a65-b136-e756ebf7ca53, answer=[3,5]

Which statements correctly describe the error?

 - There is a backslash `\` between `App` and `Model` on line 4 of `main.php.`

 - There is no `App\Model` namespace defined in the file `UserModel.php`.

 - On line 6 of `main.php`, the statement `$user = new User();` is invalid.

 - There is no `as` keyword specified after `App\Model\User` on line 4 of `main.php`.

 - The `User` class in the `App\Model` namespace is aliased as `NewModel` on line 4 of `main.php`

:::


/// type=CR, id=a9789614-a3cb-46ed-ae56-a96f4dc848be, answer=[tests/Namespaces/a9789614-a3cb-46ed-ae56-a96f4dc848be], filename=[UserApp.php,UserModel.php,main.php]

Correct the code so that it outputs the string `This is a user in the App\Model namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserModel.php");

use App\Model\User as NewModel;

$user = new User();

?>
```


:::

/// type=REPL, readonly=true, filename=[UserApp.php,UserModel.php,main.php]

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserModel.php");

use App\Model\User  NewModel;

$user = new NewModel();

?>
```
/// type=SS, id=771bfeb5-b799-45e7-9096-3ed6b6606efe, answer=[4]

Execute the program. What is the error message?

 - Uncaught Error: Class `'User'` not found in `main.php` on line number 6

 - syntax error, unexpected `'$user'` (T_VARIABLE) in `main.php` on line number 4

 - Uncaught Error: Undefined constant `'App\User'` in `main.php` on line number 4

 - syntax error, unexpected `'NewModel'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 4

 - Warning: The use statement with non-compound name `'App'` has no effect in `main.php` on line number 4


/// type=MS, id=a8786f15-bf6f-4bf0-89ee-01f430bbf9a5, answer=[4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 4 of `main.php`.

 - On line 6 of `main.php`, the statement `$user = new NewModel();` is invalid.

 - There is no `use` keyword specified before `App\Model\User` on line 4 of `main.php`.

 - On line 4 of `main.php`, the statement `use App\Model\User  NewModel;` is invalid.

 - There is no `as` keyword specified after `App\Model\User` and `NewModel` on line 4 of `main.php`.

:::


/// type=CR, id=c902b2d3-c528-472d-8798-453873358108, answer=[tests/Namespaces/c902b2d3-c528-472d-8798-453873358108], filename=[UserApp.php,UserModel.php,main.php]

Correct the code so that it outputs the string `This is a user in the App\Model namespace.`.

```php
<?php
namespace App;

class User
{
    public function __construct()
    {
        echo "This is a user in the App namespace.";
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
        echo "This is a user in the App\Model namespace.";
    }
}
?>
```

```php
<?php
require_once(__DIR__ . "/UserModel.php");

use App\Model\User  NewModel;

$user = new NewModel();

?>
```


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Constants.php');
require_once(__DIR__ . '/Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, id=c90b4308-d967-4216-bc70-cc77129c507a, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `62.8318`.

 - It produces an error.

 - No output is displayed.

 - It prints `The circumference of the circle is: 62.8318`.


/// type=SS, id=46b64eee-6cfe-4906-bd04-8a91e3b3ef91, answer=[4]

Remove the statement `use Math\Constants;` on line 4 of `Circle.php`. Execute the program. What is the error message?

 - Uncaught Error: Class `'Circle'` not found in `main.php` on line number 7

 - syntax error, unexpected `'$circle'` (T_VARIABLE) in `main.php` on line number 7

 - Uncaught Error: Undefined constant `'Math\Geometry'` in `main.php` on line number 5

 - Uncaught Error: Class `'Math\Geometry\Constants'` not found in `Circle.php` on line number 18

 - syntax error, unexpected `'NewCircle'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 5

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Constants.php');
require_once(__DIR__ . '/Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new NewCircle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, id=d967a2dd-5ee1-4045-b3ca-a6cff239af3b, answer=[1]

In the statement `$circle = new NewCircle(10);` on line 7 of `main.php`, replace `NewCircle` with `Circle`. Execute the program. What is the error message?

 - Uncaught Error: Class `'Circle'` not found in `main.php` on line number 7

 - syntax error, unexpected `'$circle'` (T_VARIABLE) in `main.php` on line number 7

 - Uncaught Error: Undefined constant `'Math\Geometry'` in `main.php` on line number 5

 - Uncaught Error: Class `'Math\Geometry\Constants'` not found in `Circle.php` on line number 18

 - syntax error, unexpected `'NewCircle'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 5

:::


:::

/// type=REPL, filename=[Math.php,Constants.php,Circle.php,main.php]

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Constants.php');
require_once(__DIR__ . '/Circle.php');

use Math\Geometry\Circle as NewCircle;

$circle = new Circle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```
/// type=SS, id=8a0f49a9-60e3-43ba-9dc9-e0007a130bbb, answer=[5]

Remove `as` from the statement `use Math\Geometry\Circle as NewCircle;` on line 5 of `main.php`. Execute the program. What is the error message?

 - Uncaught Error: Class `'Circle'` not found in `main.php` on line number 7

 - syntax error, unexpected `'$circle'` (T_VARIABLE) in `main.php` on line number 7

 - Uncaught Error: Undefined constant `'Math\Geometry'` in `main.php` on line number 5

 - Uncaught Error: Class `'Math\Geometry\Constants'` not found in `Circle.php` on line number 18

 - syntax error, unexpected `'NewCircle'` (T_STRING), expecting `','` or `';'` in `main.php` on line number 5

:::


/// type=CR, id=d2261d1d-3946-4afd-9188-07e6bda2645b, answer=[tests/Namespaces/d2261d1d-3946-4afd-9188-07e6bda2645b], filename=[Math.php,Constants.php,Circle.php,main.php]

Correct the code so that it outputs the string `The circumference of the circle is: 62.8318`.

```php
<?php
namespace Math;

class Geometry
{
    const PI = 3.14159;
	
    static function getCircleArea($radius)
    {  
        //The formula to calculate the area of a circle is: (pi)(r^2)
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
        // The formula to calculate the circumference of a circle is: 2(pi)(r)
        return 2 * Constants::PI * $this -> radius;
    }
}
?>
```

```php
<?php
require_once(__DIR__ . '/Constants.php');
require_once(__DIR__ . '/Circle.php');

use Math\Geometry\Circle  NewCircle;

$circle = new Circle(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=21d3b203-f487-4088-ba3b-d701cd68b664, answer=[tests/Namespaces/21d3b203-f487-4088-ba3b-d701cd68b664], filename=[Constants.php,CircularShape.php,Circle.php,main.php]

Given the initial implementations of the classes below, add a statement that defines namespaces and assigns each class to a certain namespace. In the `Constants.php` tab, add a statement that defines the `Math` namespace using the `namespace` keyword after the `<?php` opening tag. In the `CircularShape.php` tab, add a statement that defines the `Geometry` namespace inside the `Math` namespace at the first line of the PHP file. In the `Circle.php` tab, add a statement that defines the `Geometry` namespace inside the `Math` namespace. Then, add two statements that import the `Constants` class in the `Math` namespace and the `CircularShape` class in the `Math\Geometry` namespace. In the `main.php` tab, add a statement that imports the `Circle` class in the `Math\Geometry` namespace and aliased as `MyCircle`. Run the program to view the output.

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

require_once(__DIR__ . '/CircularShape.php');

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

require_once(__DIR__ . '/Constants.php');
require_once(__DIR__ . '/Circle.php');

$circle = new MyCircle(5.5);
echo "The area of the circle is: " . $circle->area();

?>
```

+++
