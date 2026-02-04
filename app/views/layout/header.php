<?php
// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Proteger páginas (excepto login)
if (!isset($_SESSION['login'])) {
    header("Location: /mecanica/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Mecánica</title>

    <!-- CSS PRINCIPAL -->
    <link rel="stylesheet" href="/mecanica/css/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header class="header">
    <h1>🔧 Sistema de Gestión de Mecánica</h1>
</header>

<div class="container">
