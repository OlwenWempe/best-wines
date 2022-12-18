<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Session;
use App\Models\Client;
use App\Models\Supplier;

class UserController extends Controller
{



    public function login()
    {
        $title = "Connexion";
        $this->renderView('user/login', compact('title'));
        //verifier si dans la bdd admin
        // header("Location admin/login.php");
        //sinon verification dans la BDD supplier
        // sinon verification dans la bdd client
        // echo "ceci est la méthode login";
        if (!isset($_SESSION['referer'])) {
            $_SESSION['referer'] = $_SERVER['HTTP_REFERER'];
        }
        if (isset($_POST['submit'])) {
            // vérifier si les champs sont remplis
            if (empty($_POST['email'])) {
                $message = 'Veuillez rentrer votre adresse mail.';
                $this->renderView('user/login', compact('title', 'message'));
                exit;
            }
            if (empty($_POST['password'])) {
                $passerror = 'Veuillez rentrer votre mot de passe.';
                $this->renderView('user/login', compact('title', 'passerror'));
                exit;
            } else {
                // Récupérer les données du formulaire

                $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);


                if (!$email) {
                    $message = "Veuillez rentrer un mail valide.";
                    $this->renderView('user/login', compact('title', 'message'));
                } else {
                    $email = strip_tags($email);
                    $user = new Supplier;
                    $user = $user->findOneBy(['email' => $email]);
                    if ($user) {
                        if (password_verify(htmlspecialchars($_POST['password']), $user["password"])) {

                            $_SESSION['supplier']['auth'] = TRUE;
                            $_SESSION['supplier']['id'] = $user['supplier_id'];
                            $_SESSION['supplier']['first_name'] = $user['supplier_name'];
                            $_SESSION['supplier']['email'] = $user['email'];
                            $_SESSION['supplier']['phone'] = $user['phone_number'];
                            $title = "Homepage";
                            // $path = explode('best-wines/', $_SESSION['referer'])[1];
                            // unset($_SESSION['referer']);
                            if (isset($_SESSION["cart_item"])) {
                                $title = "Votre panier";
                                $this->renderView('cart/index', compact('title'));
                                die;
                            } else {
                                $this->renderView('/', compact('title'));
                            }
                        } else {
                            $passerror = "Ce n'est pas le bon mot de passe.";
                            $this->renderView('user/login', compact('title', 'passerror'));
                        }
                    } else {
                        $user = new Client;
                        $user = $user->findOneBy(['email' => $email]);

                        if ($user) {
                            if (password_verify(htmlspecialchars($_POST['password']), $user["password"])) {

                                $_SESSION['client']['auth'] = TRUE;
                                $_SESSION['client']['id'] = $user['id'];
                                $_SESSION['client']['first_name'] = $user['first_name'];
                                $_SESSION['client']['last_name'] = $user['last_name'];
                                $_SESSION['client']['email'] = $user['email'];
                                $_SESSION['client']['phone'] = $user['phone'];
                                $title = "Homepage";

                                if (isset($_SESSION["cart_item"])) {
                                    $title = "Votre panier";
                                    $this->renderView('cart/index', compact('title'));
                                    die;
                                } else {
                                    $this->renderView('/', compact('title'));
                                }
                            } else {
                                $passerror = "Ce n'est pas le bon mot de passe.";
                                $this->renderView('user/login', compact('title', 'passerror'));
                            }
                        } else {
                            $message = 'Navré, vous nous êtes inconnu(e).';
                            $this->renderView('user/login', compact('title', 'message'));
                        }
                    }
                }
            }
        }
    }

    public function register()
    {

        $title = "Inscription";

        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

            $client = new Client();
            $client = $client->already_exists('email', $_POST['email']);
            if ($client) {
                $error = "Cette adresse mail est déjà existante dans la base de données";
                $this->renderView('user/register', compact('error', 'title'));
                die;
            }




            $client = new Client();
            $client->setFirstName(strip_tags($_POST['first_name']));
            $client->setLastName(strip_tags($_POST['last_name']));
            $client->setEmail(strip_tags($_POST['email']));
            $client->setPassword(password_hash($_POST['password'], PASSWORD_ARGON2I));
            $client->setAdress(strip_tags($_POST['adress']));
            $client->setZipcode(strip_tags($_POST['zipcode']));
            $client->setCity(strip_tags($_POST['city']));
            $client->setPhone(strip_tags($_POST['phone']));


            $result = $client->register();

            if ($result) {
                $success =  "inscription bien effectuée";
                $this->renderView('user/register', compact('success', 'title'));
            } else {
                $error = "échec";
                $this->renderView('user/register', compact('error', 'title'));
            }
        }
        $this->renderView('user/register', compact('title'));
    }



    public function logout()
    {
        // Initialiser la session
        session_start();

        // Détruire la session.
        if (session_destroy()) {
            // Redirection vers la page de connexion
            $this->renderView('user/logout');
        }
    }

    //verifier si le client est bien connecté sinon direction login
    public function checkLogged()
    {
        $s = new Session;
        $s->startSession();
        if (!isset($_SESSION['user']['auth']) || !$_SESSION['user']['auth']) {
            header('Location: user/login');
            exit;
        }
    }

    //verifier si le client est connecté avant de procéder à la redirection
    public function checkUnlogged(string $path): void
    {
        $s = new Session;
        $s->startSession();
        if (isset($_SESSION['user']['auth']) && $_SESSION['user']['auth']) {
            $this->path = $path;
            header('Location: ' . $this->path);
            //admin/login
            exit;
        }
    }
}