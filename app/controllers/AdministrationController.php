<?php
class AdministrationController extends Controller
{

    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }


    public function index()
    {

        $configModel = $this->model('configModel');
        $dataConfig = $configModel->getConfig();

        $data = [
            'title' => 'Configuración',
            'sub_title' => 'Inicio / Configuración',
            'module' => 'administration',
            'data_config' => $dataConfig
        ];

        echo View::renderComponent('admin.templates.administration.main_administration', $data);
    }


    public function loadForm()
    {

        $datasModel = $this->model('OtherDataModel');

        $opc_modalidad = $datasModel->getAllModalidad();
        $opc_forma = $datasModel->getAllForma();
        $data_config = $this->model('ConfigModel')->getConfig();

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode(
                [
                    'opc_modalidad' => $opc_modalidad,
                    'opc_forma' => $opc_forma,
                    'data_config' => $data_config,
                    
                ]
            );
            return;
        }
    }

    public function saveConfig()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            try {

                $nombreInstitucion = $_POST['nombreInstitucion'];
                $nombreDirector = $_POST['nombreDirector'];
                $codigoModular = $_POST['codigoModular'];
                $config_modalidad = $_POST['config_modalidad'];
                $config_forma = $_POST['config_forma'];
                $config_direccion = $_POST['config_direccion'];
                $config_centro_poblado = $_POST['config_centro_poblado'];
                $config_distrito = $_POST['config_distrito'];
                $config_provincia = $_POST['config_provincia'];
                $config_departamento = $_POST['config_departamento'];
            

                $configModel = $this->model('configModel');
                $dataConfig = [
                    "NOMBRE_ENTIDAD" => $nombreInstitucion,
                    "NOMBRE_JEFE" => $nombreDirector,
                    "CODIGO_MODULAR" => $codigoModular,
                    "ID_MODALIDAD" => $config_modalidad,
                    "ID_FORMA" => $config_forma,
                    "DIRECCION_ENTIDAD" => $config_direccion,
                    "CENTRO_POBLADO_ENTIDAD" => $config_centro_poblado,
                    "DISTRITO_ENTIDAD" => $config_distrito,
                    "PROVINCIA_ENTIDAD" => $config_provincia,
                    "DEPARTAMENTO_ENTIDAD" => $config_departamento,
                  
                ];


                $configModel->saveConfig($dataConfig);



                if (isAjax()) {
                    header('Content-Type: application/json');
                    echo json_encode(
                        [
                            'status' => 'success',
                            'message' => 'Configuracion Actualizado Correctamente :D',

                        ]
                    );
                    return;
                }
            } catch (Exception $e) {
                if (isAjax()) {
                    header('Content-Type: application/json');
                    echo json_encode([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                    return;
                }
            }
        }
    }
}
