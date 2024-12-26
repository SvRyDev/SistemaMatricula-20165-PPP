<?php
class UsersController extends Controller
{
    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }


    public $module = 'users';

    public function index()
    {
        $data = [
            'title' => 'Gestion Usuarios',
            'sub_title' => 'Main / Administración / Usuarios',
            'module' =>  $this->module,
        ];

        return View::renderComponent('admin.templates.users.manage_user', $data);
    }

    public function show()
    {
        $userModel = $this->model('UserModel');
        $dataUsers = $userModel->getAllUsers();

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($dataUsers);
            return;
        }
    }

    public function new()
    {
        $data = [
            'title' => 'Gestion Usuarios',
            'sub_title' => 'Main / Usuarios / Nuevo',
            'module' =>  $this->module,
        ];

        return View::renderComponent('admin.templates.users.new_user', $data);
    }


    public function loadForm()
    {
        $roles = $this->model('RolesModel')->getAllRoles();;


        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode([
                'roles' => $roles,
            ]);
            return;
        }
    }


    public function store()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $user_nombre_completo = $_POST['user_nombre_completo'];
            $user_nombre_usuario = $_POST['user_nombre_usuario'];
            $user_clave = $_POST['user_clave'];
            $user_rol = $_POST['user_rol'];


            $nuevo_usuario = $this->model('UserModel')->createUser(
                $user_nombre_usuario,
                $user_nombre_completo,
                $user_clave,
                $user_rol
            );


            if (isAjax()) {
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Usuario Registrado',
                    'data' => []
                ]);
                return;
            }
        }
    }
}
