<?php
// models/User.php
class User {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllUsers() {
        // Placeholder method
        return [];
    }
}
?>