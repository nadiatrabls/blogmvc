<?php
 namespace BlogNadia\controllers;
 
 abstract class Controller {

    protected function render(string $view, $data = null){
        // Si des données sont passées, les extraire comme variables
        if ($data) {
            extract($data);
        }

        ob_start();
        include("../views/$view.php");
        $contenu = ob_get_clean();
        
        // Passer le contenu dans le template
        include('../views/template/template.php');
    }
}
