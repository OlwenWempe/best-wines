<section class="mt-5">
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>

    <div class="card mx-auto" style="width: 25vw;">
        <div class="container">
            <h2>Ajouter des régions</h2>
                <hr class="ps-2">
                <form class="mt-3" action="<?= BASE_DIR ?>/admin/addregion" method="post">
                    <label class="ms-2 form-label" for="region">Ajouter une région</label>
                    <input class="form-control" type="text" name="name" id="region">
                    <select class="form-control mt-3" name="id_pays" id="id_pays">
                        <option selected>Selectionnez le pays</option>
                        <option value="75">France</option>
                        <hr>
                            <?php foreach ($payss as $pays) : ?>
                            <option value="<?= $pays['id'] ?>"><?= $pays['nom_fr_fr'] ?></option>
                            <?php endforeach ?>
                    </select>
                    <input class="my-2 btn btn-primary form-control" type="submit" name="soumettre"
                    value="soumettre">
                </form>
        </div>

    <ul>
        <?php foreach ($regions as $region) : ?>

        <li><?= $region['region_name'] ?></li>

        <?php endforeach; ?>
    </ul>
    </div>
</section>
