<?php 


include "vendor/autoload.php";


$controller = new PhpMvc\Controller();


if(!empty($_GET['pages'])){
   $action = $_GET['pages'];
}else{
    $action = "error404";
   }
   
   if(!method_exists($controller,$action));
   
   $controller->$action();
