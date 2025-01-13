<?php 
include_once('../controllers/Controller.php');

if(isset($_GET['url']) && $_GET['url'] == 'blog' ){
    // 1: inclu le fichier  
    include_once('../controllers/BlogController.php');
    // 2: cree l'objet 
    $ctrl = new BlogController;
}elseif(isset($_GET['url']) && $_GET['url'] == 'contact' ){
    include_once('../controllers/ContactController.php');
    $ctrl =  new ContactController;
}elseif(isset($_GET['url']) && $_GET['url'] == 'about' ){
    include_once('../controllers/AboutController.php');
    $ctrl = new AboutController;
}else{
    include_once('../controllers/AcceuilController.php');
    $ctrl = new AcceuilController;
}

// 3: on affiche
$ctrl->index();

// $url = ($_GET['page'])??'';

?>







