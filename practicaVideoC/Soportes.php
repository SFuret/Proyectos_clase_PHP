<?php 
class Soporte{

public $titulo;
protected $numero;
private $precio;

public function __construct($t,$n,$p)
{
    $this->titulo=$t;
    $this->numero=$n;
    $this->precio=$p;
}

public function getPrecio()
{
    return $this->precio;
}

public function getNumero()
{
    return $this->numero;
}

public function getTitulo()
{
    return $this->titulo;
}

public function muestraResumen()
{
    
}

}


?>