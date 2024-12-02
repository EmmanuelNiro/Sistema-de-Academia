<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>menu.css">
    
    <title>ClassMate</title>
</head>
<body>
    <nav class="navbar fixed-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <img src="<?= base_url('classmate.png') ?>" alt="Icono" class="navbar-toggler-icon">
        </button>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ClassMate</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
                <!-- Mostrar solo a los docentes -->
                <?php if (session()->get('tipo') == 'docente'): ?>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=base_url('/classmate');?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/docente'); ?>">Editar Docentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/materias'); ?>">Editar Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/manuales'); ?>">Editar Manuales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/software'); ?>">Editar Software</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/videos'); ?>">Editar Videos</a>
                </li>
                <?php endif; ?>
                <!-- Mostrar solo a los estudiantes -->
                <?php if (session()->get('tipo') == 'alumno'): ?>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=base_url('/alumnos');?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('front/Materias'); ?>">Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('front/Manuales'); ?>">Manuales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('front/Software'); ?>">Software</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('front/Videos'); ?>">Videos</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/usuario/salir'); ?>">Salir</a>
                </li>
            </ul>
           
            </form>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrap.com/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
