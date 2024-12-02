<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Subir Video</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Subir Video</h2>
        <form action="<?= base_url('videos/insert') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Título del Video</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del Video</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="duracion">Duración del Video (en segundos)</label>
                <input type="number" class="form-control" id="duracion" name="duracion" required>
            </div>
            <div class="form-group">
                <label for="archivoVideo">Seleccionar Video</label>
                <input type="file" class="form-control" id="archivoVideo" name="archivoVideo" accept=".mp4, .wav" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
</body>
</html>
