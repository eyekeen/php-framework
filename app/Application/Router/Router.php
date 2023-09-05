<?php

namespace App\Application\Router;


class Router implements RouterInterface // for handling our routes
{
    public function handle(array $routes): void
    {
        $uri = $_SERVER['REQUEST_URI'];

        foreach ($routes as $route) {
            if ($route['uri'] === $uri) {
                echo $route['html'];
            }
        }
    }
}
