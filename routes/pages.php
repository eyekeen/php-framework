<?php

use App\Application\Router\Route;

use App\Controllers\PagesController;

Route::page('/home', PagesController::class, 'home');
Route::page('/about', PagesController::class, 'about');
Route::page('/contacts', PagesController::class, 'contacts');
