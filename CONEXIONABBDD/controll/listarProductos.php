<?php 
include "../model/conexion.php";/*Incluyo al modelo*/

//establezco conexión a la BBDD
$conect= establecerConexion();

$consulta= "SELECT `codProducto`, `nombre`, `precio`, `cantidad` FROM `Producto`";

//hago consulta y obtengo el array con los resultados
$productos=obtenerValores($conect, $consulta);

//incluyo la vista que va a tratar esos valores que en este caso es el index de la página
include "../index.php";


?>