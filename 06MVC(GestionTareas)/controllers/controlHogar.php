<?php 
class controlHogar extends controlGeneral{

    public function hogar()
    {
        $data= ['tareas'=> 'tareas del Hogar'];
        $this->render('viewHogar',$data);
    }

}

?>