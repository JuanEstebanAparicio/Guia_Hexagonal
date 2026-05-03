<?php require __DIR__ . '/../layouts/header.php'; ?>
<?php require __DIR__ . '/../layouts/menu.php'; ?>

<h1>Detalle de usuario</h1>

<?php if (!empty($message)): ?>

    <div class="alert-error">
        <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
    </div>
<?php endif; ?>

<table class="detail-table">

    <tr>
        <th>ID</th>
        <td><?= htmlspecialchars($user->id(), ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
    
    <tr>
        <th>Nombre</th>
        <td><?= htmlspecialchars($user->name(), ENT_QUOTES, 'UTF-8') ?></td>
    </tr>

    <tr>
        <th>Correo</th>
        <td><?= htmlspecialchars($user->email(), ENT_QUOTES, 'UTF-8') ?></td>
    </tr>

    <tr>
        <th>Rol</th>
        <td><?= htmlspecialchars($user->role(), ENT_QUOTES, 'UTF-8') ?></td>
    </tr>

    <tr>
        <th>Estado</th>
        <td><?= htmlspecialchars($user->status(), ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
</table>

<p style="margin-top: 16px;">
    <a class="btn btn-warning" href="?route=users.edit&amp;id=<?= urlencode($user->id()) ?>">Editar</a>
    &nbsp;
    <form method="POST" action="?route=users.delete" style="display:inline-block; margin:0;">
        <input type="hidden" name="id" value="<?= htmlspecialchars($user->id(), ENT_QUOTES, 'UTF-8') ?>">
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este usuario?');">Eliminar</button>
    </form>
    &nbsp;
    <a class="btn" href="?route=users.index">Volver al listado</a>
</p>

<?php require __DIR__ . '/../layouts/footer.php'; ?>

