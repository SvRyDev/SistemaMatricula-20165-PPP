<?php
class HomeController extends Controller {


   public function index() {
    session_start(); // Asegúrate de iniciar la sesión al comienzo.

    if (!empty($_SESSION['user_id'])) {
        // Si la sesión está activa, redirige al dashboard
        $data = [
            'title' => 'Bienvenido al Sistema de Matricula - 2024',
            'sub_title' => 'Selecciona una opción del menú para comenzar',
            'module' => 'dashboard',
        ];
        echo View::renderComponent('admin.templates.dashboard.dashboard', $data);
        exit(); // Detén la ejecución para evitar cargar otra vista.
    }

    // Si no hay sesión, muestra la página de inicio
    $data = [
        'title' => 'Página de Inicio',
        'welcomeMessage' => 'Bienvenido a nuestro sistema de Matriculas!',
        'module' => 'home',
    ];
    $this->view('index', $data);
}



    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['l_username'];
            $password = hash('sha256', $_POST['l_password']);

            $userModel = $this->model('UserModel');
            $user = $userModel->findUserByCredentials($username, $password);

            if (!empty($user)) {
                // Usuario autenticado correctamente
                session_start();
                $_SESSION['user_id'] = $user->id_usuario;

                $data = [
                    'title' => 'Bienvenido al Sistema de Matricula - 2024',
                    'sub_title' => 'Selecciona una opción del menú para comenzar',
                    'module' => 'dashboard',
                ];
                echo View::renderComponent('admin.templates.dashboard.dashboard', $data);
                
                exit();
            } else {
                // Credenciales incorrectas
                $data = [
                    'title' => 'Login',
                    'error' => 'Credenciales incorrectas. Por favor, intenta de nuevo.'
                ];
                header("Location: " . APP_URL );
            }
        } else {
            header("Location: " . APP_URL);
            exit();
        }
    }


    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: " . APP_URL);
        exit();
    }

}
?>
