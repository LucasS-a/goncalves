<?php
namespace App\DB\Models;


class User extends Model
{    
    private $table = 'tb_users';

    public function __construct()
    {
        parent::__construct($this->table);
    
    }
        
}