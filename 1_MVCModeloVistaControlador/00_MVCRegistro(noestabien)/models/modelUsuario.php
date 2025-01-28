<?php 
include 'conexion/conexion.php';

class modelUsuario{

    public static function insertarUsuario($nombre,$user,$pass,$rol)
    {
     $query= "INSERT INTO usuarios VALUES (0,$nombre,$user,$pass,$rol)";
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

    public static function comprobarUsuario($user)
    {
     $query= "SELECT * FROM usuarios WHERE usuario=$user";
     Conexion::establecerConexion();
     $result=Conexion::devolverUnValor($query);
     Conexion::cerrarConexion();
     if(is_null($result))
     {
        return false;
     }
     else{
        return true;
     }
    }

    
    public static function comprobarPass($user,$pass)
    {
     $query= "SELECT * FROM usuarios WHERE usuario=$user AND password=$pass";
     Conexion::establecerConexion();
     $result=Conexion::devolverUnValor($query);
     Conexion::cerrarConexion();
     var_dump($result);
     return $result;
     
    }


    public static function listarUsuarios()
    {
     $query= "SELECT * FROM usuarios";
     Conexion::establecerConexion();
     $result=Conexion::devolverValores($query);
     Conexion::cerrarConexion();
     return $result;
    }



}


?>