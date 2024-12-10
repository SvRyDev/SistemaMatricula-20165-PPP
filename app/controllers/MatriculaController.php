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
