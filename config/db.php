<?php

class Database {

    private static $instance = null;

    private $conn;

    private function __construct() {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=orange_store", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }
    
}