<?php


namespace Application;


use PDO;
use PDOException;

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "pokefidelite";
    private static $dbUsername = "root";
    private static $dbPassword = "";

    private static $connection = null;

    public function __construct()
    {
    }

    public static function connect()
    {
        if (self::$connection == null) {
            try {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbPassword);
            } catch (PDOException $e) {
                self::$connection = null;
                echo $e->getMessage();
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function checkconnexion()
    {
        $connect = self::connect();
        if ($connect == null) {
            return false;
        } else {
            return true;
        }
    }
    public static function disconnect()
    {
        self::$connection = null;
    }
}
