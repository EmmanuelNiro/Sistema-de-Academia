<div class="container">

<div class="row">
    <div class="col">
        <h1>Materias</h1>
        <a href="<?=base_url('materias/add');?> " class="btn btn-success">Agregar</a>
        <link rel="stylesheet" href="tables.css">
    </div>
</div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idMateria</th>
                    <th>nombre</th>
                    <th>planEstudios</th>
                </thead>
                <tbody>
                    <?php foreach($materias as $key) : ?>
                        <tr>
                        <td><?=$key->idMateria ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->planEstudios ?></td>
                        <td>
                            <a href="<?=base_url('materias/delete/'.$key->idMateria);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('materias/edit/'.$key->idMateria);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
