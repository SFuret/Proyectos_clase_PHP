<?php

class Conexion
{
    private static $conexion;

    public static function getConexion()
    {
        if (!self::$conexion) {
            $config = [
                'host' => 'localhost',
                'dbname' => 'empresa',
                'user' => 'root',
                'password' => ''
            ];

            self::$conexion = new mysqli($config['host'], $config['user'], $config['password'], $config['dbname']);
            if (self::$conexion->connect_error) {
                die('Error de conexión: ' . self::$conexion->connect_error);
            }
        }

        return self::$conexion;
    }
}
?>