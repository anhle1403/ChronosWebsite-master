<?php

    spl_autoload_register(function($class){
        include_once 'core/'.$class.'.php';
    });
        include_once 'config/configurl.php';
    $main = new main();
   ?>
