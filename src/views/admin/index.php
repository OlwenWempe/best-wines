<section class="mt-5">
    <?php if (isset($success)) : ?>
    <div>
        <span class="text-success text-center"><?= $success ?></span>
    </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
    <div>
        <span class="text-danger text-center"><?= $error ?></span>
    </div>
    <?php endif; ?>
    <h3>
        Bienvenue <?= $_SESSION['admin']['first_name'] ?>
    </h3>
</section>