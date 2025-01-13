<?php 
include_once 'models/modelProducto.php';
    class controlProductos extends controlGeneral{
    private $resultados;

    function mostrarProductos()
    {
      $this->resultados= modelProducto::mostrarTodos();
      include "views/viewProducto.php";

    }

    }
?>