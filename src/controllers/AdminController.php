<?php

namespace App\Controllers;



use App\Models\Admin;
use App\Models\Wine;
use App\Models\Coffret;
use App\Models\Supplier;
use App\Models\Pays;
use App\Models\Article;
use Core\Controller;
use App\Models\Session;
use App\Models\TasteTag;
use App\Models\AccordTag;


session::startSession();
pays::countrySearch();

class AdminController extends Controller
{
    public function homepage()
    {
        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        AdminController::checkLogged();
        $title = "Homepage";
        $this->renderAdminView('admin/index', compact('title', 'payss'));
    }


    public function login()
    {
        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $title = "Connexion";

        if (isset($_POST['submit'])) {

            /*********Vérification*********** */

            if (isset($_POST['submit'])) {

                // vérifier si les champs sont remplis
                if (empty($_POST['email'])) {
                    $message = 'Veuillez rentrer votre adresse mail.';
                    $this->renderAdminView('user/login', compact('title', 'message', 'payss'));
                }
                if (empty($_POST['password'])) {
                    $message = 'Veuillez rentrer votre mot de passe.';
                    $this->renderAdminView('user/login', compact('title', 'message', 'payss'));
                } else {
                    // Récupérer les données du formulaire

                    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);


                    if (!$email) {
                        $message = "Veuillez rentrer un mail valide.";
                        $this->renderAdminView('user/login', compact('title', 'message', 'payss'));
                    } else {
                        $email = strip_tags($email);
                        $admin = new Admin;
                        $admins = $admin->findOneBy(['email' => $email]);

                        if (!$admin) {
                            $message = "Oups, nous ne vous connaissons pas.";
                        } else {
                            if (password_verify(htmlspecialchars($_POST['password']), $admins["password"])) {

                                $_SESSION['admin']['auth'] = TRUE;
                                $_SESSION['admin']['id'] = $admins['id'];
                                $_SESSION['admin']['first_name'] = $admins['first_name'];
                                $_SESSION['admin']['last_name'] = $admins['last_name'];
                                $_SESSION['admin']['email'] = $admins['email'];
                                $_SESSION['admin']['phone'] = $admins['phone_number'];
                                $title = "Homepage";
                                $this->renderAdminView('admin/index', compact('title', 'payss'));
                            } else {
                                $passerror = "Ce n'est pas le bon mot de passe.";
                                $this->renderAdminView('user/login', compact('title', 'passerror', 'payss'));
                            }
                        }
                    }
                }
            }
        }

        $this->renderAdminView('user/login', compact('title', 'payss'));

