<?php

require __DIR__ . DIRECTORY_SEPARATOR . "../component/route/Router.php";


$router = new Router();


$router->addRoute('GET', '/', 'App\Controllers\Http\HomeController@index');


$router->handleRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);


