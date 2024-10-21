<?php
namespace App\Traits;

use Exception;


trait Read
{
    public function findAll()
    {        
        try {
            $query = $this->pdo->query("SELECT * FROM {$this->table}");
            
            $indice = 0;

            while ( $users[$indice] = $query->fetch() ) { $indice++; }

            return array_slice($users, 0, -1); // excluí o último elemento, pois vem vazio.

        } catch (Exception $e) {

            var_dump($e->getMessage());
        }
    }

    public function findBy($field, $value)
    {        
        try {
            $sql = "SELECT * FROM {$this->table} WHERE {$field} = :{$field}";

            $stmt =  $this->pdo->prepare($sql);

            $stmt->bindParam(":{$field}", $value);

            $stmt->execute();

            return $stmt->fetch();

        } catch (Exception $e) {

            var_dump($e->getMessage());
        }
    }
}
