<?php 
$coches= [
    "coche1"=>["marca"=>"Totota", "precio"=>"50000"],
    "coche2"=>["marca"=>"Audi", "precio"=>"30000"],
    "coche3"=>["marca"=>"Mercedes", "precio"=>"50000"]
];

//crear cookies
 foreach($coches as $clave=>$valor)
 {
    setcookie($clave,$valor['marca'],time()+3600,"/");
   // echo "La cookie creada es:".$_COOKIE[$clave]."<br>";
 }

//guardar array en un fichero
$fichero="fichero2.json";

try{
if(!file_exists($fichero))
{
    throw new Exception("Error de lectura");
}
else{
    $cochesJson= json_encode($coches, JSON_PRETTY_PRINT);//convierto en Json
    $guardado=file_put_contents($fichero,$cochesJson);
    if($guardado)
    {
      echo "fichero guardado con Exito <br>";
    }
    else{
      echo "Error al guardar";
    }
}

}catch(Exception $e)
{
    echo $e->getMessage();
}


//recuperar del fichero
$recogerDatos=file_get_contents($fichero);
$datosNormal= json_decode($recogerDatos,true); //me devuelve un array asociativo
//var_dump($datosNormal);

foreach($datosNormal as $clave=>$valor)
{
    echo "La clave es $clave y el valor ".var_dump($valor)."<br>";
}

?>