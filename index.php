<?php
session_start();

$controller = $_GET['controller'] ?? 'login';
$action = $_GET['action'] ?? 'index';

if (!isset($_SESSION['login']) && $controller != 'login') {
    header("Location: index.php?controller=login&action=index");
    exit;
}

require_once __DIR__ . "/app/controllers/" . ucfirst($controller) . "Controller.php";

$nombreController = ucfirst($controller) . "Controller";
$controlador = new $nombreController();
$controlador->$action();

