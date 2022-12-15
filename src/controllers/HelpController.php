<?php

namespace App\Controllers;

use Core\Controller;

class HelpController extends Controller
{
    public function showQui()
    {

        $title = "Qui sommes nous";
        $this->renderView('aide/qui-sommes-nous', compact('title'));
    }

    public function showMentions()
    {

        $title = "Mentions legales";
        $this->renderView('aide/mentions-legales', compact('title'));
    }
    public function showFaq()

    {

        $title = "FAQ";
        $this->renderView('aide/faq', compact('title'));
    }

    public function showContact()
    {

        $title = "Contact";
        $this->renderView('aide/contact', compact('title'));
    }

    public function showPresse()
    {

        $title = "Presse";
        $this->renderView('aide/presse', compact('title'));
    }

    public function showBlog()
    {

        $title = "Blog";
        $this->renderView('blog/blog', compact('title'));
    }
}