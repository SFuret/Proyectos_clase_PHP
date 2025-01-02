<?php 
class Producto{
    
    public function __construct($n, $p, $c)
    {
        $this->nombre=$n;
        $this->precio=$p;
        $this->cantidad=$c;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

}
?>