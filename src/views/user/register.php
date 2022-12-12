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
        <form action="<?= BASE_DIR ?>/user/register" method="POST" class="card-body">
            <div id="connection-card" class="card-header">
                <h5 class="card-title text-center">Ajouter un utilisateur</h5>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input type="text" class="form-control mt-3" id="first_name" placeholder="Le prénom"
                        name="first_name">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input type="text" class="form-control mt-3" id="last_name" placeholder="Le nom" name="last_name">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input type="email" class="form-control mt-3" id="userEmail" placeholder="Email" name="email">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Le mot de passe"
                        name="password">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input type="text" class="form-control mt-3" id="adress" placeholder="Adresse" name="adress">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input type="text" class="form-control mt-3" id="zipcode" placeholder="Code postal" name="zipcode">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input type="text" class="form-control mt-3" id="city" placeholder="Ville" name="city">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input type="tel" class="form-control mt-3" id="phone_number" placeholder="Son numero de téléphone"
                        name="phone_number">
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Envoyer"></input>
        </form>
    </div>
</section>