<?php
include "conexion.php";

class modelUsuario
{
    public static function comprobarUsuario($user)
    {
        $query = "SELECT * FROM usuarios WHERE usuario = ?";
        $consulta = Conexion::establecerConexion()->prepare($query);
        $consulta->bind_param("s", $user); // "s" indica un string
        $consulta->execute();
        $result = $consulta->get_result();
        Conexion::cerrarConexion();
        return $result->fetch_assoc(); // Devuelve el usuario si existe
    }

    public static function comprobarPassCompleto($user, $pass) /*Este es con desencriptado de contraseña, de momento no lo voy a usar */
    {
        $query = "SELECT pass FROM usuarios WHERE usuario = ?";
        Conexion::establecerConexion();
        $consulta = Conexion::establecerConexion()->prepare($query);
        $consulta->bind_param("s", $user);/*con s indico que el parametro es una cadena de texto */
        $result = $consulta->get_result();
        Conexion::cerrarConexion();
        $row = $result->fetch_assoc();
        $compara = password_verify($pass, $row['pass']);
        if ($compara) {
            return true; /*desencripto el pass y compruebo el valor*/
        }
        return false;
    }

    /*compruebo que el pass es correcto, en caso de no serlo devuelve null */
    public static function comprobarPass($user, $pass)
    {
        $query = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
        $conexion=Conexion::establecerConexion(); /*establezco la conexión */
        $consulta = $conexion->prepare($query);
        // Usa 'ss' para indicar que ambos parámetros son cadenas de texto (strings)
        $consulta->bind_param("ss", $user, $pass);
        $consulta->execute();
        $resultado = $consulta->get_result()->fetch_assoc();
        Conexion::cerrarConexion(); /*cierro la conexión */
        //var_dump($resultado); 
        return $resultado;
    }

    public static function listarUsuarios()
    {
    $query= "SELECT * FROM usuarios";
    $conexion= Conexion::establecerConexion();
    $consulta= $conexion->prepare($query);
    $consulta->execute();
    $resultado=$consulta->get_result()->fetch_all(MYSQLI_ASSOC);
    Conexion::cerrarConexion();
    return $resultado;          
    }

    public static function insertarUsuario($nombre,$usuario,$pass,$rol)
    {
        $query= "INSERT INTO usuarios (nombre, usuario, password,rol) VALUES (?,?,?,?)";
        $conexion=Conexion::establecerConexion();
        $consulta= $conexion->prepare($query);
        $consulta->bind_param("sssi", $nombre,$usuario,$pass,$rol);
        $resultados=$consulta->execute();
        Conexion::cerrarConexion();
        return $resultados;
    }

    /*
     public static function insertarUsuario($nombre, $user, $pass, $rol)
    {
        $query = "INSERT INTO usuarios (nombre, usuario, pass, rol) VALUES (?, ?, ?, ?)";
        Conexion::establecerConexion();
        $stmt = Conexion::$conect->prepare($query);
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
        $stmt->bind_param("sssi", $nombre, $user, $hashedPass, $rol);

        $result = $stmt->execute();
        Conexion::cerrarConexion();

        return $result;
    }

  

    public static function listarUsuarios()
    {
        $query = "SELECT * FROM usuarios";
        Conexion::establecerConexion();
        $stmt = Conexion::$conect->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        Conexion::cerrarConexion();

        return $result->fetch_all(MYSQLI_ASSOC);
    }*/
}
