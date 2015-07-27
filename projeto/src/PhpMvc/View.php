<?php

namespace PhpMvc;


class View {
    
    private $template,$data;
    
    public function __construct(){
        
    }
    
    public function setData($data){
        $this->data = $data;
        
    }
    
    public function setTemplate($template){
        $this->template = $template;
    }
    
    
    public function __destruct(){
        $file =  "view/pages/".$this->template.".phtml";
        
        if(file_exists($file)){
           include $file;
        }else{
            include 'view/pages/index.phtml';
        }
        
    }
    
}

