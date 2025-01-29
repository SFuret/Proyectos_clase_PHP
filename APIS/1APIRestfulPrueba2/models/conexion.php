<?php

class Conexion{
    private static $host="127.0.0.1";
    private static $user="root";
    private static $pass="";
    private static $db="tiendaonline";
    private static $conect;
    
    public static function establecerConexion()
    {
        self::$conect = new mysqli(self::$host,self::$user,self::$pass,self::$db);
        if(self::$conect->connect_error)
        {   
            die("Error de conexión");
        }
        return self::$conect;
    }
    
public static function cerrarConexion()
{
    self::$conect->close();
}

}




?>