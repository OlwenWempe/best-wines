
<section class="mt-5">
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

    <?php endif; ?>

    <div class="column card mx-auto" style="width: 25vw;">
        <div class="container">
            <h2>Ajouter des goûts</h2>
                <hr class="ps-2">
                <form class="mt-3" action="<?= BASE_DIR ?>/admin/addtaste" method="post">
                    <label class="ms-2 form-label" for="taste">Ajouter un goût</label>
                    <input class="form-control" type="text" name="name" id="taste">
                    <input class="my-2 btn btn-primary form-control" type="submit" name="soumettre"
                        value="soumettre">
                </form>
        </div>

    <ul>
        <?php foreach ($tastes as $taste_tag) : ?>

        <li><?= $taste_tag['taste_name'] ?></li>

        <?php endforeach; ?>
    </ul>
    </div>
</section>