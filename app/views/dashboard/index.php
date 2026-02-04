<?php require_once __DIR__ . "/../layout/header.php"; ?>

<h2>📊 Dashboard</h2>
<p>Bienvenido al sistema de gestión de la mecánica.</p>

<div class="menu-grid">

    <a href="index.php?controller=cliente&action=index" class="menu-card">
        <h3>👤 Clientes</h3>
        <p>Gestión de clientes</p>
    </a>

    <a href="#" class="menu-card">
        <h3>🚗 Vehículos</h3>
        <p>Registro de autos</p>
    </a>

    <a href="#" class="menu-card">
        <h3>🛠️ Visitas</h3>
        <p>Servicios realizados</p>
    </a>

    <a href="index.php?controller=login&action=salir" class="menu-card salir">
        <h3>🚪 Salir</h3>
        <p>Cerrar sesión</p>
    </a>

</div>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
