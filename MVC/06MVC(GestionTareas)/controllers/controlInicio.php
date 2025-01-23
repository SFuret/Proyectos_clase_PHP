<?php 
class controlInicio extends controlGeneral{

    public function default()
    {
     $data= ['tarea'=>'Inicio'];
     $this->render('viewInicio', $data);
    }
}
?>