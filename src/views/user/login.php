<section class="mt-5">
    <div class="card mx-auto" style="width: 25vw;">
        <form method="POST" class="card-body">
            <div id="connection-card" class="card-header">
                <h5 class="card-title text-center">Se connecter</h5>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <input type="text" class="form-control mt-3" id="userEmail" placeholder="email@example.com"
                        name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">
                </div>
            </div>
            <?php if (isset($message)) : ?>
            <div>
                <span class="text-danger"><?= $message ?></span>
            </div>
            <?php endif; ?>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Votre mot de passe"
                        name="password">
                </div>
                <?php if (isset($passerror)) : ?>
                <div>
                    <span class="text-danger"><?= $passerror ?></span>
                </div>
                <?php endif; ?>

            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Envoyer"></input>
        </form>
    </div>
</section>