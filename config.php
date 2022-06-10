<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$autoload = function($class){
    include_once(str_replace('\\','/','classes/'. $class . '.php'));
};

spl_autoload_register($autoload);


define('INITIAL_PATH', 'http://127.0.0.1/MVC');


?>