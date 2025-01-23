<?php
require_once __DIR__ . '/controlls/controlEmpleados.php';
require_once __DIR__ . '/controlls/controlLogin.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

switch ($uri) {
    case '/api/empleados':
        $control = new controlEmpleados();
        if ($method === 'GET') {
            $control->listarTodos();
        } elseif ($method === 'POST') {
            $control->agregar();
        } else {
            http_response_code(405);
            echo json_encode(['error' => 'Método no permitido']);
        }
        break;

    case '/api/empleados/update':
        if ($method === 'PUT') {
            $control = new controlEmpleados();
            $control->actualizar();
        } else {
            http_response_code(405);
            echo json_encode(['error' => 'Método no permitido']);
        }
        break;

    case '/api/empleados/delete':
        if ($method === 'DELETE') {
            $control = new controlEmpleados();
            $control->eliminar();
        } else {
            http_response_code(405);
            echo json_encode(['error' => 'Método no permitido']);
        }
        break;

    default:
        http_response_code(404);
        echo json_encode(['error' => 'Ruta no encontrada']);
        break;
}
?>