<?php 
include "conexion.php";

class modelLogin{

public static function loguearse($user, $pass)
{
    $query="SELECT * from usuarios where usuario=? and password=? ";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("ss",$user,$pass);
    $consulta->execute();
    $resultados=$consulta->get_result()->fetch_assoc();
    Conexion::cerrarConexion();
    return $resultados;
}




}




?>