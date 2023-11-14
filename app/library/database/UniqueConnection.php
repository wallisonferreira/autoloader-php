<?php

namespace app\library\database;
use PDO;

class UniqueConnection
{
    public static PDO $connection = null;

    public static function getConnection()
    {
        if (!self::$connection) {
            self::$connection = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }
        
        return self::$connection;
    }
}