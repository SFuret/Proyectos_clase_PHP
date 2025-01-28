<?php
session_start();
include "../models/modelUsuario.php";

$passIncorrecto = false;
$userIncorrecto = false;

if (isset($_POST['username']) && isset($_POST['password'])) {
    // Sanitizar los datos de entrada
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);

    try {
        // Comprobar si el usuario existe
        if (!is_null(modelUsuario::comprobarUsuario($user))) {
            // Comprobar si la contraseña es correcta
            if (!is_null(modelUsuario::comprobarPass($user, $pass))) {
                // Crear la sesión
                $_SESSION['usuario'] = $user;

                // Redirigir a la vista principal
                header("Location: ../views/vistaPrincipal.php");
                exit();
            } else {
                $passIncorrecto = true;
                header("Location: ../views/login.php?error=passIncorrecto");
                exit();
            }
        } else {
            $userIncorrecto = true;
            header("Location: ../views/login.php?error=userIncorrecto");
            exit();
        }
    } catch (Exception $e) {
        // Manejar errores en la base de datos u otros problemas
        error_log("Error en el login: " . $e->getMessage());
        header("Location: ../views/login.php?error=errorGeneral");
        exit();
    }
} else {
    header("Location: ../views/login.php?error=datosFaltantes");
    exit();
}
?>