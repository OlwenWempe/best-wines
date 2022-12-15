<section class='my-5'>
    <?php if (isset($success)) : ?>
    <div class="mx-auto col-5 alert alert-success">
        <p class="text-center"><?= $success ?></p>
    </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
    <div class="mx-auto col-5 alert alert-danger">
        <p class="text-center"><?= $error ?></p>
    </div>
    <?php else : ?>
    <div class="container wineShow">
        <div class="row">
            <h1 class="text-center my-5"><?= $wine['wine_name'] ?></h1>
            <div class="col-5">
                <img class="w-100" src="<?= BASE_DIR . "/" . $wine['link_picture_max'] ?>"
                    alt="<?= $wine['wine_name'] ?>">
                <div class="mt-5 d-flex justify-content-around">
                    <div>
                        <p class="btn btn-light">Réf : <?= $wine['wine_id'] ?></p>
                        <?php if ($wine['stock'] <= 10) : ?>
                        <p>Stock limité</p>
                        <?php endif ?>
                    </div>
                    <p class="btn btn-primary"><?= $wine['prix_de_vente'] ?> €</p>
                </div>
                <div class="mt-5 d-flex justify-content-around">
                    <?php if ($_SESSION['admin']['auth']) : ?>
                    <h2 class="ms-2 showSubtitle">Fournisseur :</h2>
                    <p><?= $wine['logo'] ?></p>
                    <form action="" method="post">
                        <input class="btn btn-primary" type="submit" name="submit" value="modifier">
                    </form>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-7">
                <h2 class="ms-2 showSubtitle">Description :</h2>
                <p><?= $wine['description'] ?></p>
                <h2 class="ms-2 showSubtitle">Cépages :</h2>
                <p><?= $wine['grape_variety'] ?></p>
                <?php if ($_SESSION['admin']['auth']) : ?>
                <h2 class="ms-2 showSubtitle">Prix d'achat :</h2>
                <p><?= $wine['prix_d_achat'] ?> €</p>
                <?php endif ?>
                <h2 class="ms-2 showSubtitle">Provenance :</h2>
                <p><?= $wine['region_name'] ?></p>
                <p><?= $pays['nom_fr_fr'] ?></p>
                <h2 class="ms-2 showSubtitle">Variant :</h2>
                <p><?= $wine['type_name'] ?></p>
                <h2 class="ms-2 showSubtitle">Saveurs :</h2>
                <?php foreach ($taste_tags as $taste_tag) : ?>
                <p class="rounded bg-danger my-2 px-2 d-inline-flex"><?= $taste_tag['taste_name'] ?></p>
                <?php endforeach ?>
                <h2 class="ms-2 showSubtitle">S'accorde avec :</h2>
                <?php foreach ($accord_tags as $accord_tag) : ?>
                <p class="rounded bg-warning my-2 px-2 d-inline-flex"><?= $accord_tag['accord_name'] ?></p>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <?php endif; ?>
</section>