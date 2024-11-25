<?php 
$fichero="fichero1.json";

//RECIBIR FICHERO
try{
if(!isset($fichero))
{
    throw new Exception("No existe el fichero");
}
else{
    $datosJson= file_get_contents($fichero); //contiene los datos en formato JSON
    $datos= json_decode($datosJson, true); //paso los datos a un array asociativo
}

}catch(Exception $e)
{
 echo $e->getMessage();
}

//TRABAJO CON COOKIES
foreach($datos as $clave=>$valor)
{
    setcookie($clave,$valor['marca'],time()+3600,"/"); //creo una cookie por cada marca
}

var_dump($_COOKIE); //Muestro todas las cookies guardadas






?>