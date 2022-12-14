<section class="mt-5">
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>
    
    <div class="card mx-auto" style="width: 25vw;">
        <div class="container">
            <h2>Ajouter des types</h2>
                <hr class="ps-2">
                <form class="mt-3" action="<?= BASE_DIR ?>/admin/addtype" method="post">
                        <label class="ms-2 form-label" for="type">Ajouter un type</label>
                        <input class="form-control" type="text" name="name" id="type">
                        <input class="my-2 btn btn-primary form-control" type="submit" name="soumettre"
                            value="soumettre">
                    </form>
    </div>

    <ul>
        <?php foreach ($types as $type_wine) : ?>

        <li><?= $type_wine['type_name'] ?></li>

        <?php endforeach; ?>
    </ul>
    </div>
</section>