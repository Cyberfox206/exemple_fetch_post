<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new name\Router($_SERVER["REQUEST_URI"]);
$router->get('/', 'TestController@showtest');
$router->run();
