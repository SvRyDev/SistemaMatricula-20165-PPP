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
        $date_current = date("Y");

        $periodoAnualModel = $this->model('PeriodoAnualModel');
        $periodo_anual = $periodoAnualModel->findIdByYearName($date_current);

    

        $DataModel = $this->model('OtherDataModel');

        $turnos =  $DataModel->getAllTurnos();
        $niveles = $DataModel->getAllNiveles();
        $grados =  $DataModel->getAllGrados();
        $secciones =   $DataModel->getAllSections();
        $situacionMatricula = $DataModel->getAllSituacionMatricula();
        $escolaridad = $DataModel->getAllEscolaridad();

        $configModel = $this->model('ConfigModel');
        $info_school = $configModel->getConfig();


        $data = [
            'periodo_anual' => $periodo_anual,
            'turnos' => $turnos,
            'niveles' => $niveles,
            'grados' => $grados,
            'secciones' => $secciones,
            'situacionMatricula' => $situacionMatricula,
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


            //registro apoderado
            $apod_ape_paterno = $_POST['apod_ape_paterno'];
            $apod_ape_materno = $_POST['apod_ape_materno'];
            $apod_nombres = $_POST['apod_nombres'];
            $apod_fech_nac = $_POST['apod_fech_nac'];
            $apod_g_instruccion = $_POST['apod_g_instruccion'];
            $apod_ocupacion = $_POST['apod_ocupacion'];
            $apod_domicilio = $_POST['apod_domicilio'];
            $apod_telefono = $_POST['apod_telefono'];

            $apoderadoModel = $this->model('ApoderadoModel');
            $nuevo_apoderado = $apoderadoModel->createApoderado(
                $apod_ape_paterno,
                $apod_ape_materno,
                $apod_nombres,
                $apod_fech_nac,
                $apod_g_instruccion,
                $apod_ocupacion,
                $apod_domicilio,
                $apod_telefono,
                true
            );

            //registro matricula
            $id_estudiante = $_POST['est_id'];
            $id_periodo_anual = $_POST['periodo_academico'];
            $apod_vinculo = $_POST['apod_vinculo'];
            $mat_situacion = $_POST['mat_situacion'];
           
            $current_date = date('Y/m/d');

            $configModel = $this->model('ConfigModel');
            $nombre_institucion = $configModel->getConfig()['NOMBRE_ENTIDAD'];

            $est_cod_modular  = $_POST['est_cod_modular'];
            $instancia_ugel = $configModel->getConfig()['INSTANCIA_UGEL'];

            $mat_seccion = $_POST['mat_seccion'];
            $mat_turno = $_POST['mat_turno'];
            $id_forma = $configModel->getConfig()['ID_FORMA'];
            $id_modalidad = $configModel->getConfig()['ID_MODALIDAD'];
            $id_sit_final_ano_lectivo = 1; //ARREGLAR
            $id_sit_final_recuperacion_pedagogica = 1; //ARREGLAR
            $id_estado_matricula = 1; //ARREGLAR


            $matriculaModel = $this->model('MatriculaModel');
            $nueva_atricula = $matriculaModel->createMatricula(
                $id_estudiante,
                $nuevo_apoderado,
                $id_periodo_anual,
                true,
                true,
                $apod_vinculo,
                null,
                $mat_situacion,
                $current_date,
                null,
                null,
                $nombre_institucion,
                $est_cod_modular,
                $instancia_ugel,
                $mat_seccion,
                $mat_turno,
                $id_forma,
                $id_modalidad,
                $id_sit_final_ano_lectivo,
                $id_sit_final_recuperacion_pedagogica,
                $id_estado_matricula,
                true
            );


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
