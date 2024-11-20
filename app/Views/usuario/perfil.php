<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="<?=base_url()?>registro.css">
</head>
<body>
<?php if (isset($validation) && $validation->getErrors()): ?>
    <div class="errors">
        <?php foreach ($validation->getErrors() as $error): ?>
            <p class="error"><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
    <div class="form-container">
        <h2>Crear mi cuenta</h2>
        <p>Por favor complete la siguiente información:</p>
        <form action="<?= base_url('usuario/registrarUsuario'); ?>" method="POST">
            <input type="text" placeholder="Nombre" name="nombre" required>
            <input type="text" placeholder="Apellidos" name="apellidos" required>
            <input type="correo" placeholder="Email" name="correo" required>
            <input type="password" placeholder="Contraseña" name="pass" required>
            <button type="submit">Crear Mi cuenta</button>
        </form>
    </div>
</body>
</html>
