<?php

namespace App\Controllers;

use Core\Controller;



class UserController extends Controller
{

    public function login()
    {
        $this->renderView('product/index');
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