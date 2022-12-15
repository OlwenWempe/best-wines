<section class="my-5 row">
    <?php if (isset($success)) : ?>
    <div class="alert alert-success" role="alert">
        <p class=" text-center"><?= $success ?></p>
    </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
        <p class="text-center"><?= $error ?></p>
    </div>
    <?php endif; ?>

    <div class="col-8 container text-center">
        <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-around">
            <?php foreach ($articles as $article) : ?>
            <div class="card mx-2">
                <?= $article['content'] ?>

            </div>
            <?php endforeach ?>
            <div class="card mx-2">
                <img class="card-img-top" src="<?= BASE_DIR ?>/assets/img/wine19.png" alt="brand logo">
                <div class="card-body">
                    <h5 class="card-title">MAISON : UNE SÉRIE DE NATURES, MORTES, OCT. 2025</h5>
                    <p class="card-text">Trouver le caractère poignant de la banalité pendant la pandémie.</p>
                    <a href="#" class="btn btn-primary">Voir article</a>
                </div>
            </div>

            <div class="card mx-2">
                <img class="card-img-top" src="<?= BASE_DIR ?>/assets/img/wine18.png" alt="brand logo">
                <div class="card-body">
                    <h5 class="card-title">MAISON : UNE SÉRIE DE NATURES, MORTES, OCT. 2025</h5>
                    <p class="card-text">Trouver le caractère poignant de la banalité pendant la pandémie.</p>
                    <a href="#" class="btn btn-primary">Voir article</a>
                </div>
            </div>

            <div class="card mx-2">
                <img class="card-img-top" src="<?= BASE_DIR ?>/assets/img/wine20.png" alt="brand logo">
                <div class="card-body">
                    <h5 class="card-title">PORTRAITS POUR LA PAIX, GALERIE FOURNIER, FÉV. 2026</h5>
                    <p class="card-text">Journaliste du Figaro</p>
                    <a href="#" class="btn btn-primary">Voir article</a>
                </div>
            </div>

            <div class="card mx-2">
                <img class="card-img-top" src="<?= BASE_DIR ?>/assets/img/wine17.png" alt="brand logo">
                <div class="card-body">
                    <h5 class="card-title">SIMILITUDE CAPTURÉE GALERIE, FOURNIER, DÉC. 2026</h5>
                    <p class="card-text">Portraits de créateurs dans leur studio et dans leur ville natale.</p>
                    <a href="#" class="btn btn-primary">Voir article</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>