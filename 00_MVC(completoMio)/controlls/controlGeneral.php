<?php 

class controlGeneral{

public function ejecutar($action, $id)
{
    $this->$action($id);
}


public function default()
{
   include "views/viewPrincipal.php";
}

};


?>