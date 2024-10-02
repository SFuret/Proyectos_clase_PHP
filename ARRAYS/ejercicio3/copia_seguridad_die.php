<?php
$fichero = "die.txt";
file_exists($fichero) or die("No se encuentra el fichero");//Si el fichero no existe ejecuta el die y sale de la página, no ejecuta 
//más código.
//Si existe el fichero ejecuta el resto del código 

$contenidoFicheroOriginal = file_get_contents($fichero); //devuelve el contenido en una cadena, cada línea en una posición

$archivoDestino = "copia_die.txt";
file_put_contents($archivoDestino, $contenidoFicheroOriginal); //Como no existe el archivo copia_datos lo crea
echo 'El fichero ha sido actualizado';
