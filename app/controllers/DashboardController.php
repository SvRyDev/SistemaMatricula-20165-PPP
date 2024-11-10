<?php
class DashboardController extends Controller {
    public function index() {
        $data = [
            'title' => 'Bienvenido al Sistema de Matricula - 2024',
            'sub-title' => 'Selecciona una opción del menú para comenzar',
            'module' => 'dashboard',
        ];
        $this->view('admin.dashboard', $data);
    }
}
?>
