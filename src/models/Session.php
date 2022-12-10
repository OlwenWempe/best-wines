<?php

namespace App\Models;


class Session
{
    public static function startSession()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function checkKnown()
    {
        if (isset($_SESSION['user']['first_name'])) {
            $first_name = ($_SESSION['user']['first_name']);
        } else {
            $first_name = 'chèr(e) inconnu(e)';
            $_SESSION['error'][] = `Il semblerait que vous avez oublié de vous identifier`;
            header('Location: user/login');
        }
    }

    public function checkAdminKnown()
    {
        if (isset($_SESSION['admin']['first_name'])) {
            $first_name = ($_SESSION['admin']['first_name']);
        } else {
            $first_name = 'chèr(e) inconnu(e)';
            $_SESSION['error'][] = `Il semblerait que vous avez oublié de vous identifier`;
            header('Location: admin/login');
        }
    }

    public function checkSupplierKnown()
    {
        if (isset($_SESSION['supplier']['name'])) {
            $first_name = ($_SESSION['supplier']['name']);
        } else {
            $first_name = 'chèr(e) inconnu(e)';
            $_SESSION['error'][] = `Il semblerait que vous avez oublié de vous identifier`;
            header('Location: user/login');
        }
    }
}