<?php

namespace Config;

use mysqli;

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbName = 'mi_base_datos';
    private $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->dbName);

        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }

        $this->connection->set_charset("utf8mb4");
    }

    public function getConnection() {
        return $this->connection;
    }

    public function __destruct() {
        $this->connection->close();
    }
}
?>

