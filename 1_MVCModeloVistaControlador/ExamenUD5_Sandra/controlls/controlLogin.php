<?php 
session_start();
if(isset($_POST['login']))
{
    if(isset($_POST['usuario'])&& isset($_POST['pass']))
    {
        $user=$_POST['usuario'];
        $pass=$_POST['pass'];

        if(($user=="administrador")&&($pass="1234"))
        {
            $_SESSION['usuario']=$user;
            header("Location:../controlls/controlEmpleados.php");
        }
        else if(($user=="Dios")&&($pass="123456"))
        {
            $_SESSION['usuario']=$user;
            header("Location:../controlls/controlEmpleados.php");
        }
        else{
         $errorLogin="usuario o contraseña incorrectos";
         include "../index.php";
        }
    }
}




?>