<?php 
class controlEstudio extends controlGeneral{

public function estudio()
{
 $data= ['tareas'=>'tareas de Estudio'];
 $this->render('viewEstudio', $data);
}


}

?>