<?php 
include "conexion.php";

class modelAsignatura{

    public static function mostrarTodasAsignaturas()
{
    $query="SELECT * FROM asignaturas";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->execute();
    $resultados=$consulta->get_result()->fetch_all(MYSQLI_ASSOC);
    Conexion::cerrarConexion();
    return $resultados;
}


}


?>