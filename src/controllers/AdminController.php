<?php

namespace App\Controllers;



use App\Models\Admin;
use App\Models\Wine;
use Core\Controller;
use App\Models\Session;


session::startSession();

if (!isset($_SESSION['is_auth'])) {
    $_SESSION['is_auth'] = false;
}


class AdminController extends Controller
{
    public function homepage()
    {
        $title = "Homepage";
        $this->renderAdminView('admin/index', compact('title'));
    }


    public function login()
    {
        $title = "Connexion";

        if (isset($_POST['submit'])) {

            /*********Vérification*********** */

            if (isset($_POST['submit'])) {

                // vérifier si les champs sont remplis
                if (empty($_POST['email'])) {
                    $message = 'Veuillez rentrer votre adresse mail.';
                    $this->renderAdminView('user/login', compact('title', 'message'));
                }
                if (empty($_POST['password'])) {
                    $message = 'Veuillez rentrer votre mot de passe.';
                    $this->renderAdminView('user/login', compact('title', 'message'));
                } else {
                    // Récupérer les données du formulaire

                    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);


                    if (!$email) {
                        $message = "Veuillez rentrer un mail valide.";
                        $this->renderAdminView('user/login', compact('title', 'message'));
                    } else {
                        $email = strip_tags($email);
                        $admin = new Admin;
                        $admins = $admin->findOneBy(['email' => $email]);

                        if (!$admin) {
                            $message = "Oups, nous ne vous connaissons pas.";
                        } else {
                            if (password_verify(htmlspecialchars($_POST['password']), $admins["password"])) {

                                $_SESSION['admin']['auth'] = TRUE;
                                $_SESSION['admin']['first_name'] = $admins['first_name'];
                                $_SESSION['admin']['last_name'] = $admins['last_name'];
                                $_SESSION['admin']['email'] = $admins['email'];
                                $_SESSION['admin']['phone'] = $admins['phone_number'];
                                $success = "Bienvenue dans votre espace" . $admins['first_name'];
                                $this->renderAdminView('admin/index', compact('title', 'success'));
                            } else {
                                $passerror = "Ce n'est pas le bon mot de passe.";
                                $this->renderAdminView('user/login', compact('title', 'success', 'passerror'));
                            }
                        }
                    }
                }
            }
        }

        $this->renderAdminView('user/login', compact('title'));

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
        $_SESSION['is_auth'] = false;

        header('Location: admin/login');
        // $title = "Connexion";
        // $this->renderAdminView('user/login', compact('title'));
    }

    //permets d'afficher la liste des vins ou box.
    public function indexWine(): void
    {
        $title = "Nos-vins";
        $wine = new Wine();

        $wines = $wine->findAll();
        if (!$wines) {
            $message = "Désolé, nous n'avons pas pu récupérer les données.";
        } else {
            $this->renderAdminView('admin/index', compact('wines', 'message', 'title'));
        }
    }

    public function indexBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function addDiscount()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteDiscount()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public static function checkLogged()
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
                $this->renderAdminView('admin/register', compact('success', 'title'));
            } else {
                $error =  "échec";
                $this->renderAdminView('admin/register', compact('error', 'title'));
            }
        }
        $this->renderAdminView('admin/register', compact('title'));
    }
}