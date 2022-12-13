<section class="mt-5">
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

    <?php endif; ?>

    <div class="card mx-auto" style="width: 25vw;">
        <div class="container">
            <h2>Ajouter des accords</h2>
                <hr class="ps-2">
                <form class="mt-3 mb-5" action="<?= BASE_DIR ?>/admin/addaccord" method="post">
                    <label class="ms-2 form-label" for="accord">Ajouter un accord</label>
                    <input class="form-control" type="text" name="name" id="accord">
                    <input class="my-2 btn btn-primary form-control" type="submit" name="soumettre"
                        value="soumettre">
                </form>
        </div>


        <ul>
            <?php foreach ($accords as $accord_tag) : ?>

            <li><?= $accord_tag['accord_name'] ?></li>

            <?php endforeach; ?>
        </ul>
    </div>
</section>