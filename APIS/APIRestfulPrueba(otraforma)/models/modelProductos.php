<?php 
include "conexion.php";
class modelProductos{

public static function insertarProducto($nombre, $precio)
{
    $query="INSERT INTO producto(nombre, precio) VALUES (?,?)";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("sd",$nombre,$precio);
    $resultado=$consulta->execute();
    Conexion::cerrarConexion();
    return $resultado;

}

public static function eliminarProducto($id)
{
    $query="DELETE FROM producto WHERE id=?";
    $conexion= Conexion::establecerConexion();
    $consulta= $conexion->prepare($query);
    $consulta->bind_param("i",$id);
    $resultado=$consulta->execute();
    Conexion::cerrarConexion();
    return $resultado;
}

public static function UpdateProducto($id,$nombre,$precio)
{
    $query="UPDATE producto SET nombre=?,precio=? WHERE id=?";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("sdi",$nombre,$precio,$id);
    $resultado=$consulta->execute();
    Conexion::cerrarConexion();
    return $resultado;
}

public static function devolverUnProducto($id)
{
    $query="SELECT * from producto where id=?";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("i",$id);
    $consulta->execute();
    $producto=$consulta->get_result()->fetch_assoc();
    Conexion::cerrarConexion();
    return $producto;
}

public static function devolverProductos()
{
    $query="SELECT * FROM producto";
    $conexion= Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->execute();
    $productos=$consulta->get_result()->fetch_all();
    Conexion::cerrarConexion();
    return $productos;
    
}




}
?>