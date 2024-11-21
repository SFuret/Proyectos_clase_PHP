<?php 
$edad=39;

//levar a milisegundos
$edadMilSegundos= $edad*(365*24*60*60);

/*echo 'Han trasncurrido '.$edadMilSegundos.'desde mi nacimiento';

$edadAños= $edadMilSegundos/(365*24*60*60);

echo 'Han trasncurrido '.$edadAños.'desde mi nacimiento';
*/

$anno_actual= date('Y');

$annoNacimiento=$anno_actual-$edad;

echo " Ha nacido en el año $annoNacimiento <br>";
echo "Dentro de 10 años, en el ".($anno_actual+10)." tendrá".$edad+10;
echo "<br>";
echo "Hace 10 años tenía ".$edad-10;



?>


