<?php

namespace App\Application\Router;


class Router implements RouterInterface // for handling our routes
{

    use RouterHelper;

    public function handle(array $routes): void
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        $type = $requestMethod === 'POST' ? 'post' : 'page';
        $filteredRoutes = self::filter($routes, $type);

        // dd($filteredRoutes);

        foreach ($filteredRoutes as $route) {
            self::controller($route);
        }

    }
}
