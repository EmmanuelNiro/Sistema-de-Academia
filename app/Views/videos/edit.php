<div class="container">
    <div class="row">
        <div class="col">

        <h2>Actualizar Video</h2>
        
        <form action="<?=base_url('videos/update/'); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="idVideo" value="<?=$videos[0]->idVideo;?>" >    
            <div class="mb-3">
                <br>
                <label for="titulo" class="form-label">Título</label>
                <input name="titulo" type="text" value="<?=$videos[0]->titulo; ?>"
                     class="form-control" id="titulo" placeholder="Título">

                <br>
                <label for="descripcion" class="form-label">Descripción del Video</label>
                <textarea name="descripcion" class="form-control" id="descripcion" rows="4" placeholder="Descripción"><?=$videos[0]->descripcion;?></textarea>

                <br>
                <label for="duracion" class="form-label">Duración del Video (en segundos)</label>
                <input name="duracion" type="number" value="<?=$videos[0]->duracion;?>"
                     class="form-control" id="duracion" placeholder="Duración en segundos">

                <br>
                <label for="archivo_video" class="form-label">Archivo de Video</label>
                <input name="archivoVideo" type="file" class="form-control" id="archivo_video" accept=".mp4, .wav">
                
            </div>
            <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
        
    </div>
    </div>
</div>

