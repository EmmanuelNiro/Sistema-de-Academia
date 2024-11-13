<div class="container">
    <div class="row">
        <div class="col">

        <h2>Actualizar Materia</h2>

        
    <form action="<?=base_url('materias/update/'); ?>" method="POST">
    <input type="hidden" name="idMateria" value="<?=$materias[0]->idMateria;?>" >    
    <div class="mb-3">
        <br>
            <label for="nombre" class="form-label">Materia</label>
            <input name="nombre" type="text" value="<?=$materias[0]->nombre; ?>"
                 class="form-control" id="nombre" placeholder="materia">

                 <br>
            <label for="planEstudios" class="form-label">Plan de Estudios</label>
           <input name="planEstudios" type="text" value="<?=$materias[0]->planEstudios; ?>"
                 class="form-control" id="planEstudios" placeholder="Plan de estudios">




        </div>
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
        
    </div>
    </div>
</div>