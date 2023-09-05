<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Application\Router\Route;
use App\Application\Router\Router;

Route::page('/home', "<h1>home page</h1>");
Route::page('/about', "<h1>About</h1>");
Route::page('/contacts', "<h1>Contacts</h1>");

$router = new Router();
$router->handle(Route::list());