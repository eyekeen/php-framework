<?php

namespace App\Application\Database;

class Model extends Connection implements ModelInterface {

    protected int $id;
    protected string $created_at;
    protected string $updated_at;
    protected array $fields = [];
    protected string $table;

    public static function find(array $params, int $limit = 1): ?array {
        
        $query = "SELECT * FROM `$this->table` WHERE `id` = :id";
    }
    
    
    
    public function store() {

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
