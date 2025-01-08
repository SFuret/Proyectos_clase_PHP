<?php
// Autocarga de controladores
spl_autoload_register(function ($className) {
    include "controllers/$className.php";
});

// Obtener la acción de la URL y el controlador
$controllerName = $_GET['controller'] ?? 'HomeController';
$action = $_GET['action'] ?? 'default';

try {
    // Validar que el controlador existe
    if (!class_exists($controllerName)) {
        throw new Exception("Controlador no encontrado: $controllerName");
    }

    // Crear una instancia del controlador
    $controller = new $controllerName(); //si al hacer esto la clase no ha sido incluída llamaa al método
    //spl_autoload_register y él automáticamente la incluye

    // Ejecutar la acción
    $controller->execute($action);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
