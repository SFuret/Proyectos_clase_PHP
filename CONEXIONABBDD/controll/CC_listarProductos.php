<?php 
//incluyo el modelo con el que voy a trabajar
include_once "../model/CE_Producto.php";

$productos= Producto::listarProductos(); /*recibo un array normal*/

$productosAsociativo= Producto::listarProductosArrayAsociativo();

//incluyo la vista que va a tratar esos valores que en este caso es el index de la página
include "../view/viewListarProductos.php";


?>