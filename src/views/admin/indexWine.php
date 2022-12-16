<section>
    <div class="align-items-center">
        <?php if (!isset($wines) || ($wines == false)) : ?>
        <div class="mx-auto col-5 alert alert-success">
            <p class="mb-5 text-center">Nous n'avons rien à afficher.</p>
            <div class=" d-flex justify-content-center">
                <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addwine">Ajouter un
                    vin</a>
            </div>
        </div>

        <?php else : ?>
        <table class="mx-auto table table-striped">
            <thead>
                <tr>
                    <th class="">Réference</th>
                    <th class="">Nom</th>
                    <th class="">Image</th>
                    <th class="">Description</th>
                    <th class="">Cépage</th>
                    <th class="">Prix d'achat</th>
                    <th class="">Prix de vente</th>
                    <th class="">Stock</th>
                    <th class="">Région</th>
                    <th class="">Type</th>
                    <th class="">Goût</th>
                    <th class="">S'accorde avec</th>
                    <th class="">Fournisseur</th>

                </tr>
            </thead>

            <tbody>
                <form action="" method="POST">

                    <?php
                        foreach ($wines as $wine) : ?>
                    <tr class=" table-danger">
                        <td>
                            <a href="<?= BASE_DIR ?>/nos-vins/?id=<?= $wine['wine_id'] ?>" class="btn btn-primary">Voir
                                le
                                vin</a>
                        </td>
                        <td><?= $wine['wine_id'] ?></td>
                        <td><img src=" <?= BASE_DIR . "/uploadsIcon/" . $wine['link_picture_max'] ?>"
                                alt="<?= $wine['wine_name'] ?>">
                        </td>
                        <td><?= $wine['wine_name'] ?></td>
                        <td><?= substr($wine['description'], 0, 100) ?></td>
                        <td><?= $wine['grape_variety'] ?></td>
                        <td><?= $wine['prix_d_achat'] ?> €</td>
                        <td><?= $wine['prix_de_vente'] ?> €</td>
                        <td><?= $wine['stock'] ?></td>
                        <td><?= $wine['id_region'] ?></td>
                        <td><?= $wine['id_type_wine'] ?></td>
                        <td><?= $wine['id_taste_tag'] ?></td>
                        <td><?= $wine['id_accord_tag'] ?></td>
                        <td><?= $wine['id_supplier'] ?></td>
                    </tr>
                    <?php endforeach; ?>

                </form>
            </tbody>
            <?php endif; ?>
        </table>
    </div>
</section>