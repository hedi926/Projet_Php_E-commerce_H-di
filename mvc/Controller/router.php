<?php

class Router {
    private $routes = [];

    public function addRoute($path, $handler) {
        $this->routes[$path] = $handler;
    }

    public function handleRequest() {
        $requestedUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestedUrl = rtrim($requestedUrl, '/');
        if (isset($this->routes[$requestedUrl])) {
            $handler = $this->routes[$requestedUrl];
            $handler();
        } else {
            http_response_code(404);
            echo "404 - Page not found";
        }
    }
}
?>