<section class="mt-5">
    <?php if (isset($success)) : ?>
    <div class="alert alert-success" role="alert">
        <p class="text-center"><?= $success ?></p>
    </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
        <p class="text-center"><?= $error ?></p>
    </div>
    <?php endif; ?>
    <div class="card mx-auto" style="width: 25vw;">
        <form action="<?= BASE_DIR ?>/admin/addsupplier" method="POST" class="card-body" enctype="multipart/form-data">
            <div id="connection-card" class="card-header">
                <h5 class="card-title text-center">Ajouter un fournisseur</h5>
            </div>

            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['name'])) echo $_POST['name'] ?>" type="text"
                        class="form-control mt-3" id="name" placeholder="Raison Sociale" name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['adress'])) echo $_POST['adress'] ?>" type="adress"
                        class="form-control mt-3" id="adress" placeholder="adresse" name="adress">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['zipcode'])) echo $_POST['zipcode'] ?>" type="text"
                        class="form-control mt-3" id="zipcode" placeholder="code postal" name="zipcode">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input required value="<?php if (isset($_POST['city'])) echo $_POST['city'] ?>" type="text"
                        class="form-control mt-3" id="city" placeholder="ville" name="city">
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
                    <input value="<?php if (isset($_POST['phone_number'])) echo $_POST['phone_number'] ?>" required
                        type="tel" class="form-control mt-3" id="phone_number" placeholder="Numero de t??l??phone"
                        name="phone_number">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <input value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" required type="email"
                        class="form-control mt-3" id="email" placeholder="Email" name="email">
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
                    <input value="<?php if (isset($_POST['siren'])) echo $_POST['siren'] ?>" required type="text"
                        class="form-control mt-3" id="siren" placeholder="Num??ro de SIREN" name="siren">
                </div>
            </div>
            <div class="my-3 row">
                <div class="">
                    <label for="logo">Logo :</label>
                    <input required value="<?php if (isset($_POST['logo'])) echo $_POST['logo'] ?>" type="file"
                        class="form-control mt-3" id="logo" name="logo">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="">
                    <label for="opt_pic">Image optionnelle :</label>
                    <input required value="<?php if (isset($_POST['opt_pic'])) echo $_POST['opt_pic'] ?>" type="file"
                        class="form-control mt-3" id="opt_pic" name="opt_pic">
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Envoyer"></input>
        </form>
    </div>
</section>