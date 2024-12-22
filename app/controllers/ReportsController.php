<?php



class ReportsController extends Controller
{
    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }

    

    public $module = 'reports';

    public function index()
    {
        
        $data = [
            'title' => 'Reportes de Matricula',
            'sub_title' => 'Vista reporte de Matrículas',
            'module' =>  $this->module,
        ];
        echo View::renderComponent('admin.templates.reports.main_reports', $data);
    }



    public function matriculas()
    {
        $data = [
            'title' => 'Lista de Matricula',
            'sub_title' => 'Vista reporte de Matrículas',
            'module' =>  $this->module,
        ];
        echo View::renderComponent('admin.templates.reports.reports_matricula', $data);
    }


    public function ficha_matricula(){
        $data = [
            'title' => 'Lista de Matricula',
            'sub_title' => 'Vista Generador Ficha de Matrículas',
            'module' =>  $this->module,
        ];
        echo View::renderComponent('admin.templates.reports.search_student_f_m', $data);
    }

   
}
