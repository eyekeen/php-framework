<?php

namespace App\Application\Router;


class Route implements RouteInterface // class Route need for accumulate our routes
{
    private static array $routes = [];

    public static function page(string $uri, string $controller, string $method): void
    {
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public static function list(): array
    {
        return self::$routes;
    }
}
