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

        return View::renderComponent('admin.templates.students', $data);
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
}
