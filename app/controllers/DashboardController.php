<?php
class DashboardController extends Controller {
    public function index() {
        $data = [
            'title' => 'Bienvenido al Sistema de Matricula - 2024',
            'sub_title' => 'Selecciona una opción del menú para comenzar',
            'module' => 'dashboard',
        ];
        echo View::renderComponent('admin.templates.dashboard', $data);
    }
}
?>