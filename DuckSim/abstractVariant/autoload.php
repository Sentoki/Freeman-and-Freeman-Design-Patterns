<?php

spl_autoload_register(function ($className){
    $break = true;
    $className = str_replace('\\', '/', $className);
    $file = __DIR__ . DIRECTORY_SEPARATOR .  str_replace('\\', '/', $className) . '.php';
    if(is_file($file)){
        require_once $file;
    }else{
        $no_such_file_debug_break = true;
    }
});