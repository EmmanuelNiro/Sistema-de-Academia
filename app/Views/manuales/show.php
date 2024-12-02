<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablas.css">
    <title>Document</title>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col">
        <h1>Manuales</h1>
        <a href="<?=base_url('manuales/add');?> " class="btn btn-success">Agregar</a>
        
    </div>
</div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idManual</th>
                    <th>titulo</th>
                    <th>paginas</th>
                </thead>
                <tbody>
                    <?php foreach($manuales as $key) : ?>
                        <tr>
                        <td><?=$key->idManual ?></td>
                        <td><?=$key->titulo ?></td>
                        <td><?=$key->paginas ?></td>
                        <td>
                            <a href="<?=base_url('manuales/delete/'.$key->idManual);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('manuales/edit/'.$key->idManual);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
<link rel="stylesheet" href="tablas.css">
