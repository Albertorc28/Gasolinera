<?php

require_once("Gasolinera.php");

$gaso1= new Gasolinera("Badajoz","Repsol");

$c1= new Cliente("Pepe","0932923X");

$e1= new Empleado("Antonio","04433904V");

$repo1= new Repostaje(40,"2018-04-02");

/*$s1=new Surtidorgasolina(1.40 , "95");

$s2=new Surtidorgasoil(1.15 , true);*/

$c2= new Cliente("Juan","3849773S");

$e2= new Empleado("Aurelio","89448349P");


$gaso1->altaCliente($c1);

$gaso1->altaCliente($c2);

$gaso1->altaEmpleado($e1);

$gaso1->altaEmpleado($e2);

//Llamando a la función Repostaje1\\
$c1->anadirRepostaje1($repo1);

//Llamando a la función Repostaje2\\
//$c1->anadirRepostaje2($repo1);

/*$gaso1->anadirSurtidor($s1);
$gaso1->anadirSurtidor($s2);*/

$gaso1->bajaCliente("0932923X");

$gaso1->bajaEmpleado("Aurelio");

$gaso1->mostrar();



$s1= new Surtidorgasolina(1.40,"95");
$s2= new Surtidorgasolina(1.40,"95");
$s3= new Surtidorgasolina(1.40,"95");
$s4= new Surtidorgasoil(1.15,false);
$s5= new Surtidorgasoil(1.15,false);
$s6= new Surtidorgasoil(1.15,false);

$gaso1->anadirSurtidor($s1);
$gaso1->anadirSurtidor($s2);
$gaso1->anadirSurtidor($s3);
$gaso1->anadirSurtidor($s4);
$gaso1->anadirSurtidor($s5);
$gaso1->anadirSurtidor($s6);



echo"<pre>";
print_r ($gaso1);
echo"</pre>";
