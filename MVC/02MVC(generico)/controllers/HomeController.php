<?php
class HomeController extends BaseController {
    public function default() {
        $data = ['title' => 'Página principal'];
        $this->render('home', $data);
    }

    public function contact() {
        echo "Página de contacto en construcción.";
    }
}
