<?php
 
Class Controller{

    public function render(string $view, $data = null){

        ob_start();
        include('../views/'.$view.'.php');
        
        include("../views/$view.php");
        include('../views/template/footer.php');

    }

    // public function index(){

    //     include('../views/template/header.php');
    //     include('../views/index.php');
    //     include('../views/template/footer.php');

    // }
}


?>