<?php
class Database {
    private $connection;

    public function __construct() {
        // New connection for each request (no pooling)
        $this->connection = new mysqli(
            DB_HOST,
            DB_USER,
            DB_PASS,
            DB_NAME
        );
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Inefficient query method (no prepared statements)
    public function query($sql) {
        return $this->connection->query($sql);
    }
}