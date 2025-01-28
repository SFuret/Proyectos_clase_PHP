<?php
include "conexion.php";
//Nota:  hago $resultados=$consulta->get_result()->fetch_assoc();  cuando solo espero un valor y $resultados=$consulta->get_result()->fetch_all(MYSQLI_ASSOC);  
//Si no encuentra nada devuelve null
class modelProductos{

public static function listarProductos()
{
    $query="SELECT * FROM producto";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->execute();
    $resultados=$consulta->get_result()->fetch_all(MYSQLI_ASSOC); //devuelve todos los valores
    Conexion::cerrarConexion();
    return $resultados;

}


}



?>