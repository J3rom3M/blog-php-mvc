<?php

require '../vendor/autoload.php';

use Router\Router;

// echo $_GET['url'];

$router = new Router($_GET['url']);
//$router->show();

$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');


$router->run();
