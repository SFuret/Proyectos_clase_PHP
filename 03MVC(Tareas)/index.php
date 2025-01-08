<?php 
include "./controllers/CC_GestionTareas.php";

$control=$_GET['control']??'gestionTareas'; 
$action= $_GET['action']??'default';
$miControlador= new $control(); //lamo al controlador de la clase correspondiente y me creo una instancia
 
$miControlador->Ejecutar($action);
?>