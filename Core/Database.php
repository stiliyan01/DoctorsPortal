<?php

class Database {
    private static $instance = null;
    public $connection;
    public $statement;

    private function __construct($config) {
        $this->connection = new PDO(
            getDsn($config),
            $config["username"],
            $config['password'],
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }

    public static function getInstance($config) {
        if (self::$instance === null) {
            self::$instance = new Database($config['database']);
        }
        return self::$instance;
    }

    public function query($sql, $params = []) {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);
        return $this;
    }
}