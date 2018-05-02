<?php

class Persona{
    var $nombre;

    function __construct ($nombre){
        $this->nombre = $nombre;
    }    
     
    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nommbre = $nombre;
    }

    function mostrar(){
        echo "Nombre: ".$this->getNombre();
    }
}