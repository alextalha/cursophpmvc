<?php

include "vendor/autoload.php";

$controller = new PhpMvc\Controller();

if (!empty($_GET['pages']))
    $action = $_GET['pages'];
else
    $action = "index";

if(!method_exists($controller, $action))
        $action = 'error404';

$controller->setAction($action);

if (!empty($_GET['nome']))
    $controller->$action($_GET['nome']);
 else
    $controller->$action();
