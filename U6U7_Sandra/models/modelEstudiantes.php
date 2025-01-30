<?php 
include "conexion.php";

class modelEstudiante{

public static function mostrarTodosEstudiantes()
{
    $query="SELECT * FROM alumnos";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->execute();
    $resultados=$consulta->get_result()->fetch_all(MYSQLI_ASSOC);
    Conexion::cerrarConexion();
    return $resultados;
}


}


?>