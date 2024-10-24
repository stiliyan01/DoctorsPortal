<?php

$config = require 'config.php';
class Database{
    public  $connection;

    public  $statement;
    public function __construct($config){
        $this->connection = new PDO(getDsn($config), $config["username"], $config['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC,
        ]);
    }

    public function query($sql, $params = []){
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);

        return $this;
    }

  
}

$db = new Database($config['database']);