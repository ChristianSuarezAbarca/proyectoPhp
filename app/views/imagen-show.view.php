<div id="galeria">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>Image Details</h1>
            <div class="imagenes_galeria">
                <img src="<?= $imagen->getUrlImagenes() ?>" alt="<?= $imagen->getDescripcion() ?>"
                    title="<?= $imagen->getDescripcion() ?>" style="height: 350px;"><br>
                <br>Title: <?= $imagen->getTitulo() ?>
                <br>Description: <?= $imagen->getDescripcion() ?>
                <br>Número de likes: <?= $imagen->getNumLikes() ?>
            </div>
        </div>
    </div>
</div>