<?php

require __DIR__ . DIRECTORY_SEPARATOR . "../component/route/Router.php";


$router = new Router();


$router->addRoute('GET', '/', 'App\Controllers\Http\ProductController@index');
$router->addRoute('POST', '/purchase', 'App\Controllers\Http\ProductController@purchase');


$router->handleRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);


