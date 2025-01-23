<?php

class controlGeneral{

    public function Ejecutar($action)
    {
      if(method_exists($this,$action))
      {
        $this->$action(); //llamo al método indicado dinámicamente
      }
    }


    public function render($view, $data=[])
    {
     extract($data); //puedo usar los registros del array como variables, donde la clave es el nombre de la variable

     //cargar las vistas
     include "views/header.php";
     include "views/$view.php";
     include "views/footer.php";
    }
}

?>