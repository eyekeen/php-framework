<?php

namespace App\Application;

use App\Application\Router\Route;
use App\Application\Router\Router;

class App
{
    public function run(): void
    {
        require_once __DIR__ . '/../routes/pages.php';

        $router = new Router();
        $router->handle(Route::list());
    }
}
