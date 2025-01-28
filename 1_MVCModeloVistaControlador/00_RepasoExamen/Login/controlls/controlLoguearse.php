<?php 
include "../models/modelLogin.php";

if(isset($_POST['usuario'])&& isset($_POST['pass']))
{
$user=$_POST['usuario'];
$pass=$_POST['pass'];
$login= modelLogin::comprobarUsuario($user, $pass);
if($login)
{
    include "../views/viewPrincipal.php";
}
else{
    include "../index.php";
}

}



?>