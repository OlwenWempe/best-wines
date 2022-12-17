<?php

namespace App\Controllers;

use App\Models\Supplier;
use Core\Controller;
use App\Models\Session;
use App\Models\Pays;

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

    public function show(): void
    {
        $title = "Notre-fournisseur";
        if (isset($_GET['id']) && $_GET['id'] != '' && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            try {
                $supplier = new Supplier();
                $supplier = $supplier->find($id, $is_array = true);
            } catch (\Exception $th) {
                $error = "Désolé nous ne connaissons pas ce fournisseur.";
                $this->renderView('supplier/show', compact('title', 'error'));
            }
            //récupération des tags liés au vin selectionné

            //recupération du pays lié au vin

            $idpays = $supplier['id_pays'];
            $pays = new Pays();
            $pays = $pays->find($idpays, $is_array = true);

            if ($_SESSION['admin']['auth']) {

                $this->renderAdminView('supplier/show', compact('supplier', 'pays', 'title'));
            } else {
                $this->renderView('supplier/show', compact('supplier', 'pays', 'title'));
            }
        }
    }
}