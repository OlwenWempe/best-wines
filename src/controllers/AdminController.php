<?php

namespace App\Controllers;

use Core\Controller;

class AdminController extends Controller
{
    public function homepage()
    {
        $title = "Homepage";
        $this->renderView('admin/index', compact('title'));
    }


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
    //permets aux admin de rajouter des produits
    public function addWine()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function addBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    //permets d'afficher la liste des vins ou box.
    public function indexWine()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function indexBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    //permets d'éditer les produits existants.
    public function editWine()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function editBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    //permets d'effacer un produits de la liste.
    public function deleteWine()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    public function deleteBox()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    //permets d'ajouter une region dans le menu select
    public function addRegion()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    //permets d'ajouter le type de vin dans le menu select
    public function addType()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    //permets d'ajouter les goûts des vins dans le menu select.
    public function addTaste()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }

    //permets d'ajouter avec quoi accorder les vins dans le menu select.
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