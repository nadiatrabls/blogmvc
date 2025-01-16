<?php
namespace BlogNadia\controllers;

use BlogNadia\models\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->getAll();

        // Passez les articles à la vue
        $this->render('blog', ['articles' => $articles]);
    }
}

