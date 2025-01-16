<?php

require '../vendor/autoload.php';

use BlogNadia\Controllers\Controller;
use BlogNadia\Controllers\BlogController;
use BlogNadia\Controllers\AboutController;
use BlogNadia\Controllers\AccueilController;
use BlogNadia\Controllers\ContactController;

use app\Autoloader;

$url=($_GET['url'])??'';

if($url=='contact'){
   
    $ctrl= new ContactController;
}
elseif($url=='about'){
      $ctrl= new AboutController;          
}
elseif($url=='blog'){
      $ctrl= new BlogController;
}
else {
       $ctrl= new AccueilController;
}


$ctrl->index();









