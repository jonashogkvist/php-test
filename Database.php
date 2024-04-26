<?php
require "config.php";
class Database
{
    public PDO $connection;
    public function __construct()
    {
        global $DB_USERNAME, $DB_PASSWORD;
        $dsn = "mysql:host=localhost;port=33061;dbname=myapp;charset=utf8mb4";
        $this->connection = new PDO($dsn, $DB_USERNAME, $DB_PASSWORD);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}