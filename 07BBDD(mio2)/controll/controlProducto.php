<?php 
class controlProducto extends controlPrincipal{

public function insertarProducto()
{
 $view='insertar';
 $data=['hacer', 'Insertar Producto'];
 $this->render($view, $data);
}
}

?>