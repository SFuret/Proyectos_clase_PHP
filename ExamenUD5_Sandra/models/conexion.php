<?php
class Conexion{

private static $host="127.0.0.1";
private static $user="phpmyadmin";
private static $pass="1234";
private static $db="empresa_db";
private static $conect;

public static function establecerConexion()
{
    self::$conect= new mysqli(self::$host, self::$user, self::$pass, self::$db); /*me conecto a la BBDD */
    if(self::$conect->connect_error)
    {
        die("Error de conexión");
    }
    else{
        return self::$conect;
    }

}


public static function cerrarConexion()
{
    self::$conect->close();/*cierro la conexión */
    self::$conect=null;/*limpio la conexión */
}


}



?>