<?php
class CC_Estudio extends CC_General
{

    public function estudio()
    {
        $data = ['title' => 'Tareas de Estudio'];
        $view = 'viewEstudio';
        $this->render($view,$data);
    }
}
