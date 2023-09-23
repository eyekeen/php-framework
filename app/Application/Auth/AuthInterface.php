<?php

namespace App\Application\Auth;

interface AuthInterface {
    
    public static function init(): void;
    
    public static function check(): bool;

    public static function user(): array;
    
    public static function getTokenColumn(): string;
}
