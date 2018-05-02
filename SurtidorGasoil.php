<?php

require_once("Surtidor.php");

class Surtidorgasoil extends Surtidor{
    var $premium;

    function __construct($precio,$premium){
        parent:: __construct($precio);
        $this->premium=$premium;
    }

    function getPremium(){
        return $this->premium;
    }
    
    function setPremium($premium){
        $this->premium=$premium;
    }
}

