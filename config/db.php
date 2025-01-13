<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'blog';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }

        return $this->conn;
    }
}
// Test de connexion
$db = new Database();
$conn = $db->connect();

if ($conn) {
    echo "Connexion réussie à la base de données.";
} else {
    echo "Échec de connexion à la base de données.";
}
