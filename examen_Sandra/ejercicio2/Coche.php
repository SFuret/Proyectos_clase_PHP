
<?php

class Coche extends Vehiculo{ 

    private $cilindrada;

    public function __construct($m, $mod, $p, $c)
    {
     parent::__construct($m,$mod,$p);
     $this->cilindrada=$c;
    }

    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    public function calcularImpuesto()
    {
        if($this->cilindrada>2000)
        {
            return parent::calcularImpuesto()+150;
        }
        else{
            return parent::calcularImpuesto();
        }

    }


    public function mostrarDetalles()
    {
        echo "<p> Detalles del coche:</p>";
        parent::mostrarDetalles();
        echo "<p>Cilindrada: $this->cilindrada</p>";
    }

}

?>