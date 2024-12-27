<?php
class RolesController extends Controller
{
    public function __construct()
    {
        verificarSesion(); // Verificar sesión en cada controlador que lo herede
    }


    public $module = 'roles';

    public function index()
    {
        $data = [
            'title' => 'Gestion Roles',
            'sub_title' => 'Main / Administración / Roles',
            'module' =>  $this->module,
        ];

        return View::renderComponent('admin.templates.roles.manage_roles', $data);
    }

    public function show()
    {
        $userModel = $this->model('RolesModel');
        $dataRoles = $userModel->getAllRoles();

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($dataRoles);
            return;
        }
    }

    public function new()
    {
        $data = [
            'title' => 'Nuevo Cargo',
            'sub_title' => 'Main / Roles / Nuevo',
            'module' =>  $this->module,
        ];

        return View::renderComponent('admin.templates.roles.new_role', $data);
    }


    public function store()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $role_abreviatura = $_POST['role_abreviatura'];
            $role_cargo = $_POST['role_cargo'];



            $nuevo_cargo = $this->model('RolesModel')->createRole(
                $role_abreviatura,
                $role_cargo,
                null,
                true
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


    public function edit($id_role)
    {
        $data = [
            'title' => 'Actualizar Cargo',
            'sub_title' => 'Main / Roles / Actualizar',
            'module' =>  $this->module,
            'id_role' => $id_role
        ];

        return View::renderComponent('admin.templates.roles.new_role', $data);

    }

    public function update()
    {

        $role_abreviatura = $_POST['role_abreviatura'];
        $role_cargo = $_POST['role_cargo'];
        $id_rol = $_POST['id_rol'];

        $role = $this->model('RolesModel')->updateRole(
            $id_rol,
            $role_abreviatura,
            $role_cargo,
            null
        );

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode(
                [
                    'aaa' => $role_abreviatura,
                    'id_bbbrole' => $role_cargo,
                    'status' => 'success',
                    'message' => 'Cargo actualizado correctamente'
                ]
            );
            return;
        }
    }


    public function get($id_role)
    {
        $roleModel = $this->model('RolesModel');
        $role = $roleModel->getRoleById($id_role);

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode($role);
            return;
        }
    }



    public function delete($id_role)
    {
        $this->model('RolesModel')->deleteRole($id_role);

        if (isAjax()) {
            header('Content-Type: application/json');
            echo json_encode(
                [
                    'id_role' => $id_role,
                    'status' => 'success',
                    'message' => 'Cargo eliminado correctamente'
                ]
            );
            return;
        }
    }
}
