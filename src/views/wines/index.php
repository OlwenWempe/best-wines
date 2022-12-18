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
    <aside class="col-md-3 p-3">

    </aside>
    <div class="col-8 text-center">

        <div class="col-md-12">
            <input type="search" name="winesearch" id="winesearch">
        </div>

        <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-around">
            <?php foreach ($wines as $wine) : ?>
            <div class="card mx-2">
                <a href="<?= BASE_DIR ?>/nos-vins/?id=<?= $wine['wine_id'] ?>"><img class="card-img-top"
                        src="<?= BASE_DIR . "/uploadsMini/" . $wine['link_picture_max'] ?>"
                        alt="<?= $wine['wine_name'] ?>">
                </a>

                <div class="card-body">
                    <a class="bdx nav-link" href="<?= BASE_DIR ?>/nos-vins/?id=<?= $wine['wine_id'] ?>">
                        <h5 class="card-title"><?= $wine['wine_name'] ?></h5>
                    </a>
                    <p class="card-text"><?= substr($wine['description'], 0, 100) ?></p>

                    <small>Réf : <?= $wine['wine_id'] ?></small>
                    <?php if (count($wine['accord_tags']) > 0) : ?>
                    <div>
                        <?php $count = count($wine['accord_tags']);
                                if ($count > 2) $count = 2;
                                for ($i = 0; $i < $count; $i++) : ?>

                        <p class="rounded bg-danger my-2 px-2 d-inline-flex">
                            <?= $wine['accord_tags'][$i]['accord_name'] ?>
                        </p>
                        <?php endfor ?>
                    </div>
                    <?php endif ?>
                    <?php if (count($wine['taste_tags']) > 0) : ?>
                    <div>
                        <?php $count = count($wine['taste_tags']);
                                if ($count > 2) $count = 2;
                                for ($i = 0; $i < $count; $i++) : ?>

                        <p class="rounded bg-warning my-2 px-2 d-inline-flex">
                            <?= $wine['taste_tags'][$i]['taste_name'] ?>
                        </p>
                        <?php endfor ?>
                    </div>
                    <?php endif ?>
                    <div id="wine_icon" class="container text-end">

                        <a href="<?= BASE_DIR ?>/votre-panier/addwine?id=<?= $wine['wine_id'] ?>">
                            <img class=" rounded-circle" src="<?= BASE_DIR ?>/assets/img/shopping-cart.png" alt="">
                        </a>

                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>