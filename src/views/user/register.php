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
    <div class="card mx-auto" style="width: 25vw;">
        <form action="<?= BASE_DIR ?>/register" method="POST" class="card-body">
            <div id="connection-card" class="card-header">
                <h5 class="card-title text-center">S'inscrire</h5>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name'] ?>" type="text" class="form-control mt-3" id="first_name" placeholder="Prénom"
                        name="first_name">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name'] ?>" type="text" class="form-control mt-3" id="last_name" placeholder="Nom" name="last_name">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" type="email" class="form-control mt-3" id="userEmail" placeholder="Email" name="email">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe"
                        name="password">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['adress'])) echo $_POST['adress'] ?>" type="text" class="form-control mt-3" id="adress" placeholder="Adresse" name="adress">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['zipcode'])) echo $_POST['zipcode'] ?>" type="text" class="form-control mt-3" id="zipcode" placeholder="Code postal" name="zipcode">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['city'])) echo $_POST['city'] ?>" type="text" class="form-control mt-3" id="city" placeholder="Ville" name="city">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['phone'])) echo $_POST['phone'] ?>" type="tel" class="form-control mt-3" id="phone" placeholder="Numero de téléphone"
                        name="phone">
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="S'inscrire"></input>
        </form>
    </div>
</section>