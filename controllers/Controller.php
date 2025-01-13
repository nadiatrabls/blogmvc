<?php
 
abstract Class Controller{

    protected function render(string $view, $data = null){
        //optimisation

        ob_start();
        include("../views/$view.php");
        $contenu = ob_get_clean();
        
        include('../views/template/template.php');

    }

    // public function index(){

    //     include('../views/template/header.php');
    //     include('../views/index.php');
    //     include('../views/template/footer.php');

    // }
}


?>