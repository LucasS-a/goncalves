<?php
namespace App\DB\Models;

use App\Traits\Read;
use App\DB\Conection;
use App\Traits\Create;
use App\Traits\Delete;
use App\Traits\Update;

abstract class Model {
    
    private $pdo;
    private $table;

    public function __construct($table)
    {
        $this->pdo = Conection::conection();
        $this->table = $table;
    }

    use Read, Create, Update, Delete;
}