<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Materia</h2>
        <?validation_list_errors() ?>

    <form action="<?=base_url('materias/insert'); ?>" method="POST">
    <input type ="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>"    
    />
    <div class="mb-3">
            <label for="materias" class="form-label">Materias</label>

            <input name="nombre" type="text" class="form-control" id="nombre" requerid 
            placeholder="Materia" value="<?= set_value('nombre')?>">

            <input name="planEstudios" type="text" class="form-control" id="planEstudios" requerid 
            placeholder="Plan de estudios" value="<?= set_value('planEstudios') ?>">
            
            
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    
    </div>
    </div>
</div>