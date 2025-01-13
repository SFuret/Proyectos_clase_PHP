<?php 
include 'controlls/controlGeneral.php';
include 'controlls/controlProductos.php';

$action=$_GET['action']??'default';
$control=$_GET['control']??'controlGeneral';
$id=$_GET['id'];

$controlador=new $control();
$controlador->ejecutar($action,$id=0); //Le pongo un valor por defecto a id



/*switch($action)
{
    case 'default':{
        $controlador->ejecutar($action);
    }
    case 'eliminar':{
        $controlador->ejecutar($action, $id);
    }
    
}*/

?>