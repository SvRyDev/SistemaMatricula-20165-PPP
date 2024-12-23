<?php
class UsersController extends Controller
{
    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }
    
 
    public $module = 'users';

    public function manage()
    {
        $data = [
            'title' => 'Gestion Usuarios',
            'sub_title' => 'Main / Administración / Usuarios',
            'module' =>  $this->module,
        ];

        return View::renderComponent('admin.templates.administration.manage_user', $data);
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


    public function loadForm(){
        $roles = $this->model('RolesModel')->getAllRoles();;


        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode([
                'roles' => $roles,
            ]);
            return;
        }
    }

}
