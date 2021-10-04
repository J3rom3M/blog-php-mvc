<?php

require '../vendor/autoload.php';

use Router\Router;

// echo $_GET['url'];

$router = new Router($_GET['url']);
//$router->show();

$router->get('/', 'BlogController@index');
$router->get('/posts/:id', 'BlogController@show');


$router->run();