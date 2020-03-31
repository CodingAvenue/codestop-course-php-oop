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