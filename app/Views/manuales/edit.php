<div class="container">
    <div class="row">
        <div class="col">

        <h2>Actualizar Manuales</h2>

        
    <form action="<?=base_url('manuales/update/'); ?>" method="POST">
    <input type="hidden" name="idManual" value="<?=$manuales[0]->idManual;?>" >    
    <div class="mb-3">
        <br>
            <label for="titulo" class="form-label">Titulo</label>
            <input name="titulo" type="text" value="<?=$manuales[0]->titulo; ?>"
                 class="form-control" id="titulo" placeholder="Titulo">

                 <br>
            <label for="paginas" class="form-label">Paginas</label>
           <input name="paginas" type="text" value="<?=$manuales[0]->paginas; ?>"
                 class="form-control" id="paginas" placeholder="Cantidad de Paginas">




        </div>
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
        
    </div>
    </div>
</div>