<?php

// Registering autoload function
spl_autoload_register('autoloader');

function autoloader($class){
    $directory  = 'class/';
    $ext        = '.php';

    $fileFullPath = $directory.$class.$ext;

    if(!file_exists($fileFullPath)){
        echo "Can't find $fileFullPath file";
    }else{
        include_once $fileFullPath;
    }
    
}