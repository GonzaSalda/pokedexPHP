<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class LoginController {
    private $loginModel;

    public function __construct(LoginModel $loginModel) {
        $this->loginModel = $loginModel;
    }

    public function Login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['usuario']) && isset($_POST['password'])) {
                $username = $_POST['usuario'];
                $password = $_POST['password'];
                if ($this->loginModel->login($username, $password)) {
                    $_SESSION['usuario'] = $username;
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
