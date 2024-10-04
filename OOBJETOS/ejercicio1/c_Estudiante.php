<?php 
/* 
Crea una segunda clase llamada Estudiante que herede de Persona, y añada un atributo llamado
numExpediente. Crea su constructor, sus getters y setters y su correspondiente método Mostrar.
Fuera de las clases, entre el código HTML de la página, crea un objeto de cada tipo (una Persona y un
Estudiante), con los valores que quieras, llama después a algún setter de cada una para cambiar el valor
de algún atributo, y finalmente llama a sus métodos Mostrar para que saquen la información de cada
uno.*/

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
      echo "<p>$this->numExpediente </p>";

    }



}






?>