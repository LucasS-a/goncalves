<?php
namespace App\Traits;

use Exception;

trait Delete
{
    public function delete(array $who)
    {

        try {
            $sql = "DELETE FROM {$this->table} WHERE ". array_keys($who)[0] ." = :". array_keys($who)[0];

            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute($who);


        } catch (Exception $e) {
            
            var_dump($e->getMessage());
        }

    }
}