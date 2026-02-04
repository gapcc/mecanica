<?php
require_once __DIR__ . "/../models/Usuario.php";

class LoginController {

    public function index() {
        require __DIR__ . "/../views/login/index.php";
    }

    public function ingresar() {
        $result = Usuario::login($_POST['usuario'], $_POST['password']);

        if ($result->num_rows > 0) {
            $_SESSION['login'] = true;
            header("Location: index.php?controller=dashboard&action=index");

        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function salir() {
        session_destroy();
        header("Location: index.php");
    }
}

