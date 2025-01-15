<?php 

include "conexion.php";

class modelLogin{

public static function comprobarUsuario($user, $pass)
{
    $query="SELECT * FROM usuarios WHERE usuario=? AND password=?";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("ss",$user, $pass);
    $consulta->execute();
    $resultados=$consulta->get_result()->fetch_assoc(); /*solo devuelve un valor*/
    Conexion::cerrarConexion();
    return $resultados;

}

}



?>