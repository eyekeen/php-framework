<?php

namespace App\Application\Router;

use App\Application\Views\View;


class Router implements RouterInterface // for handling our routes
{

    use RouterHelper;

    public function handle(array $routes): void
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        $type = $requestMethod === 'POST' ? 'post' : 'page';
        $filteredRoutes = self::filter($routes, $type);

        foreach ($filteredRoutes as $route) {
            if($route['uri'] === $uri){
                self::controller($route); 
                return;
            }
        }
        
        View::error(404);
        
    }
}
