<?php 

class Persona {
    private $dni;
    private $nombre;
    private $email;

    public function __construct($dni,$n,$e)
    {
        $this->dni=$dni;
        $this->nombre=$n;
        $this->email=$e;
    }
    public function __get($nombre)   //se define un único get que le paso un parámetro y comparo
    //puedo hacer tantos get y set como quiera
    {
        if($nombre== 'DNI')
        {
            return $this->dni;
        }
        else if($nombre== 'NOMBRE')
        {
            return $this->nombre;
        }
        else if($nombre == 'EMAIL')
        {
            return $this->nombre;
        }
    }

    public function __setNombre($nombre)
    {
        $this->nombre=$nombre;
    }

    public function __setdni($d)
    {
        $this->dni=$d;
    }


    public function __setemail($e)
    {
        $this->email=$e;
    }

    public function mostrar()
    {
      echo "<p>DNI: ".$this->dni."-Nombre:".$this->nombre."-email: ".$this->email."</p>";

    }


    
   


}





?>