<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_DIR ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_DIR ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_DIR ?>/favicon-16x16.png">
    <link rel="manifest" href="<?= BASE_DIR ?>/site.webmanifest">
    <link rel="stylesheet" href="<?= BASE_DIR ?>/assets/css/style.css">
    <title><?= $params['title'] ?></title>
</head>

<body id="admin-body">
    <header>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#"><img src="<?= BASE_DIR ?>/assets/img/nav-logo.png" alt="brand logo"></a>
            <div class="container-fluid">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_DIR ?>/">retour vers le site</a>
                    </li>
                    <?php if (!isset($_SESSION['admin']['auth']) || !$_SESSION['admin']['auth']) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_DIR ?>/admin/login">connexion</a>
                    </li>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['admin']['auth']) && $_SESSION['admin']['auth']) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_DIR ?>/logout">déconnexion</a>
                    </li>
                    <?php endif; ?>

                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="pb-5 row">
            <aside class=" col-3 border-end">
                <div class="container">
                    <h2>Afficher la liste des produits</h2>
                    <hr class="ps-2">
                    <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/indexwine">Afficher les
                        vins</a>
                    <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/indexbox">Afficher les
                        box</a>
                </div>
                <div class="container">
                    <h2>Ajouter des produits</h2>
                    <hr class="ps-2">
                    <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addwine">Ajouter un
                        vin</a>
                    <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addbox">Ajouter un
                        box</a>
                </div>
                <div class="container">
                    <h2>Ajouter des régions</h2>
                    <hr class="ps-2">
                    <div class="d-flex justify-content-center">
                        <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addregion">Ajouter une région</a>
                    </div>
                </div>

                <div class="container">
                    <h2>Ajouter des types</h2>
                    <hr class="ps-2">
                    <div class="d-flex justify-content-center">
                        <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addtype">Ajouter un type</a>
                    </div>
                </div>

                <div class="container">
                    <h2>Ajouter des goûts</h2>
                    <hr class="ps-2">
                    <div class="d-flex justify-content-center">
                        <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addtaste">Ajouter un goût</a>
                    </div>
                </div>

                <div class="container">
                    <h2>Ajouter des accords</h2>
                    <hr class="ps-2">
                    <div class="d-flex justify-content-center">
                        <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addaccord">Ajouter un accord</a>
                    </div>

                    <div class="container">
                        <h2>Ajouter un fournisseur</h2>
                        <hr class="ps-2">
                        <div class="d-flex justify-content-center">
                            <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addsupplier">Ajouter</a>
                        </div>
                    </div>
            </aside>
            <div class="col-9">

                <?= $content ?>

            </div>
        </section>

    </main>

    <footer>

    </footer>
    <script src="<?= BASE_DIR ?>/assets/js/index.js"></script>
    <script src="<?= BASE_DIR ?>/dist/index.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>