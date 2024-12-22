<?php
class DashboardController extends Controller
{

    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }

    public $module = 'students';


    public function index()
    {
        $data = [
            'title' => 'Sistema de Matricula ',
            'sub_title' => 'Inicio / Dashboard',
            'module' => $this->module,
        ];
        echo View::renderComponent('admin.templates.dashboard.dashboard', $data);
    }

    public function aperturarAnio($periodo_academico)
    {
        $periodo_anual_model = $this->model("PeriodoAnualModel");
        $existe_anio = $periodo_anual_model->isYearExist($periodo_academico);

        if (!$existe_anio) {
            $nuevo_anio = $periodo_anual_model->createNewYear($periodo_academico);
        }

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($existe_anio);
            return;
        }
    }


    public function getDataToCharts($year){
        $matriculadosByYears = $this->model('MatriculaModel')->getMatriculasByYears();

        $gradoYSeccionByYear = $this->model('MatriculaModel')->getGradeAndSectionsByYear($year);

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode([
                'matriculadosByYears' => $matriculadosByYears,
                'gradoYSeccionByYear' => $gradoYSeccionByYear,
            ]);
            return;
        }
    }


  
}
