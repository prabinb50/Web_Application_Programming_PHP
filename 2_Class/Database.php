<?php

class Database {
    private $connection;

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
        return $statement;
    }
}



class Database {
    private $connection;

    public function __construct(){
        try {
            $connectionString = "mysql:host=localhost;dbname=crud_operation;port=3306";
            $this->connection = new PDO($connectionString, "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enables exception handling
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Default fetch mode
            ]);
            echo "Connection successfully created";
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = []){
        try {
            $statement = $this->connection->prepare($sql);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function closeConnection() {
        $this->connection = null;
    }
}
