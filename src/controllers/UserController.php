<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Session;


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
        echo "ceci est la méthode register";
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