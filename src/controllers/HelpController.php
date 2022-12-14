<?php

namespace App\Controllers;

use Core\Controller;

class HelpController extends Controller
{
    public function showQui()
    {

        $title = "Qui sommes nous";
        $this->renderView('aide/qui', compact('title'));
    }

    public function showMentions()
    {

        $title = "Qui sommes nous";
        $this->renderView('aide/qui', compact('title'));
    }
}