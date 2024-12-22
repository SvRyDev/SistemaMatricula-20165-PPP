<?php

class ExportController extends Controller
{


    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }


    public function index()
    {
        $data = [
            'title' => 'Bienvenido al Sistema de Matricula - 2024',
            'sub_title' => 'Selecciona una opción del menú para comenzar',
            'module' => 'dashboard',
        ];
        echo View::renderComponent('admin.templates.dashboard.dashboard', $data);
    }

    public function exportFichaMatricula($id_estudiante)
    {

        $estudiante = $this->model('StudentsModel')->getStudentByIdFromView($id_estudiante);
        $direcciones = $this->model('DomicilioEstModel')->getAllDomicliosByStudentIdFromView($id_estudiante);
        $madre = $this->model('MotherModel')->getMotherByIdFromView($estudiante['id_madre']);
        $padre = $this->model('FatherModel')->getFatherByIdFromView($estudiante['id_padre']);
        $enfermedades =  $this->model('EnfermedadEstModel')->getEnfermedadesFromStudent($id_estudiante);
        $vacunas = $this->model('VacunasEstModel')->getVacunasFromStudent($id_estudiante);

        $matriculas = $this->model('MatriculaModel')->getMatriculasByStudentFromView($id_estudiante);
        $data_institucion =   $this->model('ConfigModel')->getConfig();


        $forma =  $this->model('OtherDataModel')->getFormaById($data_institucion['ID_FORMA']);;
        $modalidad =  $this->model('OtherDataModel')->getModalidadById($data_institucion['ID_MODALIDAD']);;


        // Inicializar un arreglo para guardar los apoderados
        $apoderadoModel = $this->model('ApoderadoModel');
        $apoderados = [];

        // Iterar sobre las matrículas para obtener los datos de cada apoderado
        foreach ($matriculas as $matricula) {
            // Verificar si existe un ID de apoderado en la matrícula
            if (isset($matricula['id_apoderado'])) {
                // Llamar al modelo de apoderados para obtener los datos del apoderado
                $apoderado = $apoderadoModel->getApoderadoById($matricula['id_apoderado']);

                // Agregar el apoderado al arreglo
                    $apoderados[] = $apoderado;
              
            }
        }


        $usuarioModel = $this->model('UserModel');
        $usuarios_responsables = [];

         // Iterar sobre las matrículas para obtener los datos de cada apoderado
         foreach ($matriculas as $matricula) {
            // Verificar si existe un ID de apoderado en la matrícula
            if (isset($matricula['id_usuario_responsable'])) {
                // Llamar al modelo de apoderados para obtener los datos del apoderado
                $usuario_personal = $usuarioModel->getUserByIdFromView($matricula['id_usuario_responsable']);

                // Agregar el apoderado al arreglo
                    $usuarios_responsables[] = $usuario_personal;
              
            }
        }




        $data = [
            'estudiante' => $estudiante,
            'direcciones' => $direcciones,
            'madre' => $madre,
            'padre' => $padre,
            'enfermedades' => $enfermedades,
            'vacunas' => $vacunas,
            'matriculas' => $matriculas,
            'data_institucion' => $data_institucion,
            'forma' => $forma,
            'modalidad' => $modalidad,
            'apoderados' => $apoderados,
            'usuarios_responsables' => $usuarios_responsables,
        ];




        echo View::render('admin.pdf.ficha_matricula', $data);
    }
}
