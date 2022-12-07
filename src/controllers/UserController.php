<?php

namespace App\Controllers;

use Core\Controller;



class UserController extends Controller
{

    public function login()
    {
        $this->renderView('user/login');
        //verifier si dans la bdd admin
        header("Location admin/login.php");
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
        echo "ceci est la méthode " . __FUNCTION__;
    }
}
