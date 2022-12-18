<section class="my-5">
    <?php if (isset($success)) : ?>
    <div class="mx-auto col-5 alert alert-success">
        <p class="text-center"><?= $success ?></p>
    </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
    <div class="mx-auto col-5 alert alert-danger">
        <p class="text-center"><?= $error ?></p>
    </div>
    <?php else : ?>
    <div id="supplierShow" class="container ">
        <div class="row">
            <h1 class="bdx text-center my-5"><?= $supplier['supplier_name'] ?></h1>
            <div class="col-5 ps-5">
                <img class="w-50 rounded-circle" src="<?= BASE_DIR . "/" . $supplier['logo'] ?>"
                    alt="<?= $supplier['supplier_name'] ?> logo">
                <div class="mt-5">
                    <h2 class="my-3 showSubtitle">Adresse :</h2>
                    <div class="">
                        <p><?= $supplier['adress'] ?></p>
                        <p><?= $supplier['zipcode'] ?> <?= $supplier['city'] ?></p>
                        <p><?= $pays['nom_fr_fr'] ?></p>
                    </div>
                    <h2 class="my-3 showSubtitle">Email :</h2>
                    <p><?= $supplier['email'] ?></p>
                    <h2 class="my-3 showSubtitle">N° telephone :</h2>
                    <p><?= $supplier['phone_number'] ?></p>
                    <h2 class="my-3 showSubtitle">SIREN :</h2>
                    <p><?= $supplier['siren'] ?></p>
                    <?php if (isset($_SESSION['admin']['auth']) && ($_SESSION['admin']['auth'])) : ?>
                    <form class="mt-3" action="supplier" method="get">
                        <input class="btn btn-primary" type="submit" name="submit" value="modifier">
                    </form>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-7">
                <img class="rounded-4 mt-5" src="<?= BASE_DIR . "/" . $supplier['opt_pic'] ?>"
                    alt="<?= $supplier['supplier_name'] ?> photo">
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>