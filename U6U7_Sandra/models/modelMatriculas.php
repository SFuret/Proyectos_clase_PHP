<?php 
include "conexion.php";

class modelMatriculas{

    public static function mostrarTodasMatriculas()
{
    $query="SELECT * FROM matriculas";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->execute();
    $resultados=$consulta->get_result()->fetch_all(MYSQLI_ASSOC);
    Conexion::cerrarConexion();
    return $resultados;
}

public static function insertarMatricula($nia,$codigo,$anyo)
{
    $query="INSERT INTO matriculas(nia, codigo, año) VALUES (?,?,?)";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("iii",$nia,$codigo,$anyo);
    $resultado=$consulta->execute();   
    Conexion::cerrarConexion();
    return $resultado;
}

public static function eliminarMatricula($nia,$codigo)
{
    $query="DELETE FROM matriculas WHERE nia=?and codigo=?";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("ii",$nia,$codigo);
    $resultado=$consulta->execute();   
    Conexion::cerrarConexion();
    return $resultado;
}

}


?>