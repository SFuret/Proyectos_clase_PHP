<?php 
session_start();
include "../models/modelUsuario.php";

if(!isset($_SESSION['usuario']))
{
header("Location: ../index.php");
exit;
}

$nombre=$_POST['nombre'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$rol=$_POST['rol'];

$resultInserta= modelUsuario::insertarUsuario($nombre,$user,$pass,$rol);
include "../views/vistaUsuarioInsertado.php";





?>