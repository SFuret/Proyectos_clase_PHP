<?php 
date_default_timezone_set('Europe/Madrid');
$fechaNacimiento = new DateTime('1985-08-09'); 
$fechaActual= new DateTime(); //fecha actual

//Convierto de fecha a segundos
$formato = 'Y-m-d H:i:s';
$fechaNac_string = $fechaNacimiento->format($formato); //convierto a String 
$segundosFechaNac=strtotime($fechaNac_string); //calculo cant de segundos desde el 1 de enero de 1970

$fechaActual_string = $fechaActual->format($formato); //convierto a String 
$segundosFechaActual=strtotime($fechaActual_string); //calculo cant de segundos desde el 1 de enero de 1970 hasta la fecha actual


$edadSegundos= $segundosFechaActual-$segundosFechaNac; //Cantidad de segundos desde mi nac hasta ahora

$cantidadAnyos= round($edadSegundos/(365*24*60*60));  //dias en 1 año * horas en 1 mes * minutos en 1 hora * segundos en 1 minutos
$cantidadMeses= round($edadSegundos/(30*24*60*60));//dias en 1 mes * horas en 1 mes * minutos en 1 hora * segundos en 1 minutos
$cantidadDias= round($edadSegundos/(24*60*60));

echo "Fecha de nacimiento: $fechaNac_string <br>";
echo "Han transcurrido: <br>";
echo "$cantidadAnyos años<br>";
echo "$cantidadMeses meses <br>";
echo "$cantidadDias días";
?>