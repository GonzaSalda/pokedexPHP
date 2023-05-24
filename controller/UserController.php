<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class UserController {
    private $userModel;
    private $view;
    public function __construct($userModel, $view) {
        $this->userModel = $userModel;
        $this->view= $view;
    }

    public function register() {
        $data = array(
            'nombre' => $_POST['nombre'],
            'fecha_nacimiento' => $_POST['fecha_nacimiento'],
            'sexo' => $_POST['sexo'],
            'pais' => $_POST['pais'],
            'ciudad' => $_POST['ciudad'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'username' => $_POST['username'],
            'img_profile' => $_FILES['img_profile']['name'],
         );

        $result = $this->userModel->crearUsuario($data);
        if ($result) {
            echo 'Registro exitoso. Se ha creado un nuevo usuario.';
        } else {
            echo 'Error al crear el usuario. Por favor, intenta nuevamente.';
        }
    }

    public function Login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                if ($this->userModel->login($username, $password)) {
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                    exit();
                }
            }
        }
    }

    public function logout() {
        if (isset($_POST['action']) && $_POST['action'] == 'logout') {
            session_start();
            session_unset();
            session_destroy();
            header('Location: index.php');
            exit();
        }
    }


}
