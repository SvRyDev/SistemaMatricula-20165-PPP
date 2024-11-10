<?php
class StudentsController extends Controller {
    public function index() {
        $data = [
            'title' => 'Gestion Estudiantes',
            'sub-title' => 'Gestion de Estudiantes',
            'module' => 'students',
        ];
        $this->view('admin.students', $data);
    }
}
?>
