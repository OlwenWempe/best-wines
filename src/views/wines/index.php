<h1>Ceci est la page index de nos produits</h1>
<ul>
    <?php foreach ($wines as $wine) : ?>

    <li><?= $wine['name'] ?></li>

    <?php endforeach; ?>
</ul>