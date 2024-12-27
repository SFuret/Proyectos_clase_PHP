<?php
require_once 'controllers/AuthController.php';

$authController = new AuthController();
$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authController->login($_POST['email'], $_POST['password']);
        } else {
            $authController->showLogin();
        }
        break;

    case 'dashboard':
        $authController->dashboard();
        break;

    case 'logout':
        $authController->logout();
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Página no encontrada';
        break;
}
?>
