<?php if (isset($message)) : ?>
<div>
    <span><?= $message ?></span>
</div>

<?php endif; ?>
<form action="<?= BASE_DIR ?>/wines/add" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea type="text" name="description" id="description"></textarea>
    </div>
    <div>
        <label for="description">photo :</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="PA">Prix d'achat :</label>
        <input type="text" name="PA" id="PA">
    </div>
    <div>
        <label for="PV">Prix de vente :</label>
        <input type="text" name="PV" id="PV">
    </div>
    <div>
        <label for="region">Region :</label>
        <input type="text" name="region" id="region">
    </div>
    <div>
        <label for="variety">Cépage :</label>
        <input type="text" name="variety" id="variety">
    </div>
    <div>
        <label for="type">Type :</label>
        <input type="text" name="type" id="type">
    </div>
    <div>
        <label for="taste">Goûts :</label>
        <input type="text" name="taste" id="taste">
    </div>
    <div>
        <label for="accord">S'accorde avec :</label>
        <input type="text" name="accord" id="accord">
    </div>
    <div>
        <label for="supplier">Fournisseur :</label>
        <input type="text" name="supplier" id="supplier">
    </div>

    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>

</form>