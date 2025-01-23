<?php
require_once __DIR__ . '/../models/modelEmpleados.php';

class controlEmpleados
{
    public function listarTodos()
    {
        $model = new modelEmpleados();
        $empleados = $model->obtenerTodos();
        echo json_encode($empleados);
    }

    public function agregar()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (empty($data['nombre']) || empty($data['puesto']) || empty($data['salario'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Datos incompletos']);
            return;
        }

        $model = new modelEmpleados();
        $resultado = $model->agregarEmpleado($data['nombre'], $data['puesto'], $data['salario']);
        echo json_encode(['message' => $resultado ? 'Empleado agregado' : 'Error al agregar empleado']);
    }

    public function actualizar()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (empty($data['id']) || empty($data['nombre']) || empty($data['puesto']) || empty($data['salario'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Datos incompletos']);
            return;
        }

        $model = new modelEmpleados();
        $resultado = $model->actualizarEmpleado($data['id'], $data['nombre'], $data['puesto'], $data['salario']);
        echo json_encode(['message' => $resultado ? 'Empleado actualizado' : 'Error al actualizar empleado']);
    }

    public function eliminar()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (empty($data['id'])) {
            http_response_code(400);
            echo json_encode(['error' => 'ID no proporcionado']);
            return;
        }

        $model = new modelEmpleados();
        $resultado = $model->eliminarEmpleado($data['id']);
        echo json_encode(['message' => $resultado ? 'Empleado eliminado' : 'Error al eliminar empleado']);
    }
}
?>