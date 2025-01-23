<?php 
include "../models/modelProductos.php";


function listar()
{
$resultados= modelProducto::listarProductos();
if(!is_null($resultados))
{
    include "../views/viewsBienvenida.php";

}
else
{
    $noResultados="No hay productos";
}
}



if(isset($_GET['mostrar'])&&($_GET['mostrar']==1))
{
    listar();
}

if(isset($_POST['insertar']))
{
    modelProducto::insertar($_POST['nombre'], $_POST['precio']);

}

if(isset($_POST['eliminar']))
{
    $eliminado=modelProducto::eliminar($_POST['id']);
    include "../views/viewsBienvenida.php";
}



?>