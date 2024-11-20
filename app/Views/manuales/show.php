<div class="container">

<div class="row">
    <div class="col">
        <h1>Materias</h1>
        <a href="<?=base_url('manuales/add');?> " class="btn btn-success">Agregar</a>
    </div>
</div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idManuales</th>
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
                            <a href="<?=base_url('manuales/delete/'.$key->idMateria);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('manuales/edit/'.$key->idMateria);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
