<?php 
class controlPrincipal{

    public function ejecutar($action)
    {
        if(method_exists($this, $action))
        {
         $this->$action();
        }
        else{
            echo "Método no encontrado";
        }
    }


    public function render($view, $data=[])
    {
        extract($data);
        include "../views/header.php";
        include "../views/$view.php";
        include "../views/footer.php";
    }
}
?>