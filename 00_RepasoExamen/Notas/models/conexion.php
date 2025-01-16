<?php

class Conexion{
private static $host='127.0.0.1';
private static $user='root';
private static $pass='';
private static $db='tiendaonline';
private static $conexion;

public static function establecerConexion(){
self::$conexion = new mysqli(self::$host, self::$user, self::$pass, self::$db);
if(self::$conexion->connect_error)
{
die("Error de conexión");
}
else
return self::$conexion;

}

public static function cerrarConexion()
{
    self::$conexion->close();
    self::$conexion=null;
}

}

?>