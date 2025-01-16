<?php
namespace BlogNadia\models;

use app\Database;

class Article
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Récupérer tous les articles
    public function getAll()
    {
        return $this->db->query('SELECT * FROM articles');
    }
}
?>
