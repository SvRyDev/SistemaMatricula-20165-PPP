<?php
class AdministrationController extends Controller {
    public function index() {
        $data = [
            'title' => 'Configuración',
            'sub-title' => 'Apartado para configurar datos del sistema',
            'module' => 'administration',
        ];
        echo View::renderComponent('admin.templates.administration', $data);
    }
}
?>
