<?php
namespace App\Traits;

use Exception;

trait Create
{    
    public function create(array $data)
    {
        try {

            $sql = "INSERT INTO {$this->table} (". implode(", ", array_keys($data)).") VALUES (:". implode(", :", array_keys($data)).")";

            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute($data);

        } catch (Exception $e) {
            
            var_dump($e->getMessage());
        }

    }
}
