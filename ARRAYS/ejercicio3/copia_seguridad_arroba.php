<?php 
$fichero="arroba.txt";
@file_exists($fichero);  //usar @ antes de alguna instrucción que puede dar error hace que
//aunque el fichero no exista no muestra ningún error, ignora esto, lo siguiente si puede dar error

$contenidoFicheroOriginal=file_get_contents($fichero); //devuelve el contenido en una cadena, cada línea en una posición

$archivoDestino="copia_arroba.txt";
file_put_contents($archivoDestino,$contenidoFicheroOriginal); //Como no existe el archivo copia_datos lo crea
echo 'El fichero ha sido actualizado';


?>