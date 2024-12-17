<?php

use Mpdf\Mpdf;

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

        // Aquí generas el PDF con mPDF o el proceso que necesites
        $mpdf = new Mpdf();

        $html = '<h1>Ficha de Matrícula</h1>';
        $html .= '<p>Nombre: Juan Pérez</p>';
        $html .= '<p>Curso: Matemáticas</p>';
        $mpdf->WriteHTML($html);

        // Aquí lo generas para que lo descargue directamente
        $mpdf->Output('ficha_matricula.pdf', 'D');

        /*

        $matricula = $this->model('MatriculaModel')->getMatriculasByStudent($id_estudiante);
        $estudiante = $this->model('StudentModel')->getStudentByIdFromView($id_estudiante);
*/
    }
}
