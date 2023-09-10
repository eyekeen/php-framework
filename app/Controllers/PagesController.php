<?php

namespace App\Controllers;

use App\Application\Views\View;

class PagesController{
    public function home() : void {
        View::show("pages/hom1e");
    }

    public function about() : void {
        View::show("pages/about");

    }

    public function contacts() : void {
        View::show("pages/contacts");
    }
}