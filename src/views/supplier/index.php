<section class="my-5 container">
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
    <h1 class="bdx my-5 text-center">Nos fournisseurs</h1>

    <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-around">
        <?php foreach ($suppliers as $supplier) : ?>
        <div class="card mx-2">
            <img class="card-img-top" src="<?= BASE_DIR . "/uploadsMini/" . $supplier['logo'] ?>"
                alt="<?= $supplier['supplier_name'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $supplier['supplier_name'] ?></h5>
                <a href="<?= BASE_DIR ?>/nos-fournisseurs/?id=<?= $supplier['supplier_id'] ?>"
                    class="btn btn-primary">Voir ce
                    fournisseur</a>

            </div>
        </div>

        <?php endforeach; ?>
    </div>
</section>