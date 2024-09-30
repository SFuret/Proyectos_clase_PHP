<?php 
$fichero="datos.txt";
if (file_exists($fichero))
{
$contenidoFicheroOriginal=file_get_contents($fichero); //devuelve el contenido en una cadena, cada línea en una posición

$archivoDestino="copia_datos.txt";
file_put_contents($archivoDestino,$contenidoFicheroOriginal); //Como no existe el archivo copia_datos el lo crea
}

?>