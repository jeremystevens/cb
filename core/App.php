<?php

class App {
    public function run() {
        // Get the base directory dynamically
        $basePath = dirname($_SERVER['SCRIPT_NAME']); // Example: "/cb/public"
        
        // Trim base path and index.php from the URI
        $uri = trim(str_replace([$basePath, 'index.php'], '', $_SERVER['REQUEST_URI']), '/');

        // Define routes
        if ($uri === '') {
            require_once '../app/Controllers/UserController.php';
            $controller = new UserController();
            $controller->showLoginPage();
        } elseif ($uri === 'user/register') {
            require_once '../app/Controllers/UserController.php';
            $controller = new UserController();
            $controller->register();
        } elseif ($uri === 'user/login') {
            require_once '../app/Controllers/UserController.php';
            $controller = new UserController();
            $controller->login();
        } else {
            echo "404 - Page not found!";
        }
    }
}

?>