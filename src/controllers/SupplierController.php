<?php

namespace App\Controllers;

use App\Models\Supplier;
use Core\Controller;
use App\Models\Session;

class SupplierController extends Controller
{
    public function checkLogged()
    {
        $s = new Session;
        $s->startSession();
        if (!isset($_SESSION['supplier']['auth']) || !$_SESSION['supplier']['auth']) {
            header('Location: user/login');
            exit;
        }
    }

    public function checkUnlogged(string $path): void
    {
        $s = new Session;
        $s->startSession();
        if (isset($_SESSION['supplier']['auth']) && $_SESSION['supplier']['auth']) {
            $this->path = $path;
            header('Location: ' . $this->path);
            //admin/login
            exit;
        }
    }

    public function index(): void
    {
        $title = 'Nos-fournisseurs';

        $supplier = new Supplier;
        try {
            $suppliers = $supplier->findAll();
        } catch (\Exception $th) {
            $error = "Désolé. Nous rencontrons des difficultés à vous afficher la liste.";
            $this->renderView('supplier/index', compact('title', 'error'));
        }
        $this->renderView('supplier/index', compact('title', 'suppliers'));
    }
}