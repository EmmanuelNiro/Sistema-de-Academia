<div class="container">
    <div class="row">
        <div class="col">

            <h2>Agregar manuales</h2>


            <form action="<?=base_url('manuales/insert'); ?>" method="POST">
                <input type="hidden" name= "<?= csrf_token() ?>" value="<? csrf_hash() ?>">

                <div class="mb-3">
                    <label for="manuales" class="form-label">Manuales</label>
                    <input name="titulo" type="text" class="form-control" id="titulo" required 
                    placeholder="Titulo">

                    <label for="manuales" class="form-label">Paginas</label>
                    <input name="paginas" type="text" class="form-control" id="paginas" required 
                           placeholder="Cantidad de páginas">
                
            </div>
            <input type="submit" class="btn btn-success" value="Agregar">
            </form>
        
        </div>
    </div>
</div>
