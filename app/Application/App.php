<?php

namespace App\Application;

use App\Application\Config\Config;
use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Exceptions\ViewNotFoundException;
use App\Application\Views\View;

class App
{
    public function run(): void
    {
        try {
            $this->handle();
        } catch (ViewNotFoundException $e) {
            View::exception($e);
        }
    }

    private function handle()
    {
        Config::init();

        require_once __DIR__ . '/../routes/pages.php';
        $router = new Router();
        $router->handle(Route::list());
    }
}
