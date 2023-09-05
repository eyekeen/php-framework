<?php

namespace App\Application\Router;


interface RouteInterface
{
    public static function page(string $uri, string $html) : void;
    public static function list() : array;
}
