<?php

namespace App\Controllers;

use App\Models\Wine;
use App\Models\AccordTag;
use App\Models\TasteTag;
use App\Models\TypeWine;
use App\Models\Region;
use Core\Controller;

class WineController extends Controller
{
    /**
     * afficher la liste des tâches
     * @return void
     */
    public function index(): void
    {
        $title = "Nos-vins";
        $wine = new Wine();

        $wines = $wine->findAll();
        $message = "hello";
        $this->renderView('wines/index', compact('wines', 'message', 'title'));
    }
    // ?id=10
    // task/show/10
    public function show(int $id)
    {
    }

    public function insert()
    {
        $title = "Ajout d'un vin";

        if (isset($_POST['submit'])) {

            // $chemin = $_POST['lien']; // le chemin en absolu
            // // vous pouvez travailler en url relative aussi: img.jpg
            // $x = 500; # largeur a redimensionner
            // $y = 500; # hauteur a redimensionner

            // Header("Content-type: image/jpeg");
            // $img_new = imagecreatefromjpeg($chemin);
            // $size = getimagesize($chemin);
            // $img_mini = imagecreatetruecolor($x, $y);
            // imagecopyresampled($img_mini, $img_new, 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
            // $img_mini = imagejpeg($img_mini);

            $wine = new Wine();
            $wine->setName(strip_tags($_POST['name']));
            $wine->setDescription(strip_tags($_POST['description']));
            $wine->setGrapeVariety(strip_tags($_POST['grape_variety']));
            // $wine->setLinkPictureMax(strip_tags($_POST['lien']));
            // $wine->setLinkPictureMini($img_mini);
            $wine->setPrixDAchat(strip_tags($_POST['prix_d_achat']));
            $wine->setPrixDeVente(strip_tags($_POST['prix_de_vente']));
            $wine->setStock(strip_tags($_POST['stock']));
            $wine->setIdRegion(strip_tags($_POST['id_region']));
            $wine->setIdTypeWine(strip_tags($_POST['id_type_wine']));
            $wine->setIdTasteTag(strip_tags($_POST['id_taste_tag']));
            $wine->setIdAccordTag(strip_tags($_POST['id_accord_tag']));
            $wine->setIdSupplier(strip_tags($_POST['id_supplier']));


            $result = $wine->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderView('wines/insert', compact('message', 'title'));
        }
        $this->renderView('wines/insert', compact('title'));
    }

    public function delete()
    {

        echo "Wine controller " . __FUNCTION__;
    }

    public function edit()
    {
        echo "Wine controller " . __FUNCTION__;
    }

    //permets d'ajouter une region dans le menu select
    public function addRegion()
    {
        $title = "Ajout d'une région";

        if (isset($_POST['submit'])) {

        $region = new Region();
        $region -> setName(strip_tags($_POST["name"]));
        $region -> setIdPays(strip_tags($_POST["id_pays"]));
        $result = $region->insert();

        if ($result) {
            $message =  "insertion bien effectuée";
        } else {
            $message =  "échec";
        }
        $this->renderAdminView('admin/index', compact('message', 'title'));
}
    }

    //permets d'ajouter le type de vin dans le menu select
    public function addType()
    {
        $title = "Ajout d'un type";

        if (isset($_POST['submit'])) {
        $type = new TypeWine();
        $type -> setName(strip_tags($_POST["name"]));
        $result = $type->insert();

        if ($result) {
            $message =  "insertion bien effectuée";
        } else {
            $message =  "échec";
        }
        $this->renderAdminView('admin/index', compact('message', 'title'));
    }
        }

    //permets d'ajouter les goûts des vins dans le menu select.
    public function addTaste()
    { $title = "Ajout d'un goût";

        if (isset($_POST['submit'])) {
        $taste = new TasteTag();
        $taste -> setName(strip_tags($_POST["name"]));
        $result = $taste->insert();

        if ($result) {
            $message =  "insertion bien effectuée";
        } else {
            $message =  "échec";
        }
        $this->renderAdminView('admin/index', compact('message', 'title'));
        }
    }

    //permets d'ajouter avec quoi accorder les vins dans le menu select.
    public function addAccord()
    { $title = "Ajout d'un accord";

        if (isset($_POST['submit'])) {

        $accord = new AccordTag();
        $accord -> setName(strip_tags($_POST["name"]));
        $result = $accord->insert();

        if ($result) {
            $message =  "insertion bien effectuée";
        } else {
            $message =  "échec";
        }
        $this->renderAdminView('admin/index', compact('message', 'title'));
    }
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
}