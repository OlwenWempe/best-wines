<section>
    <h1 class="text-center py-5">Bienvenue sur votre page admin</h1>
    <div class="row">
        <aside class="col-3 border-end">
            <div class="container">
                <h2>Afficher la liste des produits</h2>
                <hr class="ps-2">
                <button class="my-2 btn btn-primary"><a href="<?= BASE_DIR ?>/admin/indexwine">Afficher les
                        vins</a></button>
                <button class="my-2 btn btn-primary"><a href="<?= BASE_DIR ?>/admin/indexbox">Afficher les
                        box</a></button>
            </div>
            <div class="container">
                <h2>Ajouter des produits</h2>
                <hr class="ps-2">
                <button class="my-2 btn btn-primary"><a href="<?= BASE_DIR ?>/admin/addwine">Ajouter un vin</a></button>
                <button class="my-2 btn btn-primary"><a href="<?= BASE_DIR ?>/admin/addbox">Ajouter un box</a></button>
            </div>
            <div class="container">
                <h2>Ajouter des tags</h2>
                <hr class="ps-2">
                <form action="<?= BASE_DIR ?>/admin/addregion">
                    <label for="">Ajouter une région</label>
                    <input type="text" name="" id="">
                    <input type="submit" value="soumettre">
                </form>
                <form action="<?= BASE_DIR ?>/admin/addtype">
                    <label for=""></label>
                    <input type="text" name="" id="">
                    <input type="submit" value="soumettre">
                </form>
                <form action="<?= BASE_DIR ?>/admin/addtaste">
                    <label for=""></label>
                    <input type="text" name="" id="">
                    <input type="submit" value="soumettre">
                </form>
                <form action="<?= BASE_DIR ?>/admin/addaccord">
                    <label for=""></label>
                    <input type="text" name="" id="">
                    <input type="submit" value="soumettre">
                </form>
                <button class="my-2 btn btn-primary"><a href="<?= BASE_DIR ?>/admin/addwine">Ajouter un vin</a></button>
                <button class="my-2 btn btn-primary"><a href="<?= BASE_DIR ?>/admin/addbox">Ajouter un box</a></button>
            </div>
        </aside>
        <div class="col-9">

            <?= $content ?>

        </div>
    </div>

</section>