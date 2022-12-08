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

    public function indexWine()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function indexBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function editWine()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function editBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteWine()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function addRegion()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function addType()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }
    public function addTaste()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function addAccord()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteRegion()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteType()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteTaste()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteAccord()
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
}