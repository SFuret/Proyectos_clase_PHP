<?php 
include "conexion.php";

class modelProducto{

public static function mostrarProductos()
{
    $query= "SELECT * from producto";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->execute();
    $resultado=$consulta->get_result()->fetch_all(MYSQLI_ASSOC);
    Conexion::cerrarConexion();
    return $resultado;

}

public static function mostrarProducto($id)
{
    $query="SELECT * from Producto where id=$id";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("i",$id);
    $consulta->execute();
    $resultado=$consulta->get_result()->fetch_assoc();
    Conexion::cerrarConexion();
    return $resultado;
}

public static function insertarProducto($nombre,$precio)
{
    $query= "INSERT INTO producto(nombre, precio) VALUES (?,?)";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("sd",$nombre,$precio);
    $resultado=$consulta->execute();
    Conexion::cerrarConexion();
    return $resultado;
}


public static function actualizarProducto($id,$nombre,$producto)
{
    $query="UPDATE producto SET nombre=?,precio=? WHERE id=?";
    $conexion=Conexion::establecerConexion();
    $consulta=$conexion->prepare($query);
    $consulta->bind_param("sdi",$nombre,$precio,$id);
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
}







?>