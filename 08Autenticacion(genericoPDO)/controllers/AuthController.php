<?php
// controllers/AuthController.php
require_once 'models/UserModel.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Muestra la página de inicio de sesión
    public function showLogin() {
        require 'views/login.php';
    }

    // Procesa el inicio de sesión
    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header('Location: index.php?action=dashboard');
            exit;
        } else {
            $error = "Correo o contraseña incorrectos.";
            require 'views/login.php';
        }
    }

    // Muestra el dashboard para usuarios autenticados
    public function dashboard() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit;
        }

        require 'views/dashboard.php';
    }

    // Cierra la sesión del usuario
    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
        exit;
    }
}
?>
