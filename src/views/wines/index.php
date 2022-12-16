<section class="mb-5">

    <?php foreach ($wines as $wine) : ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?= BASE_DIR . "/" . $wine['link_picture_max'] ?>"
            alt="<?= $wine['wine_name'] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $wine['wine_name'] ?></h5>
            <p class="card-text"><?= substr($wine['description'], 0, 100) ?></p>
            <a href="<?= BASE_DIR ?>/nos-vins/?id=<?= $wine['wine_id'] ?>" class="btn btn-primary">Voir le vin</a>
            <small>Réf : <?= $wine['wine_id'] ?></small>
            <?php if (count($wine['accord_tags']) > 0) : ?>
            <div>
                <?php $count = count($wine['accord_tags']);
                        for ($i = 0; $i < $count; $i++) : ?>

                <p class="rounded bg-danger my-2 px-2 d-inline-flex"><?= $wine['accord_tags'][$i]['accord_name'] ?></p>
                <?php endfor ?>
            </div>
            <?php endif ?>
            <?php if (count($wine['taste_tags']) > 0) : ?>
            <div>
                <?php $count = count($wine['taste_tags']);
                        for ($i = 0; $i < $count; $i++) : ?>

                <p class="rounded bg-warning my-2 px-2 d-inline-flex"><?= $wine['taste_tags'][$i]['taste_name'] ?></p>
                <?php endfor ?>
            </div>
            <?php endif ?>
        </div>
    </div>
    <?php endforeach; ?>
</section>