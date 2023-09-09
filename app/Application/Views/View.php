<?php

namespace App\Application\Views;

class View implements ViewInterface
{
    public static function show(string $view): void
    {
        
        $path = __DIR__ . "/../../../views/$view.view.php";


        if(!file_exists($path)){
            throw new \Exception("View ($view) not found");
        }

        include $path;
    }
}
