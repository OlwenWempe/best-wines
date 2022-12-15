<section data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false">
    <?php if (isset($success)) : ?>
    <div class="alert alert-success" role="alert">
        <p class=" text-center"><?= $success ?></p>
    </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
        <p class="text-center"><?= $error ?></p>
    </div>
    <?php endif; ?>
    <div class="centered">
        <div class="row row-editor">
            <div class="editor-container">
                <form action="<?= BASE_DIR ?>/blog/creation-article" method="POST">
                    <textarea name="content" class="editor" type="text"
                        value="<?php if (isset($_POST['content'])) echo $_POST['content'] ?>">

                            </textarea>
                    <input type="submit" name="submit" value="soumettre">
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<footer class="container-fluid">
    <nav id="footerNav" class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="<?= BASE_DIR ?>/nos-roses/all">- Nos rosés</a>
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
                        <a class="nav-link" href="<?= BASE_DIR ?>/aide/mentions-legales">- Mentions légales</a>
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

<script src="../build/ckeditor.js"></script>
<script>
const watchdog = new CKSource.EditorWatchdog();

window.watchdog = watchdog;

watchdog.setCreator((element, config) => {
    return CKSource.Editor
        .create(element, config)
        .then(editor => {




            return editor;
        })
});

watchdog.setDestructor(editor => {



    return editor.destroy();
});

watchdog.on('error', handleError);

watchdog
    .create(document.querySelector('.editor'), {

        licenseKey: '',



    })
    .catch(handleError);

function handleError(error) {
    console.error('Oops, something went wrong!');
    console.error(
        'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
    );
    console.warn('Build id: i8rv1uxqtnbn-89boiabg98r3');
    console.error(error);
}
</script>
<script src="<?= BASE_DIR ?>/assets/js/index.js"></script>
<script src="<?= BASE_DIR ?>/dist/index.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>