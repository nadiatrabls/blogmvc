<?php 

include_once('Controller.php');

Class AboutController extends Controller {
    
    public function index(){
        $this->render('about');
        
    }
}