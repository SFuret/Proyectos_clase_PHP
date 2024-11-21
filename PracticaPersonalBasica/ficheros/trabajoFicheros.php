<?php 
$fichero1='f1.txt';
$fichero2='f2.txt';
try{
if(!file_exists($fichero1))
{
    throw new Exception('No está fichero1');
}
else{

    $contenido= file_get_contents($fichero1);
    file_put_contents($fichero2,$contenido);
}


}catch(Exception $e)
{
  echo "Error: ".$e->getMessage();
}
?>