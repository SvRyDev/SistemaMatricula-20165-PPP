<?php
class ExportController extends Controller {


    require_once base_url() . 
    public function index() {
        $data = [
            'title' => 'Bienvenido al Sistema de Matricula - 2024',
            'sub_title' => 'Selecciona una opción del menú para comenzar',
            'module' => 'dashboard',
        ];
        echo View::renderComponent('admin.templates.dashboard.dashboard', $data);
    }

    public function exportFichaMatricula($id_estudiante){
    
        $matricula = $this->model('MatriculaModel')->getMatriculasByStudent($id_estudiante);
        $estudiante = $this->model('StudentModel')->getStudentByIdFromView($id_estudiante);

        if(!$existe_anio){
            $nuevo_anio = $periodo_anual_model->createNewYear($periodo_academico);
        }

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($existe_anio);
            return;
        }
    }
}
?>
