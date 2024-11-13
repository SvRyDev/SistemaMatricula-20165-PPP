<?php
class StudentsController extends Controller
{
    public function index()
    {

        $studentModel = $this->model('StudentsModel');

        $dataStudiantes = $studentModel->getAllStudents();

        $data = [
            'title' => 'Gestion Estudiantes',
            'sub_title' => 'Gestion de Estudiantes',
            'module' => 'students',
        ];

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($dataStudiantes);
        
        }

        // Renderizar vista si no es AJAX
        return View::renderComponent('admin.templates.students', $data);
    }



    public function show() {}
}
