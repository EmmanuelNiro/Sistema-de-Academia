<div class="container">
    <div class="row">
        <div class="col">

        <h2>Actualizar Docente</h2>
    <form action="<?=base_url('docente/update/'); ?>" method="POST">
    <input type="hidden" name="idDocente" value="<?=$docente[0]->idDocente; ?>">    
    <div class="mb-3">
            <label for="nombre" class="form-label">Docente</label>
            <input name="nombre" type="text" value="<?=$docente[0]->nombre; ?>"
                 class="form-control" id="nombre" placeholder="nombre">

                 <label for="aPaterno" class="form-label">Apellido Paterno</label>
            <input name="aPaterno" type="text" value="<?=$docente[0]->aPaterno; ?>"
                 class="form-control" id="aPaterno" placeholder="Apellido Paterno">

                 <label for="aMaterno" class="form-label">Apelldio Materno</label>
            <input name="aMaterno" type="text" value="<?=$docente[0]->aMaterno; ?>"
                 class="form-control" id="aMaterno" placeholder="Apellido Materno">     
          
                 <label for="correo" class="form-label">Correo</label>
            <input name="correo" type="text" value="<?=$docente[0]->correo; ?>"
                 class="form-control" id="correo" placeholder="Correo Institucional">

                 
            
        </div>
          
        </div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        </form>
    
    </div>
    </div>
</div>