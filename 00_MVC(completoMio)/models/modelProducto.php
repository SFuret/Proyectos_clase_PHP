<?php 
include "conexion/conexion.php";
class modelProducto{

public static function insertarProducto($producto)
{
// $query=INSERT INTO Producto(codProducto, nombre, precio,cantidad) VALUES (,'[value-2]','[value-3]','[value-4]')

}

public static function mostrarTodos()
{
$query="SELECT * FROM Producto";
Conexion::establecerConexion();
$arrayResultados=Conexion::devolverValores($query);
Conexion::cerrarConexion();
return $arrayResultados;
}

public static function eliminarProducto($id)
{
    $query="DELETE FROM Producto WHERE codProducto=$id";
    Conexion::establecerConexion();
    $result=Conexion::hacerConsulta($query);
    Conexion::cerrarConexion();
    return $result;
}

};

?>