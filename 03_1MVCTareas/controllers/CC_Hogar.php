<?php
class CC_Hogar extends CC_General
{

    public function hogar()
    {
        $data = ['title' => 'Tareas del Hogar'];
        $view = 'viewHogar';
        $this->render($view, $data);
    }
}
