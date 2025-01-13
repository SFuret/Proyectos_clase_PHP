<?php 

class controlGeneral{

public function ejecutar($action)
{
    $this->$action();
}

public function default()
{
   include "views/viewPrincipal.php";
}

};


?>