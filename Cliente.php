<?php

require_once("Persona.php");
require_once("Repostaje.php");

class Cliente extends Persona{
    var $cif;
    var $repostajes;

    function __construct($nombre,$cif){
        parent:: __construct($nombre);
        $this->cif= $cif;
        $this->repostajes= array();
    }

    function getCif(){
        return $this->cif;
    }
    
    function setCif($cif){
        $this->cif=$cif;
    }

    function anadirRepostaje1($repostaje){
        $this->repostajes[]= $repostaje;
    }

    /*function anadirRepostaje2($litros,$fecha){
        $aux = new Repostaje($litros,$fecha);
        $this->repostajes[]=$aux;
    }*/

    function mostrar(){
        parent:: mostrar();
        echo "<br>";
        echo "Cif: ".$this->getCif();
        for ($i=0;$i<count($this->repostajes);$i++){
            $this->repostajes[$i]->mostrar();
        }
    }
}