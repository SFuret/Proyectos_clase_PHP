<?php 
include 'controlls/controlGeneral.php';
include 'controlls/controlProductos.php';

$action=$_GET['action']??'default';
$control=$_GET['control']??'controlGeneral';

$controlador=new $control();
$controlador->ejecutar($action);
?>