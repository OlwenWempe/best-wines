<section class="mt-5">
    <div class="card mx-auto" style="width: 25vw;">
        <form method="POST" class="card-body">
            <div id="connection-card" class="card-header">
                <h5 class="card-title text-center">Se connecter</h5>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Envoyer"></input>
        </form>
    </div>
</section>