<?php

namespace app\library\database;
use PDO;

class Connection
{
    public static ?PDO $connection = null;

    /**
     * Retorna uma conexão do tipo PDO.
     * 
     * @return PDO
     */
    public static function getConnection()
    {
        if (!self::$connection) {
            self::$connection = new PDO("mysql:host=localhost;dbname=blog","root","root", [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

        return self::$connection;
    }
}