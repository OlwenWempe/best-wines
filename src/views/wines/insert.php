<section class="mt-5 container py-3">
    <?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

    <?php endif; ?>
    <form action="<?= BASE_DIR ?>/nos-vins/add" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="description">Description :</label>
            <textarea type="text" name="description" id="description"></textarea>
        </div>
        <div>
            <label for="link_picture_max">photo :</label>
            <input type="file" name="link_picture_max" id="link_picture_max">
        </div>
        <div>
            <label for="prix_d_achat">Prix d'achat :</label>
            <input type="number" step="any" name="prix_d_achat" id="prix_d_achat">
        </div>
        <div>
            <label for="prix_de_vente">Prix de vente :</label>
            <input type="number" step="any" name="prix_de_vente" id="prix_de_vente">
        </div>
        <div>
            <label for="stock">Quantité :</label>
            <input type="number" name="stock" id="stock">
        </div>
        <div>
            <label for="id_region">Region :</label>
            <select name="id_region" id="id_region">
                <option selected>Selectionnez la région</option>
                <?php foreach ($regions as $region) : ?>
                <option value="<?= $region['region_id'] ?>"><?= $region['region_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="grape_variety">Cépage :</label>
            <input type="text" name="grape_variety" id="grape_variety">
        </div>
        <div>
            <label for="id_type_wine">Type :</label>
            <select name="id_type_wine" id="id_type_wine">
                <option selected>Selectionnez le type de vin.</option>
                <?php foreach ($types as $type) : ?>
                <option value="<?= $type['type_id'] ?>"><?= $type['type_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="id_taste_tag">Goûts :</label>
            <select name="id_taste_tag" id="id_taste_tag">
                <option selected>Selectionnez le goût.</option>
                <?php foreach ($tasteTags as $tasteTag) : ?>
                <option value="<?= $tasteTag['taste_id'] ?>"><?= $tasteTag['taste_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="id_accord_tag">S'accorde avec :</label>
            <select name="id_accord_tag" id="id_accord_tag">
                <option selected>Selectionnez l'accord'.</option>
                <?php foreach ($accordTags as $accordTag) : ?>
                <option value="<?= $accordTag['accord_id'] ?>"><?= $accordTag['accord_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="id_supplier">Fournisseur :</label>
            <select name="id_supplier" id="id_supplier">
                <option selected>Selectionnez le fournisseur.</option>
                <?php foreach ($suppliers as $supplier) : ?>
                <option value="<?= $supplier['supplier_id'] ?>"><?= $supplier['supplier_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div>
            <input type="submit" name="submit" value="Enregistrer">
        </div>

    </form>
</section>