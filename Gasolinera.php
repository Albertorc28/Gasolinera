<?php

require_once("Cliente.php");
require_once("Empleado.php");
require_once("SurtidorGasolina.php");
require_once("SurtidorGasoil.php");

class Gasolinera{
    var $ciudad;
    var $marca;
    var $clientes;
    var $empleados;
    var $surtidores;

    function __construct ($ciudad,$marca){
        $this->ciudad=$ciudad;
        $this->marca=$marca;
        $this->clientes= array();
        $this->empleados= array();
        $this->surtidores= array();
    }

    function getCiudad(){
        return $this->ciudad;
    }

    function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }

    function getMarca (){
        return $this->marca;
    }

    function setMarca ($marca){
        $this->marca = $marca;
    }

    function altaCliente($cliente){
        $this->clientes[]=$cliente;
    }

    function altaEmpleado($empleado){
        $this->empleados[]=$empleado;
    }

    function anadirSurtidor($surtidor){
        $this->surtidor[]=$surtidor;
    }

    function mostrar (){
        echo "Ciudad: ".$this->getCiudad();
        echo "<br>";
        echo "Marca: ".$this->getMarca();
        echo "<br>";
        for ($i=0;$i<count($this->clientes);$i++){
            if($this->clientes[$i]!=null){
            $this->clientes[$i]->mostrar();
            }
            echo "<br>";
        }
    }

    function bajaCliente($cif){
        $enc = false;
        for ($i = 0; $i < count ($this->clientes) && ($enc == false); $i++){
            if ($cif == $this->clientes[$i]->getCif()){
                    $this->clientes[$i] = null;
                    $enc = true;
            }
        }
    }

    function bajaEmpleado($nombre){
        $enc = false;
        for ($i = 0; $i < count ($this->empleados) && ($enc == false); $i++){
            if ($nombre == $this->empleados[$i]->getNombre()){
                    $this->empleados[$i] = null;
                    $enc = true;
            }
        }
    }
}


