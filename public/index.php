<?php

require '../vendor/autoload.php';

use App\Router;

// echo $_GET['url'];

$router = new Router($_GET['url']);
$router->show();