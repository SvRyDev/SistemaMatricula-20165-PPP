<?php
class UsersController extends Controller
{
    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }
    
    public function manage()
    {
        $data = [
            'title' => 'Gestion Estudiantes',
            'sub_title' => 'Gestion de Estudiantes',
            'module' => 'users',
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
}
