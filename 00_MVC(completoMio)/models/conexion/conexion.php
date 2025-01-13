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
        die("Error de conexión");
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
     if($result)
     {
        return true;
     }
     else{
        return false;
     }
    }

    public static function devolverValores($query)
    {
        $result= self::$conect->query($query);
        $valores=[];
        $valores=$result->fetch_all(MYSQLI_ASSOC);
        return $valores;
    }

};
 
?>