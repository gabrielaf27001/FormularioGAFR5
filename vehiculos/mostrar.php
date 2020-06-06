<?php
include 'Vehiculos.php';
echo "Probando Herencia";
echo "<br>Cantidad de aceite:<br>";
$Moto= new Moto("4");
echo $Moto->calcAceite("20");