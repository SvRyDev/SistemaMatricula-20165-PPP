<?php
class StudentsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Gestion Estudiantes',
            'sub_title' => 'Gestion de Estudiantes',
            'module' => 'students',
        ];

        return View::renderComponent('admin.templates.students.manage_students', $data);
    }

    public function show()
    {
        $studentModel = $this->model('StudentsModel');
        $dataStudiantes = $studentModel->getAllStudents();

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($dataStudiantes);
            return;
        }
    }

    public function new(){
        $data = [
            'title' => 'Nuevo Estudiante',
            'sub_title' => 'Gestion de Estudiantes',
            'module' => 'students',
        ];

        return View::renderComponent('admin.templates.students.new_student', $data);


    }
}
