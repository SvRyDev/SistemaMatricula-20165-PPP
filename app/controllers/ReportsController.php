<?php



class ReportsController extends Controller
{
    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }



    public $module = 'reports';

    public function index()
    {

        $data = [
            'title' => 'Reportes de Matricula',
            'sub_title' => 'Vista reporte de Matrículas',
            'module' =>  $this->module,
        ];
        echo View::renderComponent('admin.templates.reports.main_reports', $data);
    }



    public function generar_nomina()
    {
        $data = [
            'title' => 'Lista de Matricula',
            'sub_title' => 'Vista reporte de Matrículas',
            'module' =>  $this->module,
        ];
        echo View::renderComponent('admin.templates.reports.search_grade_section_n', $data);
    }


    public function ficha_matricula()
    {
        $data = [
            'title' => 'Lista de Matricula',
            'sub_title' => 'Vista Generador Ficha de Matrículas',
            'module' =>  $this->module,
        ];
        echo View::renderComponent('admin.templates.reports.search_student_f_m', $data);
    }


    public function loadFormSearchStudents()
    {


        $periodoAnualModel = $this->model('PeriodoAnualModel');
        $periodo_anuales = $periodoAnualModel->getAllPerioroAnuales();



        $DataModel = $this->model('OtherDataModel');

        $turnos =  $DataModel->getAllTurnos();
        $niveles = $DataModel->getAllNiveles();
        $grados =  $DataModel->getAllGrados();
        $secciones =   $DataModel->getAllSections();

        $data = [
            'periodo_anuales' => $periodo_anuales,
            'niveles' => $niveles,
            'grados' => $grados,
            'secciones' => $secciones,


        ];
        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($data);
            return;
        }
    }

    public function searchStudents()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            // Recoger los datos de entrada
            $id_anio = isset($_POST['g_e_periodo']) ? (int) $_POST['g_e_periodo'] : null;
            $id_nivel = isset($_POST['g_e_nivel']) ? (int) $_POST['g_e_nivel'] : null;
            $id_grado = isset($_POST['g_e_grado']) ? (int) $_POST['g_e_grado'] : null;
            $id_seccion = isset($_POST['g_e_seccion']) ? (int) $_POST['g_e_seccion'] : null;


            // Llamar al modelo
            $matriculados = $this->model('MatriculaModel')->getMatriculasByParams(
                $id_anio,
                $id_nivel,
                $id_grado,
                $id_seccion
            );


            if (isAjax()) {
                header('Content-Type: application/json');
                echo json_encode($matriculados);
                return;
            }
        }
    }
}
