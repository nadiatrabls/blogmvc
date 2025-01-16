<?php
namespace app;

use PDO;
use PDOException;

class Database
{
    private $dsn = "mysql:dbname=blog;host=localhost";
    private $login = "root";
    private $password = "";
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->login, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    // Méthode pour exécuter des requêtes simples
    public function query($query)
    {
        try {
            return $this->pdo->query($query)->fetchAll();
        } catch (PDOException $e) {
            die("Erreur dans la requête SQL : " . $e->getMessage());
        }
    }

    // Méthode pour exécuter des requêtes préparées
    public function prepare($query, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Erreur dans la requête préparée : " . $e->getMessage());
        }
    }
}
?>
