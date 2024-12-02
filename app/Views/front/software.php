<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('consulta.css') ?>">
    <title>Software</title>
</head>
<body>
    <div class="container">
        <h1>Software</h1>
        <table>
            <thead>
                <tr>
                <th>idSoftware</th>
                    <th>nombre</th>
                    <th>version</th>
                    <th>desarrolladora</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($software as $key) : ?>
                        <tr>
                        <td><?=$key->idSoftware ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->version ?></td>
                        <td><?=$key->desarrolladora ?></td>
                        <td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="current-page">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
    
</body>
</html>
