<?php 
$fichero="datos.txt";
if (file_exists($fichero))
{
$contenidoFicheroOriginal=file($fichero); //devuelve el contenido en un array, cada línea en una posición

//$email="rerg01@gmail.com";
//foreach()

if (preg_match("/^[a-z0-9]{1,10}@[a-z]{1,10}\.[A-Za-z]{2,4}$/", $email) == 1) {


file_put_contents("copia_datos.txt",$email); //Copia el contenido de $email en copia_datos.txt

}
else{
    echo "No cumple con la expresion regular";
}
}

?>