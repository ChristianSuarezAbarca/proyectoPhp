<?php
usort($imagenes, function ($a, $b) {
    return $b->getNumLikes() - $a->getNumLikes();
});
?>

<div class="row" style="display: flex; flex-wrap: wrap; gap: 20px;">
    <?php foreach ($imagenes as $imagen) { ?>
        <div class="col-lg-3 col-md-6" style="flex: 1 1 calc(25% - 20px); box-sizing: border-box; max-width: 25%;">
            <div class="coffee_img">
                <img src="<?php echo $imagen->getUrlImagenes(); ?>"
                    alt="<?php echo $imagen->getDescripcion(); ?>"
                    style="height: 350px; width: 100%; object-fit: cover;">
            </div>
            <div class="coffee_box" style="text-align: center; padding: 10px;">
                <h3 class="types_text"><?php echo $imagen->getTitulo(); ?></h3>
                <p class="looking_text"><?php echo $imagen->getDescripcion(); ?> : <button><?php echo $imagen->getNumLikes(); ?> ♡</button></p>
                <div class="read_bt"><a href="/galeria/<?= $imagen->getId() ?>">View Details</a></div>
            </div>
        </div>
    <?php } ?>
</div>