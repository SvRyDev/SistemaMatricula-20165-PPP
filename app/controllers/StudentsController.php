<?php
class StudentsController extends Controller
{

    public $module = 'students';


    public function index()
    {
        $data = [
            'title' => 'Gestion Estudiantes',
            'sub_title' => 'Gestion de Estudiantes',
            'module' => $this->module,
        ];

        return View::renderComponent('admin.templates.students.manage_students', $data);
    }

    public function show()
    {
        $studentModel = $this->model('StudentsModel');
        $dataStudiantes = $studentModel->getDataStudents();

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($dataStudiantes);
            return;
        }
    }

    public function new()
    {


        $data = [
            'title' => 'Nuevo Estudiante',
            'sub_title' => 'Inicio / Estudiantes / Nuevo Estudiante',
            'module' => $this->module,
        ];

        return View::renderComponent('admin.templates.students.new_student', $data);
    }


    //Preparar Formulario
    public function create()
    {
        $otherDataModel = $this->model('OtherDataModel');

        $languajes = $otherDataModel->getAllLanguajes();
        $generos = $otherDataModel->getAllGeneros();
        $discapacidad = $otherDataModel->getAllDiscapacidades();
        $pais = $otherDataModel->getAllPaises();
        $estado_civil = $otherDataModel->getAllEstadoCivil();
        $tipo_sangre = $otherDataModel->getAllTipoSangre();
        $grado_instruccion = $otherDataModel->getAllEscolaridad();

        $data = [
            'languajes' =>  $languajes,
            'genero' => $generos,
            'discapacidad' => $discapacidad,
            'pais' => $pais,
            'estado_civil' => $estado_civil,
            'tipo_sangre' => $tipo_sangre,
            'grado_instruccion' => $grado_instruccion
        ];

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($data);
            return;
        }
    }

    //Enviar y registrar Datos
    public function store()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //padre
            $pad_ape_paterno = $_POST['pad_ape_paterno'];
            $pad_ape_materno = $_POST['pad_ape_materno'];
            $pad_nombres = $_POST['pad_nombres'];
            $pad_vive = $_POST['pad_vive'];
            $pad_fecha_nac = $_POST['pad_fecha_nac'];
            $pad_grado_instruc = $_POST['pad_grado_instruc'];
            $pad_ocupacion = $_POST['pad_ocupacion'];
            $pad_vive_est = $_POST['pad_vive_est'];
            $pad_religion = $_POST['pad_religion'];

            $padreModel = $this->model('FatherModel');
            $padre = $padreModel->createFather(
                $pad_ape_paterno,
                $pad_ape_materno,
                $pad_nombres,
                $pad_vive,
                $pad_fecha_nac,
                $pad_grado_instruc,
                $pad_ocupacion,
                $pad_vive_est,
                $pad_religion
            );

            //madre
            $mad_ape_paterno = $_POST['mad_ape_paterno'];
            $mad_ape_materno = $_POST['mad_ape_materno'];
            $mad_nombres = $_POST['mad_nombres'];
            $mad_vive = $_POST['mad_vive'];
            $mad_fecha_nac = $_POST['mad_fecha_nac'];
            $mad_grado_instruc = $_POST['mad_grado_instruc'];
            $mad_ocupacion = $_POST['mad_ocupacion'];
            $mad_vive_est = $_POST['mad_vive_est'];
            $mad_religion = $_POST['mad_religion'];

            $madreModel = $this->model('MotherModel');
            $madre = $madreModel->createMother(
                $mad_ape_paterno,
                $mad_ape_materno,
                $mad_nombres,
                $mad_vive,
                $mad_fecha_nac,
                $mad_grado_instruc,
                $mad_ocupacion,
                $mad_vive_est,
                $mad_religion
            );

            //student
            $est_num_documento = $_POST['est_num_documento'];
            $est_ape_paterno = $_POST['est_ape_paterno'];
            $est_ape_materno = $_POST['est_ape_materno'];
            $est_nombres = $_POST['est_nombres'];
            $est_sexo = $_POST['est_sexo'];
            $est_estado_civil = $_POST['est_estado_civil'];
            $est_fecha_nac = $_POST['est_fecha_nac'];
            $est_pais_nac = $_POST['est_pais_nac'];
            $est_dep_nac = $_POST['est_dep_nac'];
            $est_prov_nac = $_POST['est_prov_nac'];
            $est_dist_nac = $_POST['est_dist_nac'];
            $est_lengua_materna = $_POST['est_lengua_materna'];
            $est_segunda_lengua = $_POST['est_segunda_lengua'];
            $est_religion = $_POST['est_religion'];
            $est_num_hermanos = $_POST['est_num_hermanos'];
            $est_tipo_discapacidad = $_POST['est_tipo_discapacidad'];
            $est_tiene_cert_medico = $_POST['est_tiene_cert_medico'];
            $est_alergias = $_POST['est_alergias'];
            $est_exp_traum = $_POST['est_exp_traum'];
            $est_tipo_sangre = $_POST['est_tipo_sangre'];
            //direccion student


            $studentModel = $this->model('StudentsModel');
            $estudiante =  $studentModel->createStudent(
                1,
                $est_num_documento,
                $est_ape_paterno,
                $est_ape_materno,
                $est_nombres,
                $est_sexo,
                $est_estado_civil,
                1,
                $est_fecha_nac,
                $est_pais_nac,
                $est_dep_nac,
                $est_prov_nac,
                $est_dist_nac,
                $est_lengua_materna,
                $est_segunda_lengua,
                $est_religion,
                $est_num_hermanos,
                "SIN_DEFINIR",
                $est_tipo_discapacidad,
                $est_tiene_cert_medico,
                $est_alergias,
                $est_exp_traum,
                $est_tipo_sangre,
                $padre,
                $madre,
                false,
                true
            );


            // Capturar los datos de la tabla vacuna
            $vacunaModel = $this->model('VacunasEstModel');

            if (isset($_POST['est_vacunas']) && is_array($_POST['est_vacunas'])) {
                $vacunas = $_POST['est_vacunas'];

                foreach ($vacunas as $fila) {
                    $edad = $fila['edad'];
                    $nombre = $fila['descripcion'];

                    $vacuna_est = $vacunaModel->createVacunaEst($estudiante, $edad, $nombre);
                }
            }


            // Capturar los datos de la tabla enfermedades
            $enfermedadModel = $this->model('EnfermedadEstModel');

            if (isset($_POST['est_enfermedades']) && is_array($_POST['est_enfermedades'])) {
                $vacunas = $_POST['est_enfermedades'];

                foreach ($vacunas as $fila) {
                    $edad = $fila['edad'];
                    $nombre = $fila['descripcion'];

                    $enfermedad_est = $enfermedadModel->createEnfermedadEst($estudiante, $edad, $nombre);
                }
            }



            $periodo_anual_actual = date('Y');
            $anio_id = $this->model('PeriodoAnualModel')->findIdByYearName($periodo_anual_actual);

            $est_direccion_ubi = $_POST['est_direccion_ubi'];
            $est_lugar_ubi = $_POST['est_lugar_ubi'];
            $est_distrito_ubi = $_POST['est_distrito_ubi'];
            $est_prov_uvi = $_POST['est_prov_uvi'];
            $est_dep_ubi = $_POST['est_dep_ubi'];
            $est_telef_ubi = $_POST['est_telef_ubi'];


            $domicilioEstModel = $this->model('DomicilioEstModel');
            $nueva_direccion = $domicilioEstModel->createDomicilioEst(
                $estudiante,
                $anio_id,
                $est_direccion_ubi,
                $est_lugar_ubi,
                $est_dep_ubi,
                $est_prov_uvi,
                $est_distrito_ubi,
                $est_telef_ubi

            ); // AGREGAR PARAMETROS






            if (isAjax()) {
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Estudiante Registrado Correctamente :D',
                    'data' => [
                        'est_num_documento' =>     $est_num_documento,
                        'est_ape_paterno' =>     $est_ape_paterno,
                        'est_ape_materno' =>     $est_ape_materno,
                        'est_nombres' =>     $est_nombres,

                    ]
                ]);
                return;
            }
        }
    }
}
