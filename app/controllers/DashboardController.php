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

    public function aperturarAnio($periodo_academico){
        $periodo_anual_model = $this->model("PeriodoAnualModel");
        $existe_anio = $periodo_anual_model->isYearExist($periodo_academico);

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
