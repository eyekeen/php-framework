<?php

namespace App\Application\Database;

/**
 *
 * @author tarum2
 */
interface ModelInterface {

    public function find(string $column, string $value, bool $many = false): array|bool;

    public function store(): void;
}
