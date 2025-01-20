
<?php

class Moto extends Vehiculo{ 

    private $tieneSidecar;

    public function __construct($m, $mod, $p, $tieneS)
    {
     parent::__construct($m,$mod,$p);
     $this->tieneSidecar=$tieneS;
    }

    public function calcularImpuesto()
    {
        if($this->tieneSidecar)
        {
            return parent::calcularImpuesto()+50;
        }
        else{
            return parent::calcularImpuesto();
        }
    }

    public function getTieneSidecar()
    {
      return $this->tieneSidecar;
    }
 
    public function mostrarDetalles()
    {
        echo "<p> Detalles de la moto:</p>";
        parent::mostrarDetalles();
        echo "<p>Tiene Sidecar: $this->tieneSidecar<p>";
    }

}

?>