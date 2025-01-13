<?php 

include_once('Controller.php');

Class ContactController extends Controller {

    public function index(){
        $this->render('contact');
    }
}