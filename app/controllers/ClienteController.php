<?php
require_once __DIR__ . "/../models/Cliente.php";

class ClienteController {

    public function index() {
        $clientes = Cliente::listar();
        require __DIR__ . "/../views/clientes/index.php";
    }

    public function crear() {
        require __DIR__ . "/../views/clientes/crear.php";
    }

    public function guardar() {

    if (
        empty($_POST['nombres']) ||
        empty($_POST['apellidos']) ||
        empty($_POST['cedula']) ||
        empty($_POST['telefono']) ||
        empty($_POST['correo'])
    ) {
        die("Todos los campos son obligatorios");
    }

    Cliente::guardar($_POST);

    header("Location: index.php?controller=cliente&action=index");
}


    public function editar() {
        $cliente = Cliente::obtener($_GET['id']);
        require __DIR__ . "/../views/clientes/editar.php";
    }

    public function actualizar() {
        Cliente::actualizar($_POST);
        header("Location: index.php?controller=cliente&action=index");
    }

    public function eliminar() {
        Cliente::eliminar($_GET['id']);
        header("Location: index.php?controller=cliente&action=index");
    }
}
