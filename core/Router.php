<?php
class Router {
    public function dispatch() {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $method = $_SERVER['REQUEST_METHOD'];

        require_once '../config/routes.php';

        if (array_key_exists($uri, $routes)) {
            [$controllerName, $action] = $routes[$uri];
            require_once "../app/Controllers/{$controllerName}.php";
            $controller = new $controllerName();
            $controller->$action();
        } else {
            echo "404 - Page not found";
        }
    }
}
