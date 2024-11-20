<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Manuales</h2>
        <?validation_list_errors() ?>

    <form action="<?=base_url('manuales/insert'); ?>" method="POST">
    <input type ="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>"    
    />
    <div class="mb-3">
            <label for="manuales" class="form-label">Manuales</label>

            <input name="titulo" type="text" class="form-control" id="titulo" requerid 
            placeholder="Titulo" value="<?= set_value('titulo')?>">

            <input name="paginas" type="text" class="form-control" id="paginas" requerid 
            placeholder="Cantidad de paginas" value="<?= set_value('paginas') ?>">
            
            
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    
    </div>
    </div>
</div>