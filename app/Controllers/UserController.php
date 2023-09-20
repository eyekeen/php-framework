<?php

namespace App\Controllers;

use App\Models\User;
use App\Application\Request\Request;
use App\Application\Router\Redirect;

class UserController {

    public function register(Request $request): void {
        // TODO: make validation data

        $user = new User();

        $user->setEmail($request->post('email'));
        $user->setName($request->post('name'));
        $user->setPassword($request->post('password'));
        $user->store();
        Redirect::to("/login");
    }

    public function login(Request $request) {
        $user = new User();
        dd($user->find('email', 'wopedela@mailinator.com'));
    }
}
