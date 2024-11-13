<div class="container">
    <div class="row">
        <div class="col">

        <h2>Actualizar software</h2>
    <form action="<?=base_url('software/update/'); ?>" method="POST">
    <input type="hidden" name="idSoftware" value="<?=$software[0]->idSoftware; ?>">
        <div class="mb-3">
            <label for="software" class="form-label">Software</label>
            <input name="nombre" type="text" value="<?=$software[0]->nombre; ?>"
                 class="form-control" id="nombre" placeholder="nombre">
            
        </div>

        <div class="mb-3">
            <label for="software" class="form-label">Version</label>
            <input name="version" type="text" value="<?=$software[0]->version; ?>"
                 class="form-control" id="version" placeholder="version">
          
        </div>
        
        </div>
        
        <input type="submit" class="btn btn-success" value="Actualizar">
        </form>
    
    </div>
    </div>
</div>