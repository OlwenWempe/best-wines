<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Session;
use App\Models\Client;


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