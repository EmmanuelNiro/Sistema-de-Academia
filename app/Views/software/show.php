<div class="container">

<div class="row">
    <div class="col">
        <h1>Software</h1>
        <a href="<?=base_url('software/add');?> " class="btn btn-success">Agregar</a>
        <p>

        </p>
    </div>
</div>


    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idSoftware</th>
                    <th>nombre</th>
                    <th>version</th>
                </thead>
                <tbody>
                    <?php foreach($software as $key) : ?>
                        <tr>
                        <td><?=$key->idSoftware ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->version ?></td>
                        <td>
                            <a href="<?=base_url('software/delete/'.$key->idSoftware);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('software/edit/'.$key->idSoftware);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>