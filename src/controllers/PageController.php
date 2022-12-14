<?php

namespace App\Controllers;

use App\Models\Wine;
use Core\Controller;
use App\Models\Session;

session::startSession();

class PageController extends Controller
{
    public function homepage()
    {
        $title = "Accueil";
        $wine = new Wine();
        $wines = $wine->findNewest();
        $this->renderView('homepage', compact('title', 'wines'));
    }
}