<?php

namespace PhpMvc;


class View {
    
    public $template;
    
    public function __construct(){
        
    }
    
    public function setTemplate($template){
        $this->template = $template;
    }
    
    
    public function getTemplate($template){
        $file =  "view/pages/".$template.".phtml";
        
        if(file_exists($file)){
           include $file;
        }else{
            include 'view/pages/error404.phtml';
        }
        
    }
    
//    public function __destruct(){
//        $file = 'view/pages/'.$this->template.".phtml";
//        
//       
//    }
    
}

