<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Mecánica</title>
    <link rel="stylesheet" href="/mecanica/css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-center">

<div class="card login-card">
    <h2>🔧 Mecánica San José</h2>
    <p>Iniciar sesión</p>

    <form method="POST" action="index.php?controller=login&action=ingresar">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>
