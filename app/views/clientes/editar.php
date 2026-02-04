<?php require_once __DIR__ . "/../layout/header.php"; ?>

<h2>✏️ Editar Cliente</h2>

<form method="POST" action="index.php?controller=cliente&action=actualizar">

    <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>">

    <div class="form-grid">
        <input type="text" name="nombres"
               value="<?= $cliente['nombres'] ?>" required>

        <input type="text" name="apellidos"
               value="<?= $cliente['apellidos'] ?>" required>

        <input type="text" name="cedula"
               value="<?= $cliente['cedula'] ?>" required>

        <input type="text" name="telefono"
               value="<?= $cliente['telefono'] ?>" required>

        <input type="email" name="correo"
               value="<?= $cliente['correo'] ?>" required>
    </div>

    <div class="form-actions">
        <button type="submit">Actualizar</button>
        <a href="index.php?controller=cliente&action=index"
           class="btn-secondary">Cancelar</a>
    </div>

</form>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
