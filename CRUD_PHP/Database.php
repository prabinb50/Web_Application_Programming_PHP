<?php

class Database {
  private $connection;
  private $statement;

  public function __construct() {
    $connectionString = "mysql:host=localhost;dbname=session;port=3307";

    $this->connection = new PDO($connectionString, "root", "", [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
  }

  public function query($sql, $params = []) {
    $this->statement = $this->connection->prepare($sql);

    $this->statement->execute($params);

    return $this;
  }

  public function get() {
    return $this->statement->fetchAll();
  }

  public function find() {
    return $this->statement->fetch();
  }
}