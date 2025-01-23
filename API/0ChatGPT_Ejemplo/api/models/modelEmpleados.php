<?php
require_once __DIR__ . '/conexion.php';

class modelEmpleados
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::getConexion();
    }

    public function obtenerTodos()
    {
        $query = "SELECT * FROM empleados";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function agregarEmpleado($nombre, $puesto, $salario)
    {
        $stmt = $this->conexion->prepare("INSERT INTO empleados (nombre, puesto, salario) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $nombre, $puesto, $salario);
        return $stmt->execute();
    }

    public function actualizarEmpleado($id, $nombre, $puesto, $salario)
    {
        $stmt = $this->conexion->prepare("UPDATE empleados SET nombre = ?, puesto = ?, salario = ? WHERE id = ?");
        $stmt->bind_param("ssdi", $nombre, $puesto, $salario, $id);
        return $stmt->execute();
    }

    public function eliminarEmpleado($id)
    {
        $stmt = $this->conexion->prepare("DELETE FROM empleados WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>