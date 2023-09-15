<?php

namespace App\Application;

use App\Application\Config\Config;
use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Exceptions\ViewNotFoundException;
use App\Application\Views\View;
use App\Exceptions\ComponentNotFoundException;

class App
{
    public function run(): void
    {
        try {
            $this->handle();
        } catch (ViewNotFoundException|ComponentNotFoundException $e) {
            View::exception($e);
        }
    }

    private function handle()
    {
        Config::init();

        require_once __DIR__ . '/../../routes/actions.php';
        require_once __DIR__ . '/../../routes/pages.php';
        $router = new Router();
        $router->handle(Route::list());
    }
}
