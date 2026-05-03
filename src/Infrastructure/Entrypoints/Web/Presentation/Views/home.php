<?php require __DIR__ . '/layouts/header.php'; ?>
<?php require __DIR__ . '/layouts/menu.php'; ?>

<h1>Menú principal del CRUDL de usuarios</h1>

<p>Desde aquí podrás usar todas las funciones del CRUD. Elige una acción y sigue los pasos.</p>

<?php if (!empty($message)): ?>
    <div class="alert-error">
        <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
    </div>
<?php endif; ?>

<?php if (!empty($success)): ?>
    <div class="alert-success">
        <?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?>
    </div>
<?php endif; ?>

<div style="margin: 18px 0; display: flex; flex-wrap: wrap; gap: 12px;">
    <a class="btn btn-primary" href="?route=users.create">Registrar usuario</a>
    <a class="btn" href="?route=users.index">Listar usuarios</a>
    <a class="btn" href="?route=auth.login">Iniciar sesión</a>
    <a class="btn" href="?route=auth.forgot">Recuperar contraseña</a>
</div>

<div style="margin-top: 24px;">
    <p><strong>Funciones disponibles:</strong></p>
    <ul>
        <li><strong>C:</strong> Registrar usuario</li>
        <li><strong>R:</strong> Consultar usuario desde el listado</li>
        <li><strong>U:</strong> Actualizar usuario desde el listado o detalle</li>
        <li><strong>D:</strong> Eliminar usuario desde el listado</li>
        <li><strong>L:</strong> Listar usuarios</li>
    </ul>
</div>

<?php require __DIR__ . '/layouts/footer.php'; ?>
