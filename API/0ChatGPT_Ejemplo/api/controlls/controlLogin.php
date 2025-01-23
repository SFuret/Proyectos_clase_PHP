<?php

class controlLogin
{
    public function login()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        if (empty($data['usuario']) || empty($data['password'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Credenciales inválidas']);
            return;
        }

        // Simular validación de credenciales
        if ($data['usuario'] === 'admin' && $data['password'] === '1234') {
            http_response_code(200);
            echo json_encode(['message' => 'Inicio de sesión exitoso']);
        } else {
            http_response_code(401);
            echo json_encode(['error' => 'Credenciales incorrectas']);
        }
    }
}
