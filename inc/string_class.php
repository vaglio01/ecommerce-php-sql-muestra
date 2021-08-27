<?php

class Strings{

    private $cad="";
    function input_string($variable){
        $this->cad=$variable;
    }
    
    function clear_spaces(){
        $this->cad=trim($this->cad);
    }

    function add_forward($text){
        $this->cad=$text.$this->cad;
    }

    function add_backward($text){
        $this->cad=$this->cad.$text;
    }

    function prepare_SQL(){
        return addslashes($this->cad);        
    }

    function prepare_HTML(){
        // Convierte caracteres especiales
        // return htmlspecialchars($this->cad);
        
        // Convierte las entidades por las de escape.
        return htmlentities($this->cad);
    }

    function show_cad(){
        return $this->cad;
    }

}


?>