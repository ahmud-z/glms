<?php

class Database
{
    private $connection;

    function __construct($host = "localhost", $username = "root", $password = "", $db = "gclassroom_project_testdb")
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    function execute($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);
    }

    function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }

    function lastInsertId(): string|false
    {
        return $this->connection->lastInsertId();
    }
}
