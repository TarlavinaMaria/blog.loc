<?php

class DB
{
    private $conn;
    private PDOStatement $stmt;
    private static $instance = null;
    private function __construct()
    {
    }
    private function __clone()
    {

    }
    public function __wakeup()
    {

    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getConnection(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}"; // соединение с БД
        // Подключение к БД
        try {
            $this->conn = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
            return $this;
        } catch (PDOException $e) {
            abort(500);
        }
    }
    public function query($query, $params = [])
    {
        $this->stmt = $this->conn->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }
    public function findAll()
    {
        return $this->stmt->fetchAll();
    }
    public function find()
    {
        return $this->stmt->fetch();
    }
    public function findOrAbort()
    {
        $res = $this->find();
        if (!$res) {
            abort(404);
        }
        return $res;
    }
}


?>