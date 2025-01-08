<?php 

class Conection{
private $host='localhost';
private $user='root';
private $pass='';
private $db='tienda';
private $conection;

public function __construct()
{
    $this->conection= new mysqli($this->host,$this->user,$this->pass,$this->db);
    if($this->conection->connect_error)
    {
      die("Error de conexión:".$this->conection->connect_error);  
    }
}

public function getConnection()
{
    return $this->conection;
}


public function cerrarConexion()
{
    $this->conection->close();
}


public function consulta($consulta)
{
    if($this->conection->query($consulta))
    {
        return true;
    }
    else{
        return false;
    }
}


public function obtenerValores($consulta)
{
$resultado=$this->conection->query($consulta);
$valores=[]; //declaro el array donde voy a volcar los datos obtenidos de la consulta
$valores=$resultado->fetch_array(MYSQLI_ASSOC); //convierte a un array asociativo
return $valores;
}
}
?>