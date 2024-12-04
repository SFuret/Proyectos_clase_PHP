<?php 
session_start();
include_once '../models/user.php';


$ficheroUsuarios='../data/users.json';

/*Recojo los datos de los usuarios del fichero para trabajar con ellos*/

try{
if(!file_exists($ficheroUsuarios))
{
    throw new Exception("El fichero no existe");
}
else{
    $datosJson= file_get_contents($ficheroUsuarios); //obtengo los datos guardados en el fichero
    $usuarios=json_decode($datosJson,true); /*obtengo los usuarios guardados en el fichero y los guardo en un array asociativo*/
    
}

}catch(Exception $e)
{
    echo $e->getMessage();
}


/******************Guardar datos en el fichero********************************* */
function guardarDatosUsuariosFichero($datos, $fichero)
{
  //convierto el array de usuarios en Json
  $uJson= json_encode($datos, JSON_PRETTY_PRINT);

  //guardo los datos en el fichero
  $resultado= file_put_contents($fichero,$uJson);
  if($resultado)
  {
   // echo "<p>Los datos han sido actualizados en el fichero</p>";
   header("Location: ../index.php");
   exit();
  }
else{
    echo "<p>Error al guardar los datos</p>";
}

}


//guardar Cookies
function guardarCookies($usuario)
{
   //creo la cookie que guardará: nombreCookie,valoraGuardar que en este caso coencide, duración 1 día, donde estará accesible 
  setcookie($usuario,$usuario,time()+86400,"/");
}

//eliminar Cookies
function eliminarCookies($usuario)
{
   //para eliminarla le pongo un tiempo en pasado
  setcookie($usuario," ",time()-86400,"/");
}


/******************************************************* */

//Registrar usuario

if(isset($_POST['registrarse'])){
   if(isset($_POST['username'])&& isset($_POST['password']))
{
    //compruebo si el usuario existe
    if(isset($usuarios[$_POST['username']]))
    {
        echo "<p>Usuario ya registrado</p>";
    }
    else{
   $usuarioNuevo= new Usuario($_POST['username'],$_POST['password']);   
   $usuarios[$_POST['username']]=$usuarioNuevo->getPassword();//agrego el usuario nuevo al array asociativo de Usuarios
  
    }
    //actualizo mi fichero de users.json 
    guardarDatosUsuariosFichero($usuarios,$ficheroUsuarios);
}

}

//Logearse
if(isset($_POST['loguearse'])){
       if(isset($_POST['username'])&& isset($_POST['password']))
    {
        //compruebo si el usuario existe 
       if(isset($usuarios[$_POST['username']])) //en caso de que exista entra a la sesion
       {
        //compruebo que el pass sea el correcto
        $pass= $usuarios[$_POST['username']];
        if($_POST['password']===$pass){
        $_SESSION['usuario']=$_POST['username'];
        //si ha marcdo que quiere recordar las cookies
        if(isset($_POST['recordarme']))
        {
           guardarCookies($_POST['username']);
        }
        else{
          eliminarCookies($_POST['username']);
        } 

        header("Location: ../views/dashboard.php");
        exit();
        }
       }
       else{
        $_SESSION['existe']=false;           
        header("Location: ../views/login.php");//en caso de que no exista
        exit();
       }
    }


}








?>