<?php 


class Usuario{
   
    private $usuario;
    private $password;


    public function __construct($n, $p)
    {
          $this->usuario=$n;
          $this->password=$p;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getUser()
    {
        return $this->usuario;
    }


}






?>