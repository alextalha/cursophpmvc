<?php

namespace PhpMvc;

use PhpMvc\View;

class Controller {
    
    private $view;
    
    public function __construct() {
        $this->view = New View();
        
    }
 
    
    public function setAction($action)
    {
      $this->view->setTemplate($action);
      
    }
   
    
    public function nome($nome){
        $this->view->setData(array('nome' => $nome));
        
    }
    
    public function index() 
    {
        
    }
    
    public function sobrenos()
    {
        
    }
    

    public function error404()
    {
        
       
    }
}
