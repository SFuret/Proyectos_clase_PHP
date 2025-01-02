<?php 
spl_autoload_register(function($class){
include "controll/$class.php";
});


$action=$_GET['action']??'default';
$controll=$_GET['control']??'controlPrincipal';

try{
if(class_exists($controll))
{
    $controladora= new $control();
    $controladora->ejecutar();
}
else
{
    throw new Exception("No existe la clase controladora ".$controll);
}
}catch(Exception $error)
{
echo "Error: ".$error->getMessage();
}





?>