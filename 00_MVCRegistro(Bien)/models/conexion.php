<?php 
class Conexion{

    private static $host='127.0.0.1';
    private static $user='root';
    private static $pass='';
    private static $db='tiendaonline';
    private static $conect;

    public static function establecerConexion()
    {
    self::$conect= new mysqli(self::$host, self::$user, self::$pass, self::$db);
    if(self::$conect->connect_error)
    {
        die("Error de conexión");
    }
   
        return self::$conect;
    
    }

    public static function cerrarConexion()
    {
     self::$conect->close();
     self::$conect=null; /*limpio la conexión*/
    }
    
/*
    public static function hacerConsulta($query)
    {
     $stmt = self::$conect->prepare($query);
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
        if(!$result)
        {
            return null;
        }
        return $valores;
    }

    public static function devolverUnValor($query)
    {
        $result=self::$conect->query($query);
        var_dump(self::$conect);
        if(!$result)
        {
            return null;
        }
            return $result->fecth_assoc();
        
        
    }
*/
};
 




?>