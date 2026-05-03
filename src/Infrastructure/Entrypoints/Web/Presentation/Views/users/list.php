<?php require __DIR__ . '/../layouts/header.php'; ?>
<?php require __DIR__ . '/../layouts/menu.php'; ?>

<h1>Lista de usuarios</h1>

<p>Usa las acciones de la fila para ver, editar o eliminar cada usuario.</p>

<?php if (empty($users)): ?>
    <p>No hay usuarios registrados todavía.</p>

<?php else: ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user->id(), ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($user->name(), ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($user->email(), ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($user->role(), ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($user->status(), ENT_QUOTES, 'UTF-8') ?></td>
                    <td>
                        <a class="btn btn-sm" href="?route=users.show&amp;id=<?= urlencode($user->id()) ?>">Ver</a>
                        <a class="btn btn-sm btn-warning" href="?route=users.edit&amp;id=<?= urlencode($user->id()) ?>">Editar</a>
                        <form method="POST" action="?route=users.delete" style="display:inline-block; margin:0;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user->id(), ENT_QUOTES, 'UTF-8') ?>">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este usuario?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?php require __DIR__ . '/../layouts/footer.php'; ?>