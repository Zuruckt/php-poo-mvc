<?php

namespace App\Core;
class Database
{
    private \PDO $connection;
    public function __construct()
    {
        $this->connection = new \PDO(
            "pgsql:dbname=todolist;host=192.168.0.102;port=5432",
            "postgres",
            "qwe123",
        );
    }

    public function test(): void
    {
        $statement = $this->connection->prepare("SELECT * FROM teste");

        if ($statement->execute()) {
            dd($statement->fetchAll(\PDO::FETCH_CLASS));
        }
    }
}