<?php 

class Conexion{
    private static $host='127.0.0.1';
    private static $user='phpmyadmin';
    private static $pass='1234';
    private static $db='instituto_db';
    private static $connect;

    public static function establecerConexion()
    {
        self::$connect= new mysqli(self::$host,self::$user,self::$pass,self::$db);
        if(self::$connect->connect_error)
        {
            die("Error de conexión");
        }
        else{
            return self::$connect;
        }
    }

    public static function cerrarConexion()
    {
        self::$connect->close();
    }
    
}








?>