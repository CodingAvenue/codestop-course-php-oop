### Facts for Namespaces lesson:

A `namespace` is a way of organizing related classes, interfaces, functions, and constants into logical groups to prevent name conflicts. It is referred to as a virtual directory for a class in a global space.

The `global space` is the default namespace where all classes, interfaces, functions, and constants without any namespace definition are placed.  

The `namespace` keyword defines a namespace.

To define a namespace, use the `namespace` keyword followed by the namespace name and a semicolon `;`. 

A namespace declaration should be written at the first line of a PHP file.

A backslash `\` is used to separate nested namespaces like `namespace App\Models;`.

The `use` keyword imports namespaces and classes into the current namespace. 

The `as` keyword is used to create an alias of the imported class.

A class in a namespace can be accessed globally without using the `use` keyword by adding a backslash `\` at the beginning of the statement like `\App\Models`.

Code:

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

class Constants
{
    const PI = 3.14159;
}

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

namespace Main;

use Math\Geometry\Circle as Circ;

try {
    echo "The area of the circle is: " . \Math\Geometry::getCircleArea(10);
} catch(\Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}
echo "\n";
$circle = new Circ(10);
echo "The circumference of the circle is: " . $circle->getCircumference();
?>
```

Output:
```
The area of the circle is: 314.159
The circumference of the circle is: 62.8318
```

In the above example, the code breaks down as follows:

 - `namespace Math;` defines the `Math` namespace that contains `Geometry` and `Constants` classes.

 - `namespace Math\Geometry;` defines the `Math\Geometry` namespace that contains the `Circle` class.

 - `namespace Main;` defines the `Main` namespace that contains statements that acceses different classes from several namespaces.

 - `use Math\Constants;` imports the `Constants` class in the `Math` namespace for the `Circle` class to access the `PI` constant.

 - `use Math\Geometry\Circle as Circ;` imports the `Circle` class in the `Math\Geometry` namespace with the alias `Circ`. 

 - `if($radius<=0) { throw new \Exception("Invalid value assigned to radius."); }` throws an exception message `Invalid value assigned to radius.` if the value of `$radius` is less than or equal to `0`.

 - `\Exception()` accesses the `Exception` class in the global space inside the `Math` namespace.

 - `\Math\Geometry::getCircleArea(10)` accesses the static method `getCircleArea()` of the `Geometry` class in the `Math` namespace from the `Main` namespace without using the `use` keyword.
