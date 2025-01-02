<?php
class CC_General
{

    public function Ejecutar($action)
    {
        try {
            if (method_exists($this, $action)) {
                $this->$action();
            } else {

                throw new Exception("El método no existe");
            }
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
        }
    }


    public function render($view, $data = [])
    {
        extract($data);
        include "./views/$view.php";
    }

    public function default()
    {
        $data=['title'=>'Selector de Tareas'];
        $view='viewPrincipal';
        $this->render($view, $data);
    }
}
