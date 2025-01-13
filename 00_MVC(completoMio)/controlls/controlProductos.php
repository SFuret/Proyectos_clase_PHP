<?php 
include_once 'models/modelProducto.php';
    class controlProductos extends controlGeneral{
    private $resultados;
    private $eliminado;

    public function mostrarProductos()
    {
      $this->resultados= modelProducto::mostrarTodos();
      include "views/viewProducto.php";

    }

   public function eliminarProducto($id)
    {
      $eliminado=modelProducto::eliminarProducto($id);
      include "view/viewPrincipal.php";
    }

    }
?>