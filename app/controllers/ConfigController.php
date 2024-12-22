<?php
class ConfigController extends Controller {

    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }

    
    public function index() {
        $data = [
            'title' => 'Bienvenido al Sistema de Matricula - 2024',
            'sub-title' => 'Selecciona una opción del menú para comenzar',
            'module' => 'dashboard',
        ];
        echo View::renderComponent('admin.templates.dashboard', $data);
    }
}
?>