        //verifier si dans la bdd admin
        // header("Location admin/login.php");
        //sinon verification dans la BDD supplier
        // sinon verification dans la bdd client
        // echo "ceci est la méthode login";
    }

    /**
     * 
     */
    public function logout(): void
    {
        session::startSession();
        // Détruire la session.
        $_SESSION['admin']['auth'] = false;

        header('Location: admin/login');
        // $title = "Connexion";
        // $this->renderAdminView('user/login', compact('title'));
    }

    /**
     * afficher la liste des vins
     * @return void
     */
    public function indexWine(): void
    {
        $title = "Nos-vins";
        $wine = new Wine();

        $winess = $wine->findAll();
        $taste_tag = new TasteTag();
        $accord_tag = new AccordTag();
        foreach ($winess as $wine) {
            $id = $wine['wine_id'];
            $accord_tags = $accord_tag->findAccord($id, $is_array = true);
            $taste_tags = $taste_tag->findAccord($id, $is_array = true);
            $wine['accord_tags'] = $accord_tags;
            $wine['taste_tags'] = $taste_tags;
            $wines[] = $wine;
        }
        if (!$wines) {
            $message = "Désolé, nous n'avons pas pu récupérer les données.";
            $this->renderAdminView('admin/indexWine', compact('wines', 'message', 'title'));
        } else {
            $this->renderAdminView('admin/indexWine', compact('wines', 'title'));
        }
    }

    public function indexBox()
    {
        $pays = new Pays();
        $payss = $pays->findAll();
        $title = "Nos-box";
        $box = new Coffret();

        $boxes = $box->findAll();
        if (!$boxes) {
            $message = "Désolé, nous n'avons pas pu récupérer les données.";
            $this->renderAdminView('admin/indexBox', compact('boxes', 'message', 'title', 'payss'));
        } else {
            $this->renderAdminView('admin/indexBox', compact('boxes', 'title', 'payss'));
        }
    }

    public function addDiscount()
    {
        $pays = new Pays();
        $payss = $pays->findAll();
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteDiscount()
    {
        $pays = new Pays();
        $payss = $pays->findAll();
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public static function checkLogged(): void
    {
        session::startSession();
        if (!isset($_SESSION['admin']['auth']) || !$_SESSION['admin']['auth']) {
            header('Location: admin/login');
            exit;
        }
    }

    public function checkUnlogged(string $path): void
    {
        session::startSession();
        if (isset($_SESSION['admin']['auth']) && $_SESSION['admin']['auth']) {
            $this->path = $path;
            header('Location: ' . $this->path);
            //admin/login
            exit;
        }
    }

    public function register()
    {
        $pays = new Pays();
        $payss = $pays->findAll();

        $title = "Ajout d'un administrateur";



        if (isset($_POST['submit'])) {

            $admin = new Admin();
            $admin->setFirstName(strip_tags($_POST['first_name']));
            $admin->setLastName(strip_tags($_POST['last_name']));
            $admin->setEmail(strip_tags($_POST['email']));
            $admin->setPassword(password_hash($_POST['password'], PASSWORD_ARGON2I));
            $admin->setPhoneNumber(strip_tags($_POST['phone_number']));


            $result = $admin->register();

            if ($result) {
                $success =  "insertion bien effectuée";
                $this->renderAdminView('admin/register', compact('success', 'title', 'payss'));
            } else {
                $error = "échec";
                $this->renderAdminView('admin/register', compact('error', 'title', 'payss'));
            }
        }
        $this->renderAdminView('admin/register', compact('title', 'payss'));
    }

    public function registerSupplier()
    {
        $title = "Ajout d'un fournisseur";
        $this->checkLogged();

        $pays = new Pays;
        $payss = $pays->findAll();

        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

            $supplier = new Supplier();
            $supplier = $supplier->already_exists('siren', $_POST['siren']);
            if ($supplier) {
                $error = "Ce numéro de SIREN est déjà existant dans la base de données";
                $this->renderAdminView('admin/addSupplier', compact('error', 'title', 'payss'));
            }
            $supplier = new Supplier();
            $supplier = $supplier->already_exists('supplier_name', $_POST['name']);
            if ($supplier) {
                $error = "Ce Raison Sociale est déjà existant dans la base de données";
                $this->renderAdminView('admin/addSupplier', compact('error', 'title', 'payss'));
            }

            //Traitement et enregistrement des images
            if (count($_FILES) <= 2) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";

                //traitement de l'image logo
                if ($_FILES['logo']['error'] == 0 && in_array($_FILES['logo']['type'], $allowed)) {

                    $folder = "logos/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }

                    //verification si le photo a déjà été upload ( en cas d'erreur dans l'insertion notamment)
                    if (!isset($_POST['logo'])) {

                        if ($_FILES['logo']['type'] == "image/jpeg") {
                            $nameFile = uniqid() . ".jpeg";
                        } else {
                            $nameFile = uniqid() . ".png";
                        }

                        $destination = $folder . $nameFile;

                        //resize function

                        $logo = new \Gumlet\ImageResize($_FILES['logo']['tmp_name']);
                        $logo->crop(500, 500);
                        $logo->save($destination);
                        $_POST['logo'] = $destination;
                    }
                }
                if ($_FILES['opt_pic']['error'] == 0 && in_array($_FILES['opt_pic']['type'], $allowed)) {

                    $folder = "opt_pic/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }

                    //verification si le photo a déjà été upload ( en cas d'erreur dans l'insertion notamment)
                    if (!isset($_POST['opt_pic'])) {

                        if ($_FILES['opt_pic']['type'] == "image/jpeg") {
                            $nameFile = uniqid() . ".jpeg";
                        } else {
                            $nameFile = uniqid() . ".png";
                        }

                        $destination2 = $folder . $nameFile;

                        //resize function

                        $opt_pic = new \Gumlet\ImageResize($_FILES['opt_pic']['tmp_name']);
                        $opt_pic->crop(500, 500);
                        $opt_pic->save($destination2);
                        $_POST['opt_pic'] = $destination2;
                    }
                }
            }



            $supplier = new Supplier();
            $supplier->setName(strip_tags($_POST['name']));
            $supplier->setAdress(strip_tags($_POST['adress']));
            $supplier->setZipcode(strip_tags($_POST['zipcode']));
            $supplier->setCity(strip_tags($_POST['city']));
            $supplier->setIdPays(strip_tags($_POST['id_pays']));
            $supplier->setPhoneNumber(strip_tags($_POST['phone_number']));
            $supplier->setEmail(strip_tags($_POST['email']));
            $supplier->setPassword(password_hash($_POST['password'], PASSWORD_ARGON2I));
            $supplier->setSiren(strip_tags($_POST['siren']));
            $supplier->setLogo($_POST['logo']);
            $supplier->setOptPic($_POST['opt_pic']);
            $result = $supplier->insert();
            if ($result) {
                $success = "insertion bien effectuée";
                $this->renderAdminView('admin/addSupplier', compact('success', 'title', 'payss'));
            } else {
                $error = "échec";
                $this->renderAdminView('admin/addSupplier', compact('error', 'title', 'payss'));
            }
        }
        $this->renderAdminView('admin/addSupplier', compact('title', 'payss'));
    }


    public function addArticle()
    {
        $this->checkLogged();
        if (isset($_POST['submit'])) {
            $article = new Article();
            $article->setContent($_POST['content']);
            $article->setIdAdmin($_SESSION['admin']['id']);
            $result = $article->insert();
            dump($result);
            if ($result) {
                $success = "insertion bien effectuée";
                $this->renderArticleView(compact('success'));
            } else {
                $error = "échec";
                $this->renderArticleView(compact('error'));
            }
        }
        $this->renderArticleView();
    }


    /**
     * afficher la liste des vins
     * @return void
     */
    public function index(): void
    {
        $title = "Blog";
        $article = new Article();

        $articles = $article->findAll();


        $this->renderView('blog/blog', compact('articles', 'title'));
    }
}