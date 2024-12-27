<?php 
//incluyo el modelo con el que voy a trabajar
include_once "../model/CE_Producto.php";


/*******LISTAR PRODUCTOS(ESTO LO HACE SIEMPRE)******/

$productos= Producto::listarProductos(); /*recibo un array normal*/

$productosAsociativo= Producto::listarProductosArrayAsociativo();

//incluyo la vista que va a tratar esos valores que en este caso es el index de la página
include "../view/CI_ListarProductos.php";




/*******COMPROBAR FUNCIONALIDAD A HACER SOBRE LA TABLA PRODUCTOS******/

if(isset($_POST['agregar']))
{
    header("Location: ../view/CI_AgregarProducto.php");
}
else if(isset($_POST['eliminar']))
{
    header("Location: ../view/CI_EliminarProducto.php");
}
else if(isset($_POST['modificar']))
{
    header("Location: ../view/CI_ModificarProducto.php");
}

/*******AGREGAR PRODUCTO******/

if(isset($_POST['agregarProducto'])) //compruebo que el formulario agregarProducto existe
{
    $cod= $_POST['cod'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
     
    $producto= new Producto($cod, $nombre, $precio, $cantidad);
    Producto::agregarProducto($producto);
}

/*******ELIMINAR PRODUCTO******/



/*******MODIFICAR PRODUCTO******/

//


?>