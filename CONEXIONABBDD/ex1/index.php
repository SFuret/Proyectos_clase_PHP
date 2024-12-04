<?php 
include_once ('conexion.php');

//creo la conexión

$conexionNueva= establecerConexion();


/*Inserto un elemento en la BBDD*/
$insertar1="insert into Producto values(5,'sujetador',15,50)";
insertar($conexionNueva,$insertar1);

/**/

?>