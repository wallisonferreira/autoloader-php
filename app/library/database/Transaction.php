<?php

namespace app\library\database;
use PDO;

class Transaction
{
    private ?PDO $conn = null;

    public static function open()
    {
        self::$conn = Connection::getConnection();
        self::$conn->beginTransaction();
    }

    public static function rollback()
    {
        if (self::$conn) {
            self::$conn->rollBack();
        }
    }
    public static function close()
    {
        if (self::$conn) {
            self::$conn = null;
        }
    }
}