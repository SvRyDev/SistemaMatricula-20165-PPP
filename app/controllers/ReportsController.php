<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Reportes de Matricula',
            'sub_title' => 'Vista reporte de Matrículas',
            'module' => 'reports',
        ];
        echo View::renderComponent('admin.templates.reports.main_reports', $data);
    }



    public function matriculas()
    {
        $data = [
            'title' => 'Lista de Matricula',
            'sub_title' => 'Vista reporte de Matrículas',
            'module' => 'reports',
        ];
        echo View::renderComponent('admin.templates.reports.reports_matricula', $data);
    }

   
}
