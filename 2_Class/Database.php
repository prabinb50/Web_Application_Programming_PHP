<?php

class Database {
    private $connection;
    private $statement;

    public function __construct(){
        $connectionString = "mysql:host=localhost;
        dbname=prabin;port=3307";

        $this->connection = new PDO($connectionString, "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($sql, $params = []){
        $statement = $this->connection->prepare($sql);

        $statement->execute($params);
        return $this;
    }
}

