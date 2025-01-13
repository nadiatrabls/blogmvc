<?php
require_once __DIR__ . '/../models/Article.php';

class BlogController extends Controller {

    // Méthode pour afficher la liste des articles
    public function index() {
        // Créez une instance de la classe Article
        $articleModel = new Article();
        // Récupérez tous les articles
        $articles = $articleModel->getAll();
    
        // Passez les articles à la vue 'blog'
        $this->render('blog', ['articles' => $articles]);
    }
}

