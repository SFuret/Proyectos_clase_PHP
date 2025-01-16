<?php 
include "conexion.php";
class modelProducto{

public static function listarProductos()
{
$query= "SELECT * from producto";
$conexion= Conexion::establecerConexion();
$consulta=$conexion->prepare($query);
$consulta->execute();
$resultados=$consulta->get_result()->fetch_all(MYSQLI_ASSOC);
Conexion::cerrarConexion();
return $resultados;
}

public static function insertar($nombre,$precio)
{
    $query= "INSERT INTO producto(nombre, precio) VALUES (?,?)";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("sd",$nombre,$precio);
    $resultado=$consulta->execute();
    Conexion::cerrarConexion();
    return $resultado;
}

public static function eliminar($id)
{
$query="DELETE from producto where id=?";
$conexion=Conexion::establecerConexion();
$consulta=$conexion->prepare($query);
$consulta->bind_param("i",$id);
$resultado=$consulta->execute();
$conexion=Conexion::cerrarConexion();
return $resultado;
}
}


?>