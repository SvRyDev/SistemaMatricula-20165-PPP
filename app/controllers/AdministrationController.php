<?php
class AdministrationController extends Controller
{
    public function index()
    {

        $configModel = $this->model('configModel');
        $dataConfig = $configModel->getConfig();

        $data = [
            'title' => 'Configuración',
            'sub_title' => 'Apartado para configurar datos del sistema',
            'module' => 'administration',
            'data_config' => $dataConfig
        ];

        echo View::renderComponent('admin.templates.administration', $data);
    }


    public function saveConfig()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            try {

                $nombreInstitucion = $_POST['nombreInstitucion'];
                $nombreDirector = $_POST['nombreDirector'];
                $correoInstitucion = $_POST['correoInstitucion'];

                $configModel = $this->model('configModel');
                $dataConfig = [
                    "NOMBRE_ENTIDAD" => $nombreInstitucion,
                    "NOMBRE_JEFE" => $nombreDirector,
                    "CORREO_ENTIDAD" => $correoInstitucion,
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
