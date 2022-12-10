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

<body id="main-body">
    <header>
        <nav class="navbar justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="login">connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">inscription</a>
                </li>
                <?php if (isset($_SESSION) && $_SESSION['is_auth']) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_DIR ?>/admin/login">Vue administrateur</a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="<?= BASE_DIR ?>/assets/img/nav-logo.png"
                        alt="brand logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Nos vins
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Nos rouges</a></li>
                                <li><a class="dropdown-item" href="#">Nos blancs</a></li>
                                <li><a class="dropdown-item" href="#">Nos rosés</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Nos champagnes</a></li>
                                <li><a class="dropdown-item" href="#">Nos mousseux</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos coffrets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos fournisseurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Qui sommes nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <?= $content ?>

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