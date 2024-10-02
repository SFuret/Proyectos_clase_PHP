<?php
$fichero = "excepciones.txt";

try {
    if (!file_exists($fichero)) { {
            throw new Exception("El fichero de entrada no existe");
        }
    } else {

        $contenidoFicheroOriginal = file_get_contents($fichero); //devuelve el contenido en una cadena, cada línea en una posición

        $archivoDestino = "copia_excepciones.txt";
        file_put_contents($archivoDestino, $contenidoFicheroOriginal); //Como no existe el archivo copia_datos lo crea
        echo 'El fichero ha sido actualizado';
    }
} catch (Exception $e) {
    echo 'Se ha producido un error: ' . $e->getMessage();
}
