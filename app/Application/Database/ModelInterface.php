<?php

namespace App\Application\Database;

/**
 *
 * @author tarum2
 */
interface ModelInterface {
    public static function find(array $params, int $limit = 1): ?array; 
    public function store(): void;
}
