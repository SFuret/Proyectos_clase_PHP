
<?php 
$fechaNac= new DateTime('24-02-1981');
$fechaActual= new DateTime();

//Pongo en el formato que entiende la funcion de convertir a milisegundos
$formatoFecha= 'Y-m-d H:i:s';
$fechaNac= $fechaNac->format($formatoFecha);
$fechaActual=$fechaActual->format($formatoFecha);

//Llevo a milisegundos
$fechaNacMil=strtotime($fechaNac);
$fechaActMil= strtotime($fechaActual);

//calculo la diferencia para tener el tiempo transcurrido
$desdeNac= $fechaActMil-$fechaNacMil;


//convierto a años, meses y días

$años= floor($desdeNac/(365*24*60*60));
$meses=intdiv($desdeNac,(24*60*60));
$dias=round($desdeNac/(60*60));

echo "Han transcurrido $años años, $meses meses y $dias días";

?>