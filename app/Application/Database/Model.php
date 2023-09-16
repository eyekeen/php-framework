<?php

namespace App\Application\Database;

class Model extends Connection {
    
    protected int $id;
    protected string $created_at;
    protected string $updated_at;
    protected array $fields = [];

    public function store() {
        
        foreach ($this->fields as $field) {
            
        }
        
        $query = "insert into `reports` (`email`, 
            `subject`, 
            `message`)
            values (:email, :subject, :message)";

        $stmt = $this->connect()->prepare($query);

        $stmt->execute([
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ]);
    }
}
