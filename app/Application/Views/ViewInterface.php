<?php

namespace App\Application\Views;

interface ViewInterface{
    public static function show(string $view) : void;
}