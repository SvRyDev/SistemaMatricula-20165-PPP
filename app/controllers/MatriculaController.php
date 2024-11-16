<?php
class MatriculaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Gestion Matrículas',
            'sub_title' => 'Gestion de Matrícula',
            'module' => 'matricula',
        ];

        return View::renderComponent('admin.templates.matricula', $data);
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



    public function showByName()
    {
        $studentModel = $this->model('StudentsModel');
        $searchTerm = isset($_GET['q']) ? $_GET['q'] : '';


        if (!empty($searchTerm)) {
            $dataStudiantes = $studentModel->getStudentsByName($searchTerm);
        } else {

            $dataStudiantes = $studentModel->getAllStudents();
        }

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($dataStudiantes);
            return;
        }
    }
}
