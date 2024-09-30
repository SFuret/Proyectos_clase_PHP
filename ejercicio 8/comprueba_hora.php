<?php
$hora = "21:59:12";
if (preg_match("/^([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $hora, $partes) == 1) {

    if (($partes[1] > 24) || ($partes[2] > 59) || ($partes[3] > 59)) {
        echo "La hora no es válida";
    } else {
        echo "Hora completa $partes[0] <br>";
        echo "Cantidad de horas $partes[1] <br>";
        echo "Cantidad de minutos $partes[2] <br>";
        echo "Cantidad de segundos $partes[3] <br>";
    }
} else {
    echo "La hora no es válida";
}
