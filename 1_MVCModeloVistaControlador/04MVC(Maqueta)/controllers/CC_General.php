<?php 
class CC_General 
{

public function Ejecutar($action)
{
 if($action==='default')
 {
  $vista='inicio';
 }
 else{
    $vista=$action;
 }
 
 include "views/header.php";
 include "views/$vista.php";
 include "views/footer.php";
}

}

?>