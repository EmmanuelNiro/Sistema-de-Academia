<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('cuenta.css') ?>">
    <title>Registro de Usuario</title>
</head>
<body>
<div class="container mt-5">  
    <div class="row justify-content-center">
        <div class="col-md-6 login-container">
            <h2 class="text-center mb-4">Registro de Usuario</h2>
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="<?= base_url('usuario/registrarUsuario') ?>" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" class="form-control" id="correo" name="correo" required>
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="pass" name="pass" required>
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo de Usuario</label>
        <select class="form-control" id="tipo" name="tipo" required>
            <option value="1">Docente</option>
            <option value="2">Alumno</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>

            <div class="text-center mt-3">
                <span>¿Ya tienes una cuenta?</span>
                <a href="<?= base_url('/usuario'); ?>" class="login-link">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
