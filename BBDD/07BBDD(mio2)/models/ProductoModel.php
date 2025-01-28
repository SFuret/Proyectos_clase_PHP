<?php

use PSpell\Config;

include "./config/Conection.php";

class ProductoModel{

    private $query;
    public function insertarProducto($Producto)
    {
       $this->query= "insert into productos (nombre,cantidad,precio) values ($Producto->getNombre(), $Producto->getPrecio(), $Producto->getCantidad())";
       $conection= new Conection(); /*establezco la conexion */
       $result=$conection->consulta($this->query); /*hago consulta*/
       $conection->cerrarConexion();/*cierro la conexión*/
       if($result)
       {
        echo "Producto insertado con éxito";
       }
       else{
       echo "Error en la inserción";
       }
    }
}

?>