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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_DIR ?>/assets/css/style.css">
    <title><?= $params['title'] ?></title>
</head>

<body id="main-body">
    <header>
        <nav id="conNav" class="navbar navbar-expand-lg justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_DIR ?>/login">connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_DIR ?>/register">inscription</a>
                </li>
                <?php if (isset($_SESSION['admin']['auth']) && $_SESSION['admin']['auth']) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_DIR ?>/admin/">Vue administrateur</a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <nav id="mainNav" class="navbar navbar-expand-lg">
            <div class="container-fluid justify-content-between">
                <a class="navbar-brand" href="<?= BASE_DIR ?>"><img class="navImg"
                        src="<?= BASE_DIR ?>/assets/img/nav-logo.png" alt="brand logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-around mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Nos vins
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-vins/all">Tous nos vins</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-rouges/all">Nos
                                        rouges</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-blancs/all">Nos
                                        blancs</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-roses/all">Nos
                                        ros??s</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-champagnes/all">Nos
                                        champagnes</a></li>
                                <!-- <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-vins/all">Nos mousseux</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-coffrets/all">Nos coffrets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-fournisseurs/index">Nos fournisseurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/aide/qui-sommes-nous">Qui sommes nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/blog/all">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/votre-panier/all">Panier <i
                                    class="ps-2 fa-solid fa-cart-arrow-down"></i></a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" aria-label="Search">
                        <input id="navBtn" class="gray" value="Rechercher" type="submit"></input>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid">

        <?= $content ?>

    </main>

    <footer class="container-fluid">
        <nav id="footerNav" class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <div class="">
                        <a class="nav-link" href="<?= BASE_DIR ?>/nos-vins/all">
                            <h3>Nos vins</h3>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-rouges/all">- Nos rouges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-blancs/all">- Nos blanc</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-roses/all">- Nos ros??s</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-champagnes/all">- Nos champagnes</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">- Nos mousseux</a>
                        </li> -->
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_DIR ?>/nos-coffrets/all">
                            <h3>Nos coffrets</h3>
                        </a>
                    </li>
                    <div class="d-flex align-items-center">
                        <a class=" navbar-brand" href="#"><img src="<?= BASE_DIR ?>/assets/img/Logo_icon .png"
                                alt="brand logo" width="150" height="150"></a>
                    </div>
                    <div class="nav-item">
                        <div class="gray nav-link">
                            <h3>Aide</h3>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/aide/faq">- FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/aide/mentions-legales">- Mentions l??gales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/aide/contact">- Contact</a>
                        </li>
                    </div>
                    <div class="nav-item">
                        <div class="bdx nav-link">
                            <h3 class="bdx">placeholder</h3>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/aide/presse">- Presse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/aide/qui-sommes-nous">- Qui sommes nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/blog/all">- Blog</a>
                        </li>
                    </div>
                </ul>
            </div>

        </nav>
    </footer>
    <script src="https://kit.fontawesome.com/64c10894b6.js" crossorigin="anonymous"></script>

    <script src="<?= BASE_DIR ?>/assets/js/index.js"></script>
    <script src="<?= BASE_DIR ?>/assets/js/script.js"></script>
    <script src="<?= BASE_DIR ?>/dist/index.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>