<?php

namespace PhpMvc;

use PhpMvc\View;

class Controller {
    
    private $view;
    
    public function __construct() {
        $this->view = New View();
        
    }
 
    
    
    public function index() {
        $this->view->getTemplate('index');
        
    }
    
    public function sobrenos(){
            $this->view->getTemplate('sobrenos');
    }

    public function error404(){
             $this->view->getTemplate('error404');
        
    }
}
