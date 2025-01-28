<?php 
session_start();
include "../models/modelUsuario.php";
 $passIncorrecto=false;
 $userIncorrecto=false;

if(isset($_POST['username'])&&(isset($_POST['password'])))
{
    $user= $_POST['username'];
    $pass=$_POST['password'];
 
    if(!is_null(modelUsuario::comprobarUsuario($user))) //compruebo que existe el usuario
        {
       if(!is_null(modelUsuario::comprobarPass($user, $pass))) /*compruebo que el password y el usuario son correctos */
        {
            $_SESSION['usuario']=$user;
            include '../views/vistaPrincipal.php';
        }
        else{
            $passIncorrecto=true;
            include "../views/login.php";
           }
    }
    else{
        $userIncorrecto=true;
        include "../views/login.php";
    }
    
}




?>