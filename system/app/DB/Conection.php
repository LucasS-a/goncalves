<?php

namespace App\DB;

use Exception;
use PDO;

class Conection
{
    
    private static $pdo = null;

    public static function conection()
    {

        if (self::$pdo) {
            return self::$pdo;
        }

        try {

            $conf = "pgsql:" .
                    "host=" . getenv('DB_HOST') . 
                    ";port=" . getenv('DB_PORT') .
                    ";dbname=".getenv('DB_DATABASE');

            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

            self::$pdo = new PDO($conf, getenv('DB_USERNAME'), getenv('DB_PASSWORD'), $options);

            return self::$pdo;

        } catch (Exception $e) {

            var_dump($e->getMessage());
        }
    }
    
}