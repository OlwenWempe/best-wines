<?php

namespace App\Controllers;

use App\Models\Wine;
use Core\Controller;

session_start();
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
        $_SESSION['is_auth'] = true;
        $this->renderAdminView('user/login', compact('title'));

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

        // Détruire la session.
        $_SESSION['is_auth'] = false;

        $title = "Homepage";
        $this->renderAdminView('adminLayout', compact('title'));
    }
    //permets aux admin de rajouter des produits
    // public function addWine()
    // {
    //     echo "ceci est la méthode " . __FUNCTION__;
    // }

    // public function addBox()
    // {
    //     echo "ceci est la méthode " . __FUNCTION__;
    // }

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
            echo "ceci est la méthode " . __FUNCTION__;
        }
    }

    public function indexBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    // //permets d'éditer les produits existants.
    // public function editWine()
    // {
    //     echo "ceci est la méthode " . __FUNCTION__;
    // }

    // public function editBox()
    // {
    //     echo "ceci est la méthode " . __FUNCTION__;
    // }

    // //permets d'effacer un produits de la liste.
    // public function deleteWine()
    // {
    //     echo "ceci est la méthode " . __FUNCTION__;
    // }

    // public function deleteBox()
    // {
    //     echo "ceci est la méthode " . __FUNCTION__;
    // }

    public function addDiscount()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteDiscount()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }
}