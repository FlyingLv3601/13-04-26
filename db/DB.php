<?php

class DB
{
    private static ?PDO $conn = null;

    public static function getConnection(): PDO
    {
        if (self::$conn === null) {
            $host = '192.168.10.62';
            $user = 'store_app';
            $pass = 'password';
            $db   = 'store_dev';

            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

            try {
                self::$conn = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                die("Savienojums neizdevās: " . $e->getMessage() . "\n");
            }
        }

        return self::$conn;
    }

    public static function query(string $sqlQuery): PDOStatement
    {
        if (self::$conn === null) {
            self::getConnection();
        }
        return self::$conn->query($sqlQuery);
    }
}