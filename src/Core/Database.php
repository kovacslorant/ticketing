<?php

namespace Smith\Ticketing\Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if(self::$connection === null) {
            $host = 'localhost';
            $dbname = 'ticket_ai';
            $user = 'root';
            $pass = '';

            try{
                self::$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e){
                die("DB error " . $e->getMessage());
            }
        }

        return self::$connection;
    }
}