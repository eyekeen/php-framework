<?php

use App\Application\Router\Route;
use App\Controllers\ContactsControlle;

Route::post('/contacts', ContactsControlle::class, 'submit');
