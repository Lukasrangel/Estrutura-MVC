<?php

include('config.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

$controller = new \Controllers\HomeController();

Router::get('/', function() use ($controller){
    $controller->index();
});





?>