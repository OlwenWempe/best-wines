<section class="container-fluid">
    <div class="row">
        <h1 class="bdx my-5 text-center" id="homeH1">Bienvenue chez Best Wines</h1>
        <div id="homeCarousel" class="mb-5 carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= BASE_DIR ?>/assets/img/wine21.png" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_DIR ?>/assets/img/wine80.jpg" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_DIR ?>/assets/img/wine82.png" class="d-block w-100 h-50" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid ">
    <div class="row">
        <h2 class="my-4 bdx container ">Les nouveautés</h2>
        <?php foreach ($wines as $wine) : ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= BASE_DIR . "/" . $wine['link_picture_max'] ?>"
                alt="<?= $wine['wine_name'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $wine['wine_name'] ?></h5>
                <p class="card-text"><?= substr($wine['description'], 0, 100) ?></p>
                <a href="<?= BASE_DIR ?>/nos-vins/?id=<?= $wine['wine_id'] ?>" class="btn btn-primary">Voir le vin</a>
                <small>Réf : <?= $wine['wine_id'] ?></small>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>