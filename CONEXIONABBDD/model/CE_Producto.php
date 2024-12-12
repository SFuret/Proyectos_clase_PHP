<?php
include_once "conexion.php";/*Incluyo a mi capa de abstracción de datos*/

class Producto{
private $codProducto;
private $nombre;
private $precio;
private $cantidad;


function Producto( $codP, $n, $p, $c){
$this->codProducto=$codP;
$this->nombre=$n;
$this->precio=$p;
$this->cantidad=$c;
}

function getCodProducto()
{
    return $this->codProducto;
}

function getNombre()
{
    return $this->nombre;
}

function getPrecio()
{
    return $this->precio;
}

function getCantidad()
{
    return $this->cantidad;
}

public static function agregarProducto($producto){
$conect= ConectarBBDD::establecerConexion();
$consulta= "INSERT INTO `Producto`(`codProducto`, `nombre`, `precio`, `cantidad`) VALUES ($producto->codProducto,$producto->precio,$producto->precio,$producto->cantidad)";
ConectarBBDD::insertarEliminarModificar($conect,$consulta);
ConectarBBDD::cerrarConexion($conect);
} 

public static function eliminarProducto($codProducto)
{
    $conect= ConectarBBDD::establecerConexion();
    $consulta="DELETE FROM `Producto` WHERE codProducto=$codProducto";
    ConectarBBDD::insertarEliminarModificar($conect,$consulta);
    ConectarBBDD::cerrarConexion($conect);
}


public static function modificarProducto($codProducto,$producto)
{
  $conect=ConectarBBDD::establecerConexion();
  $consulta="UPDATE Producto SET codProducto=$producto->getCodProducto(),nombre=$producto->getNombre(),precio=$producto->getPrecio(),cantidad=$producto->getCantidad() ";
  ConectarBBDD::insertarEliminarModificar($conect,$consulta);
  ConectarBBDD::cerrarConexion($conect);
}

/*Listar productos */
public static function listarProductos()
{
    $conect=ConectarBBDD::establecerConexion();
    $consulta="SELECT codProducto, nombre, precio, cantidad FROM  Producto  ";
    $arrayResultante=ConectarBBDD::obtenerValores($conect,$consulta);
    ConectarBBDD::cerrarConexion($conect);
    return $arrayResultante;
}

public static function listarProductosArrayAsociativo()
{
    $conect=ConectarBBDD::establecerConexion();
    $consulta="SELECT codProducto, nombre, precio, cantidad FROM  Producto  ";
    $arrayAsociativo=ConectarBBDD::obtenerValoresAsociativo($conect,$consulta);
    ConectarBBDD::cerrarConexion($conect);
    return $arrayAsociativo;
}

}
?>