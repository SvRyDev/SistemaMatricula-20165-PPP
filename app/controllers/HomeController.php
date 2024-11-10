<?php
class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'Página de Inicio',
            'welcomeMessage' => 'Bienvenido a nuestro sistema de Matriculas!',
            'module' => 'home',
        ];
        $this->view('home', $data);
    }
}
?>
