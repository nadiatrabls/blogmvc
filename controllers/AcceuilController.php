<?php

require_once __DIR__ . '/../models/Article.php';

class AcceuilController extends Controller {

    public function index() {
        $article = new Article();
        $articles = $article->getAll(); // Récupère tous les articles
        $this->render('index', ['articles' => $articles]);
    }
}
?>
