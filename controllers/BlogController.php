<?php 
include_once('Controller.php');

Class BlogController extends Controller{

    public function index(){
        
        $this->render('blog');
    }

}

?>