<!DOCTYPE html>
<html lang="es">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Docentes</title>
</head>
<body>
    <h2>Login de Docentes</h2>
    <?php echo validation_errors(); ?>
    <?php if($this->session->flashdata('error')): ?>
        <p><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <form action="<?php echo site_url('docente/login'); ?>" method="post">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
