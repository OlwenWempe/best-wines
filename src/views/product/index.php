<h1>Ceci est la page index de nos produits</h1>
<h2><?= $message ?></h2>
<ul>
    <?php foreach ($products as $product) : ?>

    <li><?= $product['name'] ?></li>

    <?php endforeach; ?>
</ul>