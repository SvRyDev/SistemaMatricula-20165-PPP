<?php
class MatriculaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Gestion Matrículas',
            'sub_title' => 'Gestion de Matrícula',
            'module' => 'matricula',
        ];

        return View::renderComponent('admin.templates.matricula.main_matricula', $data);
    }

    public function show($year)
    {
        $periodo_anual = $this->model('PeriodoAnualModel');
        $existe_anio = $periodo_anual->isMatriculaActive($year);

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($existe_anio);
            return;
        }
    }

    public function activeMatricula($periodo_anual)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $aforo = intval($_POST['anio-vacantes']);

            $periodo_anual_model = $this->model('PeriodoAnualModel');
            $activar_matricula = $periodo_anual_model->activeMatricula($periodo_anual, $aforo);

            if (isAjax()) {
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Estudiante Registrado Correctamente :D',
                    'respuesta' => $activar_matricula
                ]);
                return;
            }
        }
    }


    public function create()
    {
        $date_current = date("d/m/Y");
        $DataModel = $this->model('OtherDataModel');

        $turnos =   $DataModel->getAllTurnos();
        $niveles =   $DataModel->getAllNiveles();
        $grados =   $DataModel->getAllGrados();
        $secciones =   $DataModel->getAllSections();
        $situacionFinal = $DataModel->getAllSituacionFinal();
        $escolaridad = $DataModel->getAllEscolaridad();

        $configModel = $this->model('ConfigModel');
        $info_school = $configModel->getConfig();


        $data = [
            'date_current' => $date_current,
            'turnos' => $turnos,
            'niveles' => $niveles,
            'grados' => $grados,
            'secciones' => $secciones,
            'situacionFinal' => $situacionFinal,
            'info_school' => $info_school,
            'escolaridad' => $escolaridad,

        ];
        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($data);
            return;
        }
    }


    public function store()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $apoderadoModel = $this->model('A');
            
            
            $id_estudiante
            

            $matriculaModel = $this->model('MatriculaModel');
            $matricula = $matriculaModel->createMatricula();

            if (isAjax()) {
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Matricula Registrada ',
                    'respuesta' => '▓COMPLETAR▓ '
                ]);
                return;
            };
        }
    }


    public function searchStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $argumento = $_POST['q'];

            $studentModel = $this->model('StudentsModel');
            $searched_students = $studentModel->getStudentByParams($argumento);

            if (isAjax()) {
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Estudiante Registrado Correctamente :D',
                    'respuesta' => $searched_students
                ]);
                return;
            }
        }
    }

    public function lista_matriculados()
    {

        $data = [
            'title' => 'Gestion Matrículas',
            'sub_title' => 'Gestion de Matrícula',
            'module' => 'matricula',
        ];

        return View::renderComponent('admin.templates.matricula.show_matricula', $data);
    }


    public function preinscripcion()
    {

        $data = [
            'title' => 'Gestion Matrículas',
            'sub_title' => 'Gestion de Matrícula',
            'module' => 'matricula',
        ];

        return View::renderComponent('admin.templates.matricula.add_pre_matricula', $data);
    }


    public function renovacion()
    {

        $data = [
            'title' => 'Gestion Matrículas',
            'sub_title' => 'Gestion de Matrícula',
            'module' => 'matricula',
        ];
        return View::renderComponent('admin.templates.matricula.add_renew_matricula', $data);
    }
}
