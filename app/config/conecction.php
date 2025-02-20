<?php


class Connection
{

    public $host = 'localhost';
    public $dbname = 'crud-php';
    public $port = '3306';
    public $user = 'root';
    public $password = '';
    public $driver = 'mysql';
    public $connect;

    public static function getConnection()
    {
        try {

            $connection = new Connection();
            $connection->connect = new PDO("{$connection->driver}:host={$connection->host};port=
            {$connection->port};dbname={$connection->dbname}", $connection->user, $connection->password);
            $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "conexion exitosa";
            return $connection->connect;
        } catch (PDOException $e) {
            echo "Error: ", $e->getMessage();
        }
    }
}


Connection::getConnection();
