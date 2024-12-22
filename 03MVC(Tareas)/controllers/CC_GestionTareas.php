<?php

class gestionTareas
{

    public function Ejecutar($action)
    {
        if ($action === 'hogar') {
            $cargarVista = 'viewHogar';
        } else if ($action === 'estudio') {
            $cargarVista = 'viewEstudio';
        } else if ($action = 'default') {
            $cargarVista = 'viewDefault';
        }

        include "views/header.php";
        include "views/$cargarVista.php";
        include "views/footer.php";
    }
}
