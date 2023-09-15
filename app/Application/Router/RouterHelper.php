<?php

namespace App\Application\Router;

trait RouterHelper {

    protected static function filter(array $routes, string $type): array {
        return array_filter($routes, function ($route) use ($type) {
            return $route['type'] === $type;
        });
    }

    protected static function controller(array $route) {
        $controller = new $route['controller']();
        $method = $route['method'];
        if (!empty($_POST)) {
            $controller->$method($_POST);
        } else {
            $controller->$method();
        }
        return;
    }
}
