<section class='mb-5'>
<?php if (isset($success)) : ?>
    <div>
        <span class="text-success text-center"><?= $success ?></span>
    </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
    <div>
        <span class="text-danger text-center"><?= $error ?></span>
    </div>
    <?php endif; ?>
    <div class="container">
        <p><?= $wine['id'] ?></p>
        <h2><?= $wine['name'] ?></h2>
        <img src="<?=$wine['link_picture_maxi'] ?>" alt="<?= $wine['name'] ?>">
        <p><?=$wine['description']?></p>
        <p><?= $wine['grape_variety'] ?></p>
        <p><?= $wine['prix_d_achat'] ?> €</p>
        <p><?= $wine['prix_de_vente'] ?> €</p>
        <p><?= $wine['stock'] ?></p>
        <p><?= $wine['id_region'] ?></p>
        <p><?= $wine['id_type_wine'] ?></p>
        <p><?= $wine['id_taste_tag'] ?></p>
        <p><?= $wine['id_accord_tag'] ?></p>
        <?php if ($_SESSION['admin']['auth'] ) : ?>
            <p><?= $wine['id_supplier'] ?></p>
            <form action="" method="post">
            <input class="btn btn-primary" type="submit" name="submit" value="modifier">
            </form>
            <?php endif ?>
    </div>
</section>