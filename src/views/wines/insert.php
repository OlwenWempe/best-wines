<section class="mt-5 container py-3">
    <?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

    <?php endif; ?>
    <div class="card mx-auto" style="width: 25vw;">
        <form action="<?= BASE_DIR ?>/admin/addwine" method="post" class="card-body" enctype="multipart/form-data">
            <div id="connection-card" class="card-header">
                <h5 class="card-title text-center">Ajouter un vin</h5>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="name">Nom :</label>
                    <input value="<?php if (isset($_POST['name'])) echo $_POST['name'] ?>" class="form-control mt-3"
                        type="text" name="name" id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="description">Description :</label>
                    <textarea value="<?php if (isset($_POST['description'])) echo $_POST['description'] ?>"
                        class="form-control mt-3" type="text" name="description" id="description"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="link_picture_max">photo :</label>
                    <input value="<?php if (isset($_POST['link_picture_max'])) echo $_POST['link_picture_max'] ?>"
                        class="form-control mt-3" type="file" name="link_picture_max" id="link_picture_max">
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="prix_d_achat">Prix d'achat :</label>
                    <input value="<?php if (isset($_POST['prix_d_achat'])) echo $_POST['prix_d_achat'] ?>"
                        class="form-control mt-3" type="number" step="any" name="prix_d_achat" id="prix_d_achat">
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="prix_de_vente">Prix de vente :</label>
                    <input value="<?php if (isset($_POST['prix_de_vente'])) echo $_POST['prix_de_vente'] ?>"
                        class="form-control mt-3" type="number" step="any" name="prix_de_vente" id="prix_de_vente">
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="stock">Quantité :</label>
                    <input value="<?php if (isset($_POST['stock'])) echo $_POST['stock'] ?>" class="form-control mt-3"
                        type="number" name="stock" id="stock">
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="id_region">Region :</label>
                    <select class="form-control mt-3" name="id_region" id="id_region">
                        <option selected>Selectionnez la région</option>
                        <?php foreach ($regions as $region) : ?>
                        <option value="<?= $region['region_id'] ?>"><?= $region['region_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="grape_variety">Cépage :</label>
                    <input type="text" name="grape_variety" id="grape_variety">
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="id_type_wine">Type :</label>
                    <select class="form-control mt-3" name="id_type_wine" id="id_type_wine">
                        <option selected>Selectionnez le type de vin.</option>
                        <?php foreach ($types as $type) : ?>
                        <option value="<?= $type['type_id'] ?>"><?= $type['type_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="id_taste_tag">Goûts :</label>
                    <select class="form-control mt-3" multiple="yes" name="id_taste_tag[]" id="id_taste_tag">
                        <option>Selectionnez le goût.</option>
                        <?php foreach ($tasteTags as $tasteTag) : ?>
                        <option value="<?= $tasteTag['taste_id'] ?>"><?= $tasteTag['taste_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="id_accord_tag">S'accorde avec :</label>
                    <select class="form-control mt-3" multiple="yes" name="id_accord_tag[]" id="id_accord_tag">
                        <option>Selectionnez l'accord'.</option>
                        <?php foreach ($accordTags as $accordTag) : ?>
                        <option value="<?= $accordTag['accord_id'] ?>"><?= $accordTag['accord_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div>
                    <label for="id_supplier">Fournisseur :</label>
                    <select class="form-control mt-3" name="id_supplier" id="id_supplier">
                        <option selected>Selectionnez le fournisseur.</option>
                        <?php foreach ($suppliers as $supplier) : ?>
                        <option value="<?= $supplier['supplier_id'] ?>"><?= $supplier['supplier_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" name="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</section>