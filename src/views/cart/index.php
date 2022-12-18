<section id="shopping-cart" class="my-5 container">
    <div>
        <h1 class="text-center bdx mb-4">Votre panier</h1>
        <a id="btnEmpty" class="btn btn-primary" href="votre-panier/empty">Vider Panier</a>
        <?php
        if (isset($_SESSION["cart_item"])) {


            $total_quantity = 0;
            $total_price = 0;
        ?>
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>

                    <th style="text-align:left;">Nom</th>
                    <th style="text-align:left;">Ref</th>
                    <th style="text-align:right;" width="5%">Quantité</th>
                    <th style="text-align:right;" width="10%">Prix Unitaire</th>
                    <th style="text-align:right;" width="10%">Prix</th>
                    <th style="text-align:center;" width="5%">Retirer</th>
                </tr>
                <?php
                    foreach ($_SESSION["cart_item"] as $item) {
                        $item_price = $item["quantity"] * $item["price"];
                    ?>
                <tr>
                    <td><img src="<?= $item["image"]; ?>" class="cart-item-image" /><?= $item["name"] ?></td>
                    <td><?= $item["id"] ?></td>
                    <td style="text-align:right;">
                        <form action="<?= BASE_DIR ?>/votre-panier/addwine?id=<?= $item["id"] ?>" method="POST"><input
                                type="number" min="1" value="<?= $item["quantity"]; ?>" name="qty" id="qty"><input
                                type="hidden" name="name" value="<?= $item["name"]; ?>"><input type="submit"
                                value="Mettre à jour">
                        </form>
                    </td>
                    <td style="text-align:right;"><?= $item["price"] . " €" ?></td>
                    <td style="text-align:right;"><?= number_format($item_price, 2) . " €" ?></td>
                    <td style="text-align:center;"><a href="<?= BASE_DIR ?>/votre-panier/remove?id=<?= $item["id"]; ?>"
                            class="btnRemoveAction"><i class="bdx fa-solid fa-trash-can"></i></a></td>
                </tr>
                <?php
                        $total_quantity += $item["quantity"];
                        $total_price += ($item["price"] * $item["quantity"]);
                    }
                    $_SESSION['total_price'] = $total_price;
                    ?>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><?php
                                            echo $total_quantity; ?></td>
                    <td align="right" colspan="2"><strong><?= number_format($total_price, 2) . " €"; ?></strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <?php
        } else {
        ?>
        <div class="alert alert-success" role="alert">
            <p class=" text-center"><?= $success ?></p>
        </div>
        <?php
        }
        ?>
    </div>
    <div>
        <div class="no-records p-4">
            <?php if (isset($_SESSION["cart_item"])) : ?>
            <a href="/best-wines/commander" class="btn btn-primary p-1">Valider la commande</a>

            <?php endif ?>
            <a href="javascript:history.go(-1)" class="btn btn-success p-1">Continuer mes achats</a>
        </div>
</section>