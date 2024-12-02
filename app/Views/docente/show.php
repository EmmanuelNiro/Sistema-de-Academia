<div class="container">

<div class="row">
    <div class="col">
        <h1>Docente</h1>
        <a href="<?=base_url('docente/add');?> " class="btn btn-success">Agregar</a>
        <link rel="stylesheet" href="tables.css">
        <p>

        </p>
    </div>
</div>


    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idDocente</th>
                    <th>nombre</th>
                    <th>aPaterno</th>
                    <th>aMaterno</th>
                    <th>correo</th>

                </thead>
                <tbody>
                    <?php foreach($docente as $key) : ?>
                        <tr>
                        <td><?=$key->idDocente ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->aPaterno ?></td>
                        <td><?=$key->aMaterno ?></td>
                        <td><?=$key->correo ?></td>
                        <td>
                            <a href="<?=base_url('docente/delete/'.$key->idDocente);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('docente/edit/'.$key->idDocente);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
