<?php

class ExportController extends Controller
{



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
        $data = [
            'estudiante' => $estudiante,
            'direcciones' => $direcciones,
            'madre' => $madre,
            'padre' => $padre,
            'enfermedades' => $enfermedades,
            'vacunas' => $vacunas,
            'matriculas' => $matriculas,
            'data_institucion' => $data_institucion,
        ];

     


        echo View::render('admin.pdf.ficha_matricula', $data);


    }
}
