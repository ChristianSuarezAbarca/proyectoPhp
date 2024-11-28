<!-- Principal Content Start -->
<div id="galeria">
    <div class="container" style="display: flex; justify-content:center">
        <!-- Contenedor con estilo para centrar el formulario y la tabla -->
        <div class="col-xs-12 col-sm-8 col-sm-push-2" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h2>Upload an Image</h2>
            <!-- Sección que muestra la confirmación del formulario o bien sus errores -->
            <?php include __DIR__ . '/show-error.part.view.php'; ?>
            <!-- Formulario que permite subir una imagen con su descripción -->
            <form class="form-horizontal" action="/galeria/nueva" method="post" enctype="multipart/form-data" style="display: flex; flex-direction:column; align-items:center; gap: 15px; width: 100%;">
                <div class="form-group" style="width: 100%;">
                    <div class="col-xs-12" style="width: 100%;">
                        <label class="label-control" style="font-size: 18px;">Imagen</label>
                        <input class="form-control-file" type="file" name="imagen" style="width: 100%; font-size: 16px; padding: 8px;">
                    </div>
                </div>
                <div class="form-group" style="width: 100%;">
                    <div class="col-xs-12" style="width: 100%;">
                        <label class="label-control" style="font-size: 18px;">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $titulo ?>" style="width: 100%; font-size: 16px; padding: 10px;">
                        <label class="label-control" style="font-size: 18px; margin-top: 10px;">Descripción</label>
                        <textarea class="form-control" name="descripcion" style="width: 100%; font-size: 16px; padding: 10px; height: 100px;"><?= $descripcion ?></textarea>
                    </div>
                </div>
                <div class="form-group" style="width: 100%; text-align: center;">
                    <button class="btn btn-lg sr-button" style="font-size: 18px; padding: 10px 20px; background-color: red; color: #fff; border: none; border-radius: 5px;">ENVIAR</button>
                </div>
            </form>
            <h2>Your Coffee Images</h2>
            <div class="imagenes_galeria" style="width: 100%; max-width: 1000px; overflow-x: auto;">
                <table class="table" style="width: 100%; margin-top: 20px;">
                    <thead>
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Likes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($imagenes as $imagen) : ?>
                            <tr>
                                <th scope="row"><a href="/galeria/<?= $imagen->getId() ?>"><?= $imagen->getTitulo() ?></a></th>
                                <td>
                                    <img src="<?= $imagen->getUrlImagenes() ?>"
                                        alt="<?= $imagen->getDescripcion() ?>"
                                        title="<?= $imagen->getDescripcion() ?>"
                                        width="100px">
                                </td>
                                <td><?= $imagen->getNumLikes() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>