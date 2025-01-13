<?php
require_once __DIR__ . '/../config/db.php';

class Article {
    private $conn;

    // Constructeur : Connexion à la base de données
    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Méthode pour récupérer tous les articles de la base de données
    public function getAll() {
        $query = "SELECT * FROM articles"; // Requête SQL pour récupérer tous les articles
        $stmt = $this->conn->prepare($query);
        $stmt->execute(); // Exécution de la requête
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourne les résultats sous forme de tableau associatif
    }
}
?>
