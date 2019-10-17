### Facts for Objects lesson:

An object is the actual representation or instance of a class.

The `new` keyword is used to create an object as an instance of a class.

`Instantiation` is the process of creating a new instance of a class.

To create an object, write the name of the variable followed by an equal sign `=`; the `new` keyword and its corresponding class name. One way to write it is this way:

```php
$objectName = new className();
```

The object operator `->` is used to access methods and properties of an object.

Code:
```php
<?php
    class MyClass 
    {
        public $myProp = "This is a class property.";

        public function myMeth()
        {
            echo "This is a class method.";
        }
    }
    $myObject = new MyClass();
    $myObject->myMeth();
    echo $myObject->myProp;
?>
```
Output:
```
This is a class method.This is a class property.
```
