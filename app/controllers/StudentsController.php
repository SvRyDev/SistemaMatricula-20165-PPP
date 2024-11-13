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
        echo View::renderComponent('admin.templates.students', $data);
    }
}
