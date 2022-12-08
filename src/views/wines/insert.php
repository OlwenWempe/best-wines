<section class="mt-5 container py-3">
    <?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

    <?php endif; ?>
    <form action="<?= BASE_DIR ?>/nos-vins/add" method="post">
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
            <input type="text" name="link_picture_max" id="link_picture_max">
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
            <input type="text" name="stock" id="stock">
        </div>
        <div>
            <label for="id_region">Region :</label>
            <input type="text" name="id_region" id="id_region">
        </div>
        <div>
            <label for="id_grape_variety">Cépage :</label>
            <input type="text" name="id_grape_variety" id="id_grape_variety">
        </div>
        <div>
            <label for="id_type_wine">Type :</label>
            <input type="text" name="id_type_wine" id="id_type_wine">
        </div>
        <div>
            <label for="id_taste_tag">Goûts :</label>
            <input type="text" name="id_taste_tag" id="id_taste_tag">
        </div>
        <div>
            <label for="id_accord_tag">S'accorde avec :</label>
            <input type="text" name="id_accord_tag" id="id_accord_tag">
        </div>
        <div>
            <label for="id_supplier">Fournisseur :</label>
            <input type="text" name="id_supplier" id="id_supplier">
        </div>

        <div>
            <input type="submit" name="submit" value="Enregistrer">
        </div>

    </form>
</section>