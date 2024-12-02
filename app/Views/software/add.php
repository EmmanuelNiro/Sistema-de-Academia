<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Software</h2>
        <?validation_list_errors() ?>

    <form action="<?=base_url('software/insert'); ?>" method="POST">
    <input type="hidden" name = "<?= csrf_token() ?>" value="<? csrf_hash() ?>">
    
    <div class="mb-3">
        
            <label for="software" class="form-label">Software</label>
            <input name="nombre" type="text" class="form-control" id="nombre" required 
            placeholder="Nombre" value="<?=set_value('nombre')?>">
            
            <label for="software" class="form-label">Version</label>
            <input name="version" type="text" class="form-control" id="version" required 
            placeholder="Version actual" value="<?=set_value('version')?>">

            <label for="software" class="form-label">Desarrolladora</label>
            <input name="desarrolladora" type="text" class="form-control" id="desarrolladora" required 
            placeholder="Empresa desarroladora" value="<?=set_value('desarrolladora')?>">
            
            
          

            
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    
    </div>
    </div>
</div>