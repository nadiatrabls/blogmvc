<?php 

namespace autoloader;

class Autoloader{

    static function register(){
      spl_autoload_register(array(__CLASS__,'autoload'));
    }
  
    public static function autoload($class_name){

      $tab = explode("\\", $class_name);

      $class_name = $tab[1];
  
      if(stripos($class_name, 'Controller') OR $class_name == ' Controller'){
  
        require '../src/controllers/' . $class_name . '.php';
      }
      elseif(stripos($class_name, 'Model')){
  
        require '../src/models/' . $class_name . '.php';
      }
    }
  }
  



?>