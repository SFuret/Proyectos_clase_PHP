<?php
 abstract class Vehiculo{

    private $marca;
    private $modelo;
    private $precio;
    private static $baseImpuesto =21;

    public function __construct($m, $mod, $p)
    {
      $this->marca=$m;
      $this->modelo=$mod;
      $this->precio=$p;
    }

    public function getMarca()
    {
      return  $this->marca;
    }

    public function getModelo()
    {
      return  $this->modelo;
    }

    public function getPrecio()
    {
      return  $this->precio;
    }


    public function calcularImpuesto()
    {
        return  (($this->precio * self::$baseImpuesto)/100);    
    }

    public function calcularPrecioTotal()
    {
        return $this->precio + $this->calcularImpuesto();
    }

    public function mostrarDetalles()
    {
        echo "<p>Marca: $this->marca <br> Modelo: $this->modelo <br> Precio: $this->precio €<br> Impuesto:".$this->calcularImpuesto()."€ <br> Precio Total(con impuestos): ".$this->calcularPrecioTotal()."€</p>";
    }
}

?>