<?php 
include './conexion/conexion.php';

class modelUsuario{
   

public static function insertarUsuario($user, $pass, $nombre)
{
    $query="INSERT INTO usuarios VALUES ($nombre,$user,$pass)";
    Conexion::establecerConexion();
    $result=Conexion::hacerConsulta($query);
    Conexion::cerrarConexion();
    return $result;
}

public static function eliminarUsuario($id)
{
    $query="DELETE FROM usuarios WHERE id=$id";
    Conexion::establecerConexion();
    $result=Conexion::hacerConsulta($query);
    Conexion::cerrarConexion();
    return $result;
}

public static function actualizarUsuario($nombre, $user, $pass, $id)
{
    $query="UPDATE usuarios SET nombre=$nombre, usuario=$user,pass=$pass WHERE id=$id";
    Conexion::establecerConexion();
    $result=Conexion::hacerConsulta($query);
    Conexion::cerrarConexion();
    return $result;
}

public static function comprobarUsuario($user)
{
    $query="SELECT * FROM usuarios WHERE user=$user";
    Conexion::establecerConexion();
    $result=Conexion::hacerConsulta($query);
    Conexion::cerrarConexion();
    if($result==1)
    {
        return true;
    }
    else{
        return false;
    }
}

public static function comprobarPass($user, $pass)
{
    $query="SELECT * FROM usuarios WHERE user=$user AND pass=$pass";
    Conexion::establecerConexion();
    $result=Conexion::hacerConsulta($query);
    Conexion::cerrarConexion();
    if($result==1)
    {
        return true;
    }
    else{
        return false;
    }
}

}


?>