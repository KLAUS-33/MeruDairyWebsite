<?php

// Include config file
require_once dirname(__DIR__) . '/config.php';

// Debug: Log the incoming URL
error_log("Incoming URL: " . ($_GET['url'] ?? 'none'));

// Autoload controllers
spl_autoload_register(function ($class) {
    $file = BASE_PATH . '/controllers/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        error_log("Controller file not found: $file");
    }
});

// Get the URL from the query string (via .htaccess RewriteRule)
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
$segments = explode('/', $url);

// Debug: Log the parsed URL and segments
error_log("Parsed URL: $url");
error_log("URL Segments: " . implode(',', $segments));

// Default controller and action
$controllerName = 'HomeController';
$action = 'index';

// Map URLs to controllers
$routes = [
    'home' => 'HomeController',
    'about' => 'AboutController',
    'products' => 'ProductsController',
    'contact' => 'ContactController',
    'jobs' => 'JobsController',
    'blog' => 'BlogController',
    'csr' => 'CsrController',
    'birthday' => 'BirthdayController',
];

// Determine the controller based on the URL
if (!empty($segments[0]) && isset($routes[$segments[0]])) {
    $controllerName = $routes[$segments[0]];
}

// Debug: Log the selected controller
error_log("Controller selected: $controllerName");

// Instantiate the controller and call the action
if (class_exists($controllerName)) {
    $controller = new $controllerName();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        // Handle 404 - Action not found
        header('HTTP/1.0 404 Not Found');
        echo '404 - Action not found';
    }
} else {
    // Handle 404 - Controller not found
    header('HTTP/1.0 404 Not Found');
    echo '404 - Controller not found';
}

?>