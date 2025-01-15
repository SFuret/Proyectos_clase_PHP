<?php 
include 'controlls/controlGeneral.php';
include 'controlls/controlProductos.php';

$action=$_GET['action']??'default';
$control=$_GET['control']??'controlGeneral';
<<<<<<< HEAD
$id=$_GET['id']??0;
=======
$id=$_GET['id']??'0';
>>>>>>> c74914a8c3f12c05b82fe0249361b2c9c5796a23

$controlador=new $control();

<<<<<<< HEAD
if($id==0){
    $controlador->ejecutarConsulta($action); //Le pongo un valor por defecto a id
}
else
{
    $controlador->ejecutar($action,$id);
}


=======
>>>>>>> c74914a8c3f12c05b82fe0249361b2c9c5796a23

?>