<?php 
$cadena= "Esto es una cadena";

$partes=explode(" ",$cadena);
echo $partes[0]."<br>";
echo $partes[1]."<br>";
echo $partes[2]."<br>";
echo $partes[3];

$completa= implode(" ",$partes);
echo "<br>".$completa;

//llevar a minuscula
$minuscula= strtolower($completa);
echo "<br>".$minuscula;

//llevar a Mayuscula
$mayuscula=strtoupper($minuscula);
echo "<br>".$mayuscula;

//longitud de una cadena
$longitud= strlen($mayuscula);
echo "<br>".$longitud."<br>";


//quitar espacios en una cadena
$conEspacios= " Hola soy Nueva   ";
$longitudEspacios= strlen($conEspacios);
echo $longitudEspacios."<br>";
$sinEspaciosINICIOyFIN=trim($conEspacios); //quita los espacios de inicio y fin de una cadena
$longitudSinEspacios=strlen($sinEspaciosINICIOyFIN);
echo $longitudSinEspacios."<br>";


//
?>