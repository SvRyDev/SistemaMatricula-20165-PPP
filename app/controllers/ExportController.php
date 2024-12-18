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

    
        $data = [
            'estudiante' => $estudiante,
            'direcciones' => $direcciones,
        ];

     


        echo View::render('admin.pdf.ficha_matricula', $data);


    }
}
