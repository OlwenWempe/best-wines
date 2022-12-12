<?php foreach ($wines as $wine) : ?>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="uploadMini/<?= $wine['link_picture_mini'] ?>" alt="<?= $wine['name'] ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $wine['name'] ?></h5>
        <p class="card-text"><?= $wine['description'] ?></p>
        <a href="<?= BASE_DIR ?>/nos-vins/?<?= $wine['id'] ?>" class="btn btn-primary">Voir le vin</a>
    </div>
</div>
<?php endforeach; ?>