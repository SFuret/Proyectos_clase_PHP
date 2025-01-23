<?php 
include "../models/modelLogin.php";

if(isset($_POST['usuario'])&&isset($_POST['pass']))
{
    $user=$_POST['usuario'];
    $pass=$_POST['pass'];
    $login= modelLogin::loguearse($user,$pass);
    if(!is_null($login))
    {
      include "../views/viewsBienvenida.php";
    }
    else{
        header("Location: ../index.php");
    }
}




?>