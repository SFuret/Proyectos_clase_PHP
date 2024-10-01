<?php 
$fichero="datos.txt";
if (file_exists($fichero))
{
$contenidoFicheroOriginal=file($fichero); //devuelve el contenido en un array, cada línea en una posición

$emailNuevo="regnuevo08@gmail.com";
$posicion=0;
foreach($contenidoFicheroOriginal as $linea)
{
    if (preg_match("/^[a-z0-9]{1,10}@[a-z]{1,10}\.[A-Za-z]{2,4}$/", $linea) == 1) //devuelve 1 si el contenido de la variable cumple con la expresión regular
    {
        if (preg_match("/^[a-z0-9]{1,10}@[a-z]{1,10}\.[A-Za-z]{2,4}$/", $emailNuevo) == 1) {

            $contenidoFicheroOriginal[$posicion]=$emailNuevo;
            echo 'Los datos han sido actualizados';
            break;          
            
            }
            else{
                echo "El email nuevo no cumple con la expresion regular";
            }


    }
    $posicion++;
  
}

file_put_contents("copia_datos.txt",$contenidoFicheroOriginal); 
}

?>