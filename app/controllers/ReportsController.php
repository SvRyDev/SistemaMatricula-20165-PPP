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

    public function exportToExcel()
    {
        echo "hola mundo"; // Esto es para probar que el método se llama correctamente.

        // Crear una nueva hoja de cálculo
        $spreadsheet = new Spreadsheet();
        
        // Obtener la hoja activa
        $sheet = $spreadsheet->getActiveSheet();
    
        // Escribir algunos datos en la hoja activa
        $sheet->setCellValue('A1', 'Hola Mundo');
        $sheet->setCellValue('A2', 'Este es un reporte de prueba.');
    
        // Crear el escritor de Excel
        $writer = new Xlsx($spreadsheet);
    
        // Guardar el archivo en el sistema
        $fileName = 'reporte_generado.xlsx';
        $writer->save($fileName);  // El archivo se guardará en el directorio actual
    
        echo "Reporte generado correctamente: " . $fileName;
    }
}
