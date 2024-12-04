<?php 

include_once '../models/note.php';


$fichero='../data/notes.json';

/*Recojo los datos de los usuarios del fichero para trabajar con ellos*/

try{
if(!file_exists($fichero))
{
    throw new Exception("El fichero no existe");
}
else{
    $datosJson= file_get_contents($fichero); //obtengo los datos guardados en el fichero
   $notas=json_decode($datosJson,true); /*obtengo los usuarios guardados en el fichero y los guardo en un array asociativo*/
   $_SESSION['notas']=$notas;
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



?>