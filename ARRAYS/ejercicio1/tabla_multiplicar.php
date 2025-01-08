<?php 
$tablaMultiplicar=[];
/*
Forma manual
tabla del 0

$tablaMultiplicar[0][1]=0;
$tablaMultiplicar[0][2]=0;
$tablaMultiplicar[0][3]=0;
$tablaMultiplicar[0][4]=0;
$tablaMultiplicar[0][5]=0;
$tablaMultiplicar[0][6]=0;
$tablaMultiplicar[0][7]=0;
$tablaMultiplicar[0][8]=0;
$tablaMultiplicar[0][9]=0;
$tablaMultiplicar[0][10]=0;

//tabla del 1

$tablaMultiplicar[1][1]=1;
$tablaMultiplicar[1][2]=2;
$tablaMultiplicar[1][3]=3;
$tablaMultiplicar[1][4]=4;
$tablaMultiplicar[1][5]=5;
$tablaMultiplicar[1][6]=6;
$tablaMultiplicar[1][7]=7;
$tablaMultiplicar[1][8]=8;
$tablaMultiplicar[1][9]=9;
$tablaMultiplicar[1][10]=10;

...
*/

//Muestra las tablas del 0 al 10
for ($i=0; $i <11; $i++) { 
    //$tablaMultiplicar[$i]=$i;

   for ($j=1; $j <11; $j++) { 
    $tablaMultiplicar[$i][$j]=$i*$j; //rellenar array

   }
}

//print_r($tablaMultiplicar);
?>