<?php

namespace App\Controllers;

use App\Models\User;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Application\Helpers\Random;

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
        $user = (new User())->find('email', $request->post('email'));

        if ($user) {
            if (password_verify($request->post('password'), $user->getPassword())) {
//                dd(Random::str(50));
                dd($user->update(['token' => Random::str(50)]));
            } else {
                dd('Incorrect password');
            }
        } else {
            dd('User not found');
        }
    }
}
