<?php 
include_once('../controllers/AcceuilController.php');
include_once('../controllers/BlogController.php');
include_once('../controllers/AboutController.php');
include_once('../controllers/ContactController.php');


$url = '';
$acceuil = new AcceuilController;
$blog = new BlogController;
$about = new AboutController;
$contact = new ContactController;

if(isset($_GET['url']) && $_GET['blog'] == 'blog' ){
    echo render('blog');
// } else if(isset($_GET['url'])){
//     echo $about->render('about');
// } else if(isset($_GET['url'])){
//     echo $contact->render('contact');
// } else{
//     echo $acceuil->render('acceuil');
}

var_dump($url);

// if(isset($_GET['url'])){
//     echo $this->render('contact');
// }

// if($url == ''){
//     echo "oui oui baguette";
// }


?>