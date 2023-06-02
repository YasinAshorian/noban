<?php

use App\Controllers\Http\HomeController;
class Router
{
    private $routes = [];

    public function addRoute($method, $uri, $handler)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'handler' => $handler
        ];
    }

    public function matchRoute($method, $uri)
    {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['uri'] === $uri) {
                return $route;
            }
        }

        return null;
    }

    public function handleRequest($method, $uri)
    {
        $route = $this->matchRoute($method, $uri);

        if ($route) {
            $handler = $route['handler'];
            if (is_callable($handler)) {
                $handler();
            } elseif (is_string($handler)) {
                $this->callControllerAction($handler);
            }
        } else {
            // Route not found
            echo "404 Not Found";
        }
    }

    private function callControllerAction($handler)
    {
        [$controllerClass, $action] = explode('@', $handler);

        if (class_exists($controllerClass, true)) {
            $controller = new $controllerClass();

            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                // Invalid controller action
                echo "500 Internal Server Error";
            }
        } else {
            // Invalid controller class
            echo "500 Internal Server Error";
        }
    }
}
