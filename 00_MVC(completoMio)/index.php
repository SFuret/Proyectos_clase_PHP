<?php 
include 'controlls/controlGeneral.php';
include 'controlls/controlProductos.php';

$action=$_GET['action']??'default';
$control=$_GET['control']??'controlGeneral';
$id=$_GET['id']??0;

$controlador=new $control();

if($id==0){
    $controlador->ejecutarConsulta($action); //Le pongo un valor por defecto a id
}
else
{
    $controlador->ejecutar($action,$id);
}



?>