<?php

namespace App\Controllers;

use Core\Controller;

class AdminController extends Controller
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
}