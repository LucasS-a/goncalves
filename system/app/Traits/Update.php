<?php
namespace App\Traits;

use Exception;

trait Update
{
    public function update($field, $value, array $data)
    {

        try {
            $sql = "UPDATE {$this->table} SET (" . implode(", ", array_keys($data)) . " ) = (:". implode(", :", array_keys($data)) . ")
                    WHERE " .strtoupper($field) ." = :" . strtoupper($field); // Coloquei o strtoupper($field) para ficar em letra maiúsculo, e diferenciar-se de campos parecidos quando fizer o merge.

            $stmt = $this->pdo->prepare($sql);

            $bind = array_merge($data, [strtoupper($field) => $value]);

            return $stmt->execute($bind);


        } catch (Exception $e) {
            
            var_dump($e->getMessage());
        }

    }
}