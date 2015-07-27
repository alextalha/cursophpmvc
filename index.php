<?php 


include "./projeto/src/vendor/autoload.php";


$controller = new PhpMvc\Controller();


if(!empty($_GET['pages'])){
   $action = $_GET['pages'];
}else{
    $action = "error404";
   }
   
   $controller->$action();
