<?php 
include('../models/conexion.php');


class modelProductos{

public static function insertarProducto($n, $p)
{
$query="INSERT into producto(id,nombre,precio) VALUES (?,?)";
$conexion=Conexion::establecerConexion();
$consulta=$conexion->prepare($query);
$consulta->bind_param("ss",$n,$p);
$resultado=$consulta->execute();
Conexion::cerrarConexion();
return $resultado;
}

public function mostrarTodos()
{
    $query="SELECT * from producto";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->execute();
    $resultado=$consulta->get_result()->fetch_all();
    Conexion::cerrarConexion();
    return $resultado;
}


}





?>