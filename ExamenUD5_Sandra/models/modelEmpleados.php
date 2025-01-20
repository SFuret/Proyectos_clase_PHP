<?php 
include "conexion.php";

class modelEmpleados{


public static function mostrarTodos()
{
$query= "SELECT * from empleados";
$conexion= Conexion::establecerConexion();
$consulta=$conexion->prepare($query);
$consulta->execute();
$resultados= $consulta->get_result()->fetch_all(MYSQLI_ASSOC); /*devuelvo los datos en un array asosiativo */
Conexion::cerrarConexion();
return $resultados;
}    

public static function mostrarUnEmpleado($id)
{
$query= "SELECT * from empleados where id=?";
$conexion= Conexion::establecerConexion();
$consulta=$conexion->prepare($query);
$consulta->bind_param("i",$id);
$consulta->execute();
$resultados= $consulta->get_result()->fetch_assoc(); 
Conexion::cerrarConexion();
return $resultados;
}    


public static function insertarEmpleado($nombre,$apellido,$salario,$fecha,$puesto)
{
$query= "INSERT INTO empleados (nombre,apellido,salario,fecha_contratacion,puesto) VALUES (?,?,?,?,?)"; /*variable con la consulta */
$conexion= Conexion::establecerConexion(); /*me conecto a la BBDD */
$consulta=$conexion->prepare($query); /*preparo la consulta*/
$consulta->bind_param("ssdss",$nombre,$apellido,$salario,$fecha,$puesto); /*le indico de que tipo son los parámetros que va a recibir y en que orden */
$insertado=$consulta->execute(); /*ejecuto la consulta*/
Conexion::cerrarConexion();/*cierro la conexión */
return $insertado;
}    


public static function actualizarEmpleado($id,$nombre,$apellido,$salario,$fecha,$puesto)
{
$query= "UPDATE empleados SET nombre=?,apellido=?,salario=?,fecha_contratacion=?,puesto=? WHERE id=? ";
$conexion= Conexion::establecerConexion();
$consulta=$conexion->prepare($query);
$consulta->bind_param("ssdssi",$nombre,$apellido,$salario,$fecha,$puesto,$id);
$actualizado=$consulta->execute();
Conexion::cerrarConexion();
return $actualizado;
}   

public static function eliminarEmpleado($id)
{
$query= "DELETE FROM empleados WHERE id=?";
$conexion= Conexion::establecerConexion();
$consulta=$conexion->prepare($query);
$consulta->bind_param("i",$id);
$eliminado=$consulta->execute();
Conexion::cerrarConexion();
return $eliminado;
}  

}


?>