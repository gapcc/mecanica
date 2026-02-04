<?php require_once __DIR__ . "/../layout/header.php"; ?>

<h2>➕ Nuevo Cliente</h2>

<form method="POST" action="index.php?controller=cliente&action=guardar">

    <div class="form-grid">
        <input type="text" name="nombres" placeholder="Nombres" required>
        <input type="text" name="apellidos" placeholder="Apellidos" required>
        <input type="text" name="cedula" placeholder="Cédula" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="correo" placeholder="Correo" required>
    </div>

    <div class="form-actions">
        <button type="submit">Guardar</button>
        <a href="index.php?controller=cliente&action=index" class="btn-secondary">
            Cancelar
        </a>
    </div>
</form>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
