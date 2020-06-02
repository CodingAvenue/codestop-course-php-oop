### Facts for Autoloading Classes lesson:

`Autoloading` is a way of automatically loading classes and interfaces that are currently not defined without using any file inclusion functions such as `include()`, `require()`, and `require_once()`.

An autoloader is a function that automatically loads the specified class files.

The `spl_autoload_register()` function is used to register several autoloader functions.

The `dirname()` function is used to return the path of a parent directory. 

The `__DIR__` magic constant specifies the path that starts from the directory where the autoloader is located.

```php
function myClassLoader($className)
{
    $file = __DIR__ . '\\' . $className . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
	require_once($file);
    }
}

spl_autoload_register("myClassLoader");
```

 - `function myClassLoader($className) {...}` defines the autoload function named `myClassLoader` with the parameter `$className`.

 - `spl_autoload_register("myClassLoader");` registers the autoload function `myClassLoader()`.

 - `$file = __DIR__ . '\\' . $className . '.php';` assigns all the class files in `__DIR__` with the specified `$className` and `.php` extensions to `$file`.
 
 - `str_replace('\\', DIRECTORY_SEPARATOR, $file)` replaces the predefined constant `DIRECTORY_SEPARATOR` with `\` in `$file`.

 - `if (file_exists($file))` checks if the specified class file in `$file` exists.

 - `require_once($file);` includes the class file in `$file`.

