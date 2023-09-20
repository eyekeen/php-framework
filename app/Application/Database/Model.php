<?php

namespace App\Application\Database;

class Model extends Connection implements ModelInterface {

    protected int $id;
    protected string $created_at;
    protected string $updated_at;
    protected array $fields = [];
    protected string $table;

    public function find(string $column, mixed $value, bool $many= false): array|bool {
        $query = "SELECT * FROM `" . $this->getTable() . "` WHERE `$column` = :$column";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([
            $column => $value
        ]);
        
        return $many ? $stmt->fetchAll(\PDO::FETCH_ASSOC) : $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    private function getTable(): string {
        return $this->table;
    }

    public function store(): void {

        $columns = implode(', ', array_map(function ($field) {
                    return "`$field`";
                }, $this->fields));

        $binds = implode(', ', array_map(function ($field) {
                    return ":$field";
                }, $this->fields));

        $query = "insert into `$this->table` ($columns)
            values ($binds)";

        $stmt = $this->connect()->prepare($query);

        foreach ($this->fields as $field) {
            $params[$field] = $this->$field;
        }

        $stmt->execute($params);
    }
}
