<?php 
include_once 'models/modelProducto.php';
    class controlProductos extends controlGeneral{
    private $resultados;
    private $eliminado;

    public function mostrarProductos($id)
    {
      $this->resultados= modelProducto::mostrarTodos();
      include "views/viewProducto.php";

    }

   public function eliminarProducto($id)
    {
      $this->eliminado= modelProducto::eliminarProducto($id);
      include "views/head.php";
      include "views/viewEliminarProducto.php";
      include "views/footer.php";
    }

    }
?>