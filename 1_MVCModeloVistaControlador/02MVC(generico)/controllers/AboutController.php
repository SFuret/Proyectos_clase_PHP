<?php
class AboutController extends BaseController {
    public function default() {
        $data = ['title' => 'Acerca de nosotros'];
        $this->render('about', $data);
    }
}
