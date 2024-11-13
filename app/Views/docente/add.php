<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Software</h2>
    <form action="<?=base_url('docente/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="software" class="form-label">Docente</label>

         
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
            <input name="aPaterno" type="text" class="form-control" id="aPaterno" placeholder="Apellido Paterno">
            <input name="aMaterno" type="text" class="form-control" id="aMaterno" placeholder="Apellido Materno">
            <input name="correo" type="text" class="form-control" id="correo" placeholder="correo">
            
            


            
          

            
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    
    </div>
    </div>
</div>