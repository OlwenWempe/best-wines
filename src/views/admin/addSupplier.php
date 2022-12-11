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
        <form action="<?= BASE_DIR ?>/admin/addsupplier" method="POST" class="card-body">
            <div id="connection-card" class="card-header">
                <h5 class="card-title text-center">Ajouter un fournisseur</h5>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="text" class="form-control mt-3" id="logo" placeholder="logo" name="logo">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="text" class="form-control mt-3" id="name" placeholder="Raison Sociale"
                        name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="adress" class="form-control mt-3" id="adress" placeholder="adresse"
                        name="adress">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="text" class="form-control mt-3" id="zipcode" placeholder="code postal"
                        name="zipcode">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="text" class="form-control mt-3" id="city" placeholder="ville" name="city">
                </div>
            </div>
            <div class="mb-3">
                <select class="form-control mt-3" name="id_pays" id="id_pays">
                    <option selected>Selectionnez le pays</option>
                    <option value="75">France</option>
                    <hr>
                    <?php foreach ($payss as $pays) : ?>
                    <option value="<?= $pays['id'] ?>"><?= $pays['nom_fr_fr'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="tel" class="form-control mt-3" id="phone_number"
                        placeholder="Numero de téléphone" name="phone_number">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="email" class="form-control mt-3" id="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="password" class="form-control mt-3" id="inputPassword"
                        placeholder="Le mot de passe" name="password">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required type="text" class="form-control mt-3" id="siren" placeholder="Numéro de SIREN"
                        name="siren">
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Envoyer"></input>
        </form>
    </div>
</section>