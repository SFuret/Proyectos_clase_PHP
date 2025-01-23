<?php 
class Conexion{

private static $host='127.0.0.1';
private static $user='phpmyadmin';
private static $pass='1234';
private static $db='Prueba';
private static $conect;

public static function establecerConexion()
{
self::$conect= new mysqli(self::$host, self::$user, self::$pass, self::$db);
if(self::$conect->connect_error)
{
    echo "Error de conexión";
}
else{
    return self::$conect;
}

}


public static function cerrarConexion()
{
    self::$conect->close();
}

public static function hacerConsulta($query)
{
    $result=self::$conect->query($query);
    return $result;
}

public static function devolverValores($query)
{
    $result=self::$conect->query($query);
    $arrayValores=[];
    $arrayValores=self::$conect->fetch_all(MYSQLI_ASSOC);
    return $arrayValores;
}
}


?>