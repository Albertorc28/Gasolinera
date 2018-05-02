<?php

require_once("Surtidor.php");

class Surtidorgasolina extends Surtidor{
    var $octanage;

    function __construct($precio,$octanage){
        parent:: __construct($precio);
        $this->octanage=$octanage;
    }

    function getOctanage(){
        return $this->octanage;
    }
    
    function setOctanage($octanage){
        $this->octanage=$octanage;
    }
}
