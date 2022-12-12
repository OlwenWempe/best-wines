<section>
    <div class="align-items-center">
        <?php if (!isset($boxes) || ($boxes == false)) : ?>
        <div class="mx-auto col-5 alert alert-success">
            <p class="mb-5 text-center">Nous n'avons rien à afficher.</p>
            <div class=" d-flex justify-content-center">
                <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addbox">Ajouter un
                    box</a>
            </div>
        </div>

        <?php else : ?>
        <table class="mx-auto table table-striped">
            <thead>
                <tr>
                    <th class="">Réference</th>
                    <th class="">Nom</th>
                    <th class="">Description</th>
                    <th class="">Prix d'achat</th>
                    <th class="">Prix de vente</th>
                    <th class="">Stock</th>
                </tr>
            </thead>

            <tbody>
                <form action="" method="POST">

                    <?php
                        foreach ($boxes as $box) : ?>
                    <tr class=" table-danger">
                        <td><?= $box['id'] ?></td>
                        <td><?= $box['name'] ?></td>
                        <td><?= $box['description'] ?></td>
                        <td><?= $box['prix_d_achat'] ?> €</td>
                        <td><?= $box['prix_de_vente'] ?> €</td>
                        <td><?= $box['stock'] ?></td>

                    </tr>
                    <?php endforeach; ?>

                </form>
            </tbody>
            <?php endif; ?>
        </table>
    </div>
</section>