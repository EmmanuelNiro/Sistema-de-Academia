<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('cuenta.css') ?>">
    <title>Iniciar Sesión</title>
</head>
<body>
<div class="container mt-5">  
    <div class="row justify-content-center">
        <div class="col-md-6 login-container">
            <h2 class="text-center mb-4">Iniciar Sesión</h2>
            <p class="text-center">Ingrese e-mail y contraseña con el que se registró</p>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form action="<?= base_url('usuario/acceder'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="email" class="form-control input-style" id="correo" name="correo" placeholder="Correo" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-style" id="pass" name="pass" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-purple btn-block">
                    <i class="fas fa-raccoon"></i> Iniciar Sesión <i class="fas fa-raccoon"></i>
                </button>
            </form>
            <div class="text-center mt-3">
                <span>¿Nuevo Usuario?</span>
                <a href="<?= base_url('usuario/registrarUsuario'); ?>" class="register-link">Regístrese</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
