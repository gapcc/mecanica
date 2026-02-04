<?php require_once __DIR__ . "/../layout/header.php"; ?>

<h2>👥 Clientes</h2>

<a href="index.php?controller=cliente&action=crear" class="btn">
    ➕ Nuevo Cliente
</a>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php if ($clientes && $clientes->num_rows > 0): ?>
        <?php while ($row = $clientes->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id_cliente'] ?></td>
                <td><?= $row['nombres'] ?></td>
                <td><?= $row['apellidos'] ?></td>
                <td><?= $row['cedula'] ?></td>
                <td><?= $row['telefono'] ?></td>
                <td><?= $row['correo'] ?></td>
                <td>
                    <a href="index.php?controller=cliente&action=editar&id=<?= $row['id_cliente'] ?>">✏️</a>
                    |
                    <a href="index.php?controller=cliente&action=eliminar&id=<?= $row['id_cliente'] ?>"
                       onclick="return confirm('¿Eliminar cliente?')">🗑️</a>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="7" style="text-align:center;">
                No hay clientes registrados
            </td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>

