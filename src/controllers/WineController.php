<?php

namespace App\Controllers;

use App\Models\Wine;
use App\Models\AccordTag;
use App\Models\TasteTag;
use App\Models\TypeWine;
use App\Models\Region;
use App\Models\Pays;
use App\Models\Supplier;
use Core\Controller;

class WineController extends Controller
{
    /**
     * afficher la liste des vins
     * @return void
     */
    public function index(): void
    {
        $title = "Nos-vins";
        $wine = new Wine();

        $winess = $wine->findAll();
        $taste_tag = new TasteTag();
        $accord_tag = new AccordTag();
        foreach ($winess as $wine) {
            $id = $wine['wine_id'];
            $accord_tags = $accord_tag->findAccord($id, $is_array = true);
            $taste_tags = $taste_tag->findAccord($id, $is_array = true);
            $wine['accord_tags'] = $accord_tags;
            $wine['taste_tags'] = $taste_tags;
            $wines[] = $wine;
        }

        $this->renderView('wines/index', compact('wines', 'title'));
    }

    public function indexColor(): void
    {
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-rouges/all") {
            $id = 1;
            $name = "rouges";
        }
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-blancs/all") {
            $id = 2;
            $name = "blancs";
        }
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-roses/all") {
            $id = 3;
            $name = "roses";
        }
        if ($_SERVER['REQUEST_URI'] == BASE_DIR . "/nos-champagnes/all") {
            $id = 4;
            $name = "champagnes";
        }

        $title = "Nos-" . $name;
        try {
            $wine = new Wine();
            $winess = $wine->findAllBy(['id_type_wine' => $id], $is_array = true);
        } catch (\Exception $th) {
            $error = "Désolé nous n'avons pas ce type de produit.";
            $this->renderView('wines/showWine', compact('title', 'error'));
        }
        $taste_tag = new TasteTag();
        $accord_tag = new AccordTag();
        foreach ($winess as $wine) {
            $id = $wine['wine_id'];
            $accord_tags = $accord_tag->findAccord($id, $is_array = true);
            $taste_tags = $taste_tag->findAccord($id, $is_array = true);
            $wine['accord_tags'] = $accord_tags;
            $wine['taste_tags'] = $taste_tags;
            $wines[] = $wine;
        }
        $this->renderView('wines/index', compact('wines', 'title'));
    }


    public function show(): void
    {
        $title = "Nos-vins detail";
        if (isset($_GET['id']) && $_GET['id'] != '' && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            try {
                $wine = new Wine();
                $wine = $wine->findWine($id, $is_array = true);
            } catch (\Exception $th) {
                $error = "Désolé nous ne connaissons pas ce produit.";
                $this->renderView('wines/showWine', compact('title', 'error'));
            }
            //récupération des tags liés au vin selectionné
            $taste_tag = new TasteTag();
            $accord_tag = new AccordTag();
            $accord_tags = $accord_tag->findAccord($id, $is_array = true);
            $taste_tags = $taste_tag->findAccord($id, $is_array = true);
            //recupération du pays lié au vin
            $idregion = $wine['id_region'];
            $region = new Region();
            $region = $region->findAllBy(['region_id' => $idregion], $is_array = true);
            $idpays = $region[0]['id_pays'];
            $pays = new Pays();
            $pays = $pays->find($idpays, $is_array = true);

            if ($_SESSION['admin']['auth']) {

                $this->renderAdminView('wines/showWine', compact('wine', 'taste_tags', 'accord_tags', 'pays', 'title'));
            } else {
                $this->renderView('wines/showWine', compact('wine', 'taste_tags', 'accord_tags', 'pays', 'title'));
            }
        }
    }

    public function insert()
    {
        $title = "Ajout d'un vin";
        AdminController::checkLogged();
        $tag = new AccordTag();
        $accordTags = $tag->findAll();

        $region = new Region();
        $regions = $region->findAll();

        $pays = new Pays();
        $payss = $pays->findAll();

        $type = new TypeWine();
        $types = $type->findAll();

        $tastetag = new TasteTag();
        $tasteTags = $tastetag->findAll();

        $supplier = new Supplier();
        $suppliers = $supplier->findAll();

        if (isset($_POST['submit'])) {

            if (count($_FILES) == 1) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                if ($_FILES['link_picture_max']['error'] == 0 && in_array($_FILES['link_picture_max']['type'], $allowed)) {

                    $folder = "uploads/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $folderMini = "uploadsMini/";
                    if (!file_exists($folderMini)) {
                        mkdir($folderMini, 0777, true);
                    }
                    $folderIcon = "uploadsIcon/";
                    if (!file_exists($folderIcon)) {
                        mkdir($folderIcon, 0777, true);
                    }
                    if ($_FILES['link_picture_max']['type'] == "image/jpeg") {
                        $nameFile = uniqid() . ".jpeg";
                    } else {
                        $nameFile = uniqid() . ".png";
                    }

                    $destination = $folder . $nameFile;
                    $destination2 = $folderMini . $nameFile;
                    $destination3 = $folderIcon . $nameFile;
                    move_uploaded_file($_FILES['link_picture_max']['tmp_name'], $destination);
                    $_POST['link_picture_max'] = $nameFile;

                    //resize function

                    $img_mini = new \Gumlet\ImageResize($destination);
                    $img_mini->crop(250, 250);
                    $img_mini->save($destination2);
                    $img_mini->crop(80, 80);
                    $img_mini->save($destination3);
                }
            }



            $wine = new Wine();
            $wine->setName(strip_tags($_POST['name']));
            $wine->setDescription(strip_tags($_POST['description']));
            $wine->setGrapeVariety(strip_tags($_POST['grape_variety']));
            $wine->setLinkPictureMax($_POST['link_picture_max']);
            $wine->setPrixDAchat(strip_tags($_POST['prix_d_achat']));
            $wine->setPrixDeVente(strip_tags($_POST['prix_de_vente']));
            $wine->setStock(strip_tags($_POST['stock']));
            $wine->setIdRegion(strip_tags($_POST['id_region']));
            $wine->setIdTypeWine(strip_tags($_POST['id_type_wine']));
            $wine->setIdTasteTag(($_POST['id_taste_tag']));
            $wine->setIdAccordTag(($_POST['id_accord_tag']));
            $wine->setIdSupplier(strip_tags($_POST['id_supplier']));



            $result = $wine->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('wines/insert', compact('message', 'accordTags', 'regions', 'payss', 'types', 'tasteTags', 'suppliers', 'title'));
        }
        $this->renderAdminView('wines/insert', compact('title', 'accordTags', 'regions', 'payss', 'types', 'tasteTags', 'suppliers'));
    }

    public function delete()
    {

        echo "Wine controller " . __FUNCTION__;
    }

    public function edit()
    {
        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $title = "Modification d'un vin";

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
            $wine->setIdTasteTag(($_POST['id_taste_tag']));
            $wine->setIdAccordTag(($_POST['id_accord_tag']));
            $wine->setIdSupplier(strip_tags($_POST['id_supplier']));


            $result = $wine->edit();

            if ($result) {
                $message =  "Modification bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('wines/insert', compact('message', 'title', 'payss'));
        }
        $this->renderAdminView('wines/insert', compact('title', 'payss'));
    }

    //permets d'ajouter une region dans le menu select
    public function addRegion()
    {
        AdminController::checkLogged();
        $title = "Ajout d'une région";
        
        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $region = new Region();
        $regions = $region->findAll($is_array = true);


        if (isset($_POST['soumettre'])) {

            $region = new Region();
            $region->setName(strip_tags($_POST["name"]));
            $region->setIdPays(strip_tags($_POST["id_pays"]));
            $result = $region->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addRegion', compact('regions', 'message', 'title', 'payss'));
        }
        $this->renderAdminView('tags/addRegion', compact('regions', 'title', 'payss'));
    }

    //permets d'ajouter le type de vin dans le menu select
    public function addType()
    {
        AdminController::checkLogged();
        $title = "Ajout d'un type";

        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $type = new TypeWine();
        $types = $type->findAll($is_array = true);

        if (isset($_POST['soumettre'])) {
            $type = new TypeWine();
            $type->setName(strip_tags($_POST["name"]));
            $result = $type->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addType', compact('types', 'title', 'message', 'payss'));
        }
        $this->renderAdminView('tags/addType', compact('types', 'title', 'payss'));
    }

    //permets d'ajouter les goûts des vins dans le menu select.
    public function addTaste()
    {
        AdminController::checkLogged();
        $title = "Ajout d'un goût";

        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $taste = new TasteTag();
        $tastes = $taste->findAll($is_array = true);

        if (isset($_POST['soumettre'])) {
            $taste = new TasteTag();
            $taste->setName(strip_tags($_POST["name"]));
            $result = $taste->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addTaste', compact('tastes', 'title', 'message', 'payss'));
        }
        $this->renderAdminView('tags/addTaste', compact('tastes', 'title', 'payss'));
    }

    //permets d'ajouter avec quoi accorder les vins dans le menu select.
    public function addAccord()
    {
        AdminController::checkLogged();
        $title = "Ajout d'un accord";

        $pays = new Pays();
        $payss = $pays->findAll($is_array = true);

        $accord = new AccordTag();
        $accords = $accord->findAll($is_array = true);

        if (isset($_POST['soumettre'])) {

            $accord = new AccordTag();
            $accord->setName(strip_tags($_POST["name"]));
            $result = $accord->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderAdminView('tags/addAccord', compact('accords', 'title', 'message', 'payss'));
        }
        $this->renderAdminView('tags/addAccord', compact('accords', 'title', 'payss'));
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