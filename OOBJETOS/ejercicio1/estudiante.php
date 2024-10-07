<?php 
 include_once 'persona.php';

class Estudiante extends Persona
{
private $numExpediente;

public function __construct($dni,$nom,$em,$n)
{
    parent::__construct($dni,$nom,$em);
    $this->numExpediente=$n;
}
public function __getNumExpediente()   
    {
        return $this->numExpediente;
    }

    public function __setNumExpediente($n)
    {
        $this->numExpediente=$n;
    }


    public function mostrar()
    {
      parent::mostrar();  
      echo "<p>-$this->numExpediente </p>";

    }

}






?>