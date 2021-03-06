<?php
require_once __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($className){
    $path = str_replace("\\", "/", $className) . '.php';

    if (file_exists($path)) {
        include_once $path;
    } else {
     echo 'File with path' . $path . ' and namespace ' . $className . ' do not exist.';
     die();
    }
});