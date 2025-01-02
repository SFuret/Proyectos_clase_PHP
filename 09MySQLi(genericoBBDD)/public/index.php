<?php

require_once '../config/Database.php';
require_once '../models/User.php';

use Models\User;

$userModel = new User();

// Procesar formulario para registrar un nuevo usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
        echo $userModel->createUser($email, $password);
    } else {
        echo "Por favor, ingresa un correo electrónico válido y una contraseña.";
    }
}

// Obtener todos los usuarios
$users = $userModel->getAllUsers();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
</head>
<body>
    <h1>Gestión de Usuarios</h1>

    <!-- Formulario para agregar usuario -->
    <form method="POST" action="">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Registrar</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['email']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
