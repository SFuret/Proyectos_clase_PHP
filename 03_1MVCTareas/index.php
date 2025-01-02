<?php

spl_autoload_register(function ($class) {
    include "./controllers/$class.php";
});

$control = $_GET['controll'] ?? 'CC_General';
$action = $_GET['action'] ?? 'default';

try {
    if (!class_exists($control)) {
        throw new Exception("La clase $control no existe");
    } else {
        $controlador = new $control();
    }
} catch (Exception $error) {
    echo "Error: " . $error->getMessage();
}

$controlador->Ejecutar($action);