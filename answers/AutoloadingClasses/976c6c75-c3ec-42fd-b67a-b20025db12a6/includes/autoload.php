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