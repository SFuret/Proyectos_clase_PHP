<?php 
include "../models/modelProductos.php";
if(isset($_POST['listar']))
{
    $productos= modelProductos::listarProductos();
    include "../views/viewListarProductos.php"; 
}


?>