<?php 
$coches=[
    'coche1'=>['precio'=>'15000', 'marca'=>'Toyota'],
    'coche2'=>['precio'=>'20000', 'marca'=>'Audi'],
    'coche3'=>['precio'=>'30000', 'marca'=>'Mercedes']
];

foreach($coches as $clave=>$valor)
{
  setcookie($clave,$valor['marca'],time()+3600, "/", "localhost");  
}

//echo $_COOKIE['coche1'];

//guardar el array en fichero1

//convierto el array a json
$cochesJson= json_encode($coches, JSON_PRETTY_PRINT);

//guardo el json en un fichero

$fichero="fichero1.json";
try{
if(!file_exists($fichero))
{
  throw new Exception("No existe el fichero");
}
else{

  //GUARDAR EL JSON EN UN FICHERO
  $resultado= file_put_contents($fichero,$cochesJson);

  if($resultado==true)
  {
  echo "Datos guardados en fichero1";
  }
  else{
    echo "Error al guardar los datos";
  }

}
}catch(Exception $e)
{
 echo $e->getMessage();
}


//LEER LOS DATOS GUARDADOS EN UN FICHERO JSON


  try{
    if(!file_exists($fichero))
    {
      throw new Exception("No existe el fichero");
    }
    else{
      $contenidoJson= file_get_contents($fichero);
      //convertir el json en un arrayAsociativo

      $arrayCoches= json_decode($contenidoJson, true);
      var_dump($arrayCoches); //muestro el array por pantalla


    }
  }catch(Exception $e)
  {
   echo "Error".$e->getMessage();
  }



?